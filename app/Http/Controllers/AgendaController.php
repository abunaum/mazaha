<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

class AgendaController extends Controller
{
    private string $pageview;

    public function __construct()
    {
        $this->pageview = 'panelpage.admin.agenda.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $agenda = agenda::all();
        $data = [
            'tab' => 'Agenda',
            'pages' => 'Semua Agenda',
            'agenda' => $agenda,
        ];
        return view($this->pageview .'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $data = [
            'tab' => 'Agenda',
            'pages' => 'Tambah Agenda',
        ];
        return view($this->pageview .'tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $valid = [
            'judul' => 'required|max:255',
            'slug' => 'required|unique:posts|max:255',
            'gambar' => 'image|file|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'body' => 'required',
            'tempat' => 'required',
            'time' => 'required',
        ];
        $validator = Validator::make($request->all(), $valid);

        if ($validator->fails()) {
            return back()->with('error', 'Tambah agenda gagal!')->withErrors($validator)->withInput();
        }
        $agenda = [
            'judul' => $request->judul,
            'slug' => $request->slug,
            'body' => $request->body,
            'waktu' => $request->time,
            'tempat' => $request->tempat,
        ];


        if ($request->file('gambar')) {
            $filename = md5(date('Y-m-d H:i:s:u').'-'.$request->file('gambar')->getFilename());
            try {
                $pathandfile = 'gambar-agenda/'.$filename.'.jpg';
                Gdrive::put($pathandfile, $request->file('gambar'));
                $agenda['gambar'] = $pathandfile;
            } catch (\Throwable $th) {
                return back()->with('error', 'Post gagal ditambahkan! <br> '.'Gagal Upload ke Gdrive');
            }
        } else {
            $agenda['gambar'] = 'default-post.jpg';
        }
        agenda::create($agenda);
        return back()->with('sukses', 'Agenda berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param Request $agenda
     * @return Application|Factory|View
     */
    public function show(Request $agenda): View|Factory|Application
    {
        $agenda = agenda::where('id', $agenda->id)->first();
        $data = [
            'tab' => 'Agenda',
            'pages' => 'Detail Agenda',
            'agenda' => $agenda,
        ];
        return view('agenda.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param agenda $agenda
     * @return Application|Factory|View
     */
    public function edit(agenda $agenda)
    {
        $data = [
            'tab' => 'Agenda',
            'pages' => 'Edit Agenda',
            'agenda' => $agenda,
        ];
        return view($this->pageview .'edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param agenda $agenda
     * @return RedirectResponse
     */
    public function update(Request $request, agenda $agenda): RedirectResponse
    {
        if (!$agenda) {
            return back()->with('error', 'Agenda tidak ditemukan!');
        }
        $idagenda = $agenda->id;
        $gambaragenda = $agenda->gambar;
        $slugagenda = $agenda->slug;
        $valid = [
            'judul' => 'required|max:255',
            'slug' => 'required|unique:posts|max:255',
            'gambar' => 'image|file|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'body' => 'required',
            'tempat' => 'required',
            'time' => 'required',
        ];
        if ($request->slug != $slugagenda) {
            $valid['slug'] = 'required|unique:agenda|max:255';
        }
        $validator = Validator::make($request->all(), $valid);

        if ($validator->fails()) {
            return back()->with('error', 'Edit agenda gagal!')->withErrors($validator)->withInput();
        }
        $agenda = [
            'judul' => $request->judul,
            'slug' => $request->slug,
            'body' => $request->body,
            'waktu' => $request->time,
            'tempat' => $request->tempat,
        ];

        if ($request->file('gambar')) {
            $filename = md5(date('Y-m-d H:i:s:u').'-'.$request->file('gambar')->getFilename());
            if ($gambaragenda != 'default-post.jpg') {
                try {
                    Gdrive::delete($gambaragenda);
                    $pathandfile = 'gambar-agenda/'.$filename.'.jpg';
                    Gdrive::put($pathandfile, $request->file('gambar'));
                    $agenda['gambar'] = $pathandfile;
                } catch (\Throwable $th) {
                    return back()->with('error', 'Agenda gagal diedit! <br> '.'Gagal Hapus Gambar Lama');
                }
            } else {
                try {
                    $pathandfile = 'gambar-post/'.$filename.'.jpg';
                    Gdrive::put($pathandfile, $request->file('gambar'));
                    $agenda['gambar'] = $pathandfile;
                } catch (\Throwable $th) {
                    return back()->with('error', 'Agenda gagal diedit! <br> '.'Gagal Upload ke Gdrive');
                }
            }
        }
        agenda::where('id', $idagenda)->update($agenda);
        return back()->with('sukses', 'Agenda berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param agenda $agenda
     * @return RedirectResponse
     */
    public function destroy(agenda $agenda): RedirectResponse
    {
        $image = $agenda->gambar;
        if ($image != 'default-post.jpg'){
            Gdrive::delete($image);
        }
        agenda::destroy($agenda->id);
        return back()->with('sukses', 'Agenda berhasil dihapus!');
    }

    public function checkSlug(Request $request): \Illuminate\Http\JsonResponse
    {
        $slug = SlugService::createSlug(agenda::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }

    public function backup(): Response|Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        $agendas = agenda::latest()
            ->get();
        $agendanya = [];
        foreach ($agendas as $agenda) {
            $newagenda = [
                'judul' => $agenda['judul'],
                'slug' => $agenda['slug'],
                'body' => $agenda['body'],
                'gambar' => $agenda['gambar'],
                'tempat' => $agenda['tempat'],
                'waktu' => $agenda['waktu'],
            ];
            array_push($agendanya, $newagenda);
        }
        $fixagenda = ['dataagenda' => $agendanya];
        $jsonagenda = json_encode($fixagenda);
        return response($jsonagenda, 200, [
            'Content-Disposition' => 'attachment; filename="agenda-' . time() . '.json"'
        ]);
    }

    public function restore(Request $request)
    {
        $valid = [
            'filejson' => 'required|file|max:2048000|mimetypes:application/json,text/plaint',
        ];
        $message = [
            'filejson.required' => 'File restore wajib ada.',
            'filejson.file' => 'File yang di upload bukan file yang benar.',
            'filejson.max' => 'Ukuran File maksimal 2 GB.',
            'filejson.mimetypes' => 'Ekstensi file yang di izinkan adalah json.',
        ];
        $validator = Validator::make($request->all(), $valid, $message);

        if ($validator->fails()) {
            return back()->with('error', 'Restore agenda gagal!')->withErrors($validator)->withInput();
        }
        $data = file_get_contents($request->filejson);
        $arrdata = json_decode($data, true);

        $getdata = $arrdata['dataagenda'] ?? null;
        if (!$getdata) {
            return back()->with('error', 'Restore agenda gagal! <br> File yang di upload bukan file agenda.');
        }
        foreach ($getdata as $data) {
            $newdata = [
                'judul' => $data['judul'],
                'slug' => $data['slug'],
                'body' => $data['body'],
                'gambar' => $data['gambar'],
                'tempat' => $data['tempat'],
                'waktu' => $data['waktu'],
            ];
            agenda::create($newdata);
        }
        return back()->with('sukses', 'Restore agenda berhasil!');
    }

    public function list()
    {
        $agendas = agenda::orderBy('waktu', 'desc')
            ->cari(request(['cari']))
            ->paginate(7)
            ->withQueryString();
        $data = [
            'agendas' => $agendas,
            'pages' => 'agenda',
        ];
        return view('agenda.list', $data);
    }
}
