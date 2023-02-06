<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;
use App\Models\categories;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = categories::all();
        $data = [
            'tab' => 'Blog',
            'pages' => 'Kategori',
            'kategori' => $kategori,
        ];
        return view('post.kategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoriesRequest $request)
    {
        $valid = [
            'nama' => 'required',
        ];
        $validator = Validator::make($request->all(),$valid);

        if ($validator->fails()) {
            return back()->with('error', 'Tambah kategori gagal!')->withErrors($validator)->withInput();
        }
        $nama = $request->nama;
        categories::create([
            'nama' => $nama,
        ]);
        return back()->with('sukses', 'Tambah kategori berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoriesRequest  $request
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoriesRequest $request, $categories)
    {
        $valid = [
            'namabaru' => 'required',
        ];
        $validator = Validator::make($request->all(),$valid);

        if ($validator->fails()) {
            return back()->with('error', 'Edit kategori gagal!')->withErrors($validator)->withInput();
        }
        $nama = $request->namabaru;
        $categories = categories::find($categories);
        $categories->update([
            'nama' => $nama,
        ]);
        return back()->with('sukses', 'Edit kategori berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($categories)
    {
        $categories = categories::find($categories);
        $categories->delete();
        return back()->with('sukses', 'Hapus kategori berhasil!');
    }
}
