<?php

namespace Database\Seeders;

use App\Models\gs;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "KH. AHSAN MALIKI, S.Sy. M.Pd.",
                "KEPALA MADRASAH",
                "MULOK",
                "0811353331 / 08113224477"
            ],
            [
                "NON AHSAN QOMARUS ZAMAN, S.PdI",
                "GURU",
                "AKHLAK",
                "081252473947"
            ],
            [
                "NON AHSAN HABIBIFILLAH, M.Pd.",
                "GURU",
                "BAHASA ARAB",
                "082247566679"
            ],
            [
                "ACH. MUSTA’IN, S.PdI",
                "GURU",
                "BAHASA ARAB",
                "081233410996"
            ],
            [
                "SOLIHIN, S.HI",
                "GURU & WAKA KURIKULUM",
                "TIK",
                "085233050511"
            ],
            [
                "SHOHIHAH, S.PdI",
                "GURU",
                "AQIDAH AKHLAQ",
                ""
            ],
            [
                "ARIF WIJAYA, S.S",
                "GURU",
                "BAHASA INGGRIS",
                "081333117789"
            ],
            [
                "H. MUKODI, S.HI",
                "GURU",
                "NAHWU",
                "085257317111"
            ],
            [
                "SITI SHOLEHAH, S.Pd",
                "GURU",
                "BAHASA INDONESIA",
                "082332585412"
            ],
            [
                "MUHAMMAD SALEH, S.Kom",
                "GURU",
                "TIK",
                "085646700078"
            ],
            [
                "M. SYAHRI, S.Pd.I",
                "GURU / WALI KELAS XII. IAI. 2. PUTRI",
                "ILMU TAFSIR",
                "085330150812"
            ],
            [
                "BADRUS SALEH HASAN, S.Kom",
                "GURU",
                "TIK",
                "085230519078"
            ],
            [
                "ANINATUL BAIDIYAH, S.TP",
                "GURU",
                "BIOLOGI",
                "085233075078"
            ],
            [
                "MOH. IDIL MULTZAM, S.Pd.I",
                "GURU",
                "AKIDA AKHLAQ",
                "085259111559"
            ],
            [
                "WINANTO, S.Pd",
                "GURU",
                "PPKn & SEJARAH",
                "085230519960"
            ],
            [
                "BAMBANG SUMARYONO, ST",
                "GURU",
                "KIMIA",
                "081335511405 / 085646840738"
            ],
            [
                "FAIZAL KHAIRY APRILIANTO, S.Pd",
                "GURU",
                "GEOGRAFI",
                "085749333527"
            ],
            [
                "GATOT HERIYANTO, S.Pd.I",
                "GURU",
                "AL QUR’AN HADIST",
                "085236755355"
            ],
            [
                "YANTO, M.Si",
                "GURU",
                "PPKn & SOSIOLOGI",
                "085330207559"
            ],
            [
                "ROBIATUL ADAWIYAH, S.Si",
                "GURU",
                "MATEMATIKA",
                "082330712412"
            ],
            [
                "MULYADI, S.Pd",
                "GURU",
                "MATEMATIKA",
                "085233340678 / 085288003243"
            ],
            [
                "MOHAMMAD JAMALUL LAIL, S.Pd",
                "GURU",
                "FISIKA",
                "085733500155 / 082331103145"
            ],
            [
                "AHMAD TAUFIQ, S.Ag",
                "GURU & WAKA HUMAS",
                "FIQIH",
                "085258740225"
            ],
            [
                "LINDA ANGGRAINI, S.PdI",
                "GURU",
                "MULOK",
                "081331512714"
            ],
            [
                "ACHMAD BAKIR BASUNI,SH",
                "GURU",
                "BAHASA INGGRIS",
                ""
            ],
            [
                "ABD. ROHIM, Lc",
                "GURU",
                "BAHASA ARAB",
                "082334256131"
            ],
            [
                "AYU MALINDA BULQIS, S.HI",
                "GURU",
                "TAUHID",
                "082338403299 / 085645797590"
            ],
            [
                "MUKHLAS KHOLIL, S.HI",
                "GURU",
                "BAHASA ARAB",
                "085236868414"
            ],
            [
                "AGUS SURAHMAN, S.Si",
                "GURU",
                "KIMIA & SEJARAH",
                "085731259039"
            ],
            [
                "MARIYATUL KIPTIYAH, S.Ag",
                "GURU",
                "FIQIH",
                "085258418556"
            ],
            [
                "MUHAMMAD MUKHLAS, S.Pd",
                "GURU",
                "FISIKA",
                "085655955455"
            ],
            [
                "SAIFULLAH, S.Pd",
                "GURU",
                "EKONOMI",
                "082336400799"
            ],
            [
                "BAMBANG DWI MULYADI, S.Pd",
                "GURU",
                "BAHASA INGGRIS",
                "081336033053"
            ],
            [
                "MOHAMMAD HENDRA, M.PdI",
                "GURU",
                "SKI & AL QUR’AN HADIST",
                "081333611100"
            ],
            [
                "NUCKY LESTARINI, S.Pd",
                "GURU",
                "BAHASA INDONESIA",
                "085236928125"
            ],
            [
                "WASILATUR ROHIM, S.Pd",
                "GURU",
                "BAHASA INGGRIS",
                "082233665880"
            ],
            [
                "RIATININGSIH, S.Pd",
                "GURU",
                "BIOLOGI",
                "082330230711"
            ],
            [
                "DWI RESTIANA WIDYANINGSIH, S.Pd",
                "GURU",
                "MATEMATIKA",
                ""
            ],
            [
                "MISYATI, S.Pd",
                "GURU",
                "BAHASA INDONESIA",
                "085236618710"
            ],
            [
                "SITI BAHRIA, S.PdI",
                "GURU",
                "TAUHID",
                "082335524014"
            ],
            [
                "IRA DANIATI, S.Pd",
                "GURU",
                "GEOGRAFI",
                "085258740329"
            ],
            [
                "IZUDIN, S.PdI",
                "GURU",
                "AL QUR’AN HADIST",
                "085290044258"
            ],
            [
                "AHMAD JUWAINI M, S.Ag",
                "GURU / BENDAHARA",
                "PKn",
                "081332220999 / 085335118999"
            ],
            [
                "ZAENIH, SHI",
                "GURU / WAKA KESISWAAN",
                "AQIDAH AKHLAQ",
                "085230253951"
            ],
            [
                "HERAWATI, S.Pd",
                "GURU",
                "EKONOMI",
                "082325589943"
            ],
            [
                "REALIS KRISWATI, S.Pd",
                "GURU",
                "BAHASA INDONESIA",
                "081334311868"
            ],
            [
                "FAKHRUR RAZY, S.HI",
                "GURU & KEPALA TAHQIQ",
                "NAHWU",
                "085335970555 / 0816563626"
            ],
            [
                "ALI MUNIR MUSTAKHFIRIN, S.HI",
                "GURU",
                "FIQIH SYARI-AH",
                "085214700921"
            ],
            [
                "IKA ARIFAH, S.Pd",
                "GURU",
                "MATEMATIKA",
                "085258999827"
            ],
            [
                "MOH. ZARKASYI, S.PdI",
                "GURU",
                "ILMU HADIST",
                "085235592093"
            ],
            [
                "AHMAD MUHIBBUL FIRDAUS, S.PdI",
                "GURU / KEPALA PRODISTIK",
                "BAHASA ARAB",
                "085234556820"
            ],
            [
                "MAISUROH, S.PdI",
                "GURU",
                "SEJARAH KEBUDAYAAN ISLAM",
                "085230506087"
            ],
            [
                "ABDILLAH LUTHFI, S.Th.I",
                "GURU",
                "AL QUR’AN HADIST",
                "081234504234"
            ],
            [
                "BAROKATUL LAILI, S.HI",
                "GURU",
                "MULOK",
                "085204854304"
            ],
            [
                "ACH. NOOR BUSTHOMI, M.Si",
                "GURU",
                "SOSIOLOGI",
                "085330838337"
            ],
            [
                "SUMARYONO, M.PdI",
                "GURU",
                "TIK",
                "085204891113"
            ],
            [
                "MUHAMMAD HABIBI",
                "GURU",
                "HADIST",
                "085258840702"
            ],
            [
                "MOH. JUMA’IN, S.HI",
                "GURU",
                "AL QUR’AN",
                "085234931357"
            ],
            [
                "AHMAD SYAFI’I, SE",
                "GURU",
                "",
                "081646889885"
            ],
            [
                "AL-MUHARROM",
                "GURU",
                "",
                "082233315546"
            ],
            [
                "ACHMAD SYA’DULLAH, S.Pd",
                "GURU BK",
                "BK",
                "085649655934 / 0811334655"
            ],
            [
                "MUHAMMAD GULUH, S.PdI",
                "KARYAWAN / TOLMAN MADRASAH",
                "",
                "085235583454"
            ],
            [
                "DIDIK SUPRIYANTO, SH",
                "STAF. KESISWAAN",
                "",
                "08113589113"
            ],
            [
                "MOH. SU’UDI, S.PdI",
                "KEPALA TU",
                "",
                "08113589127"
            ],
            [
                "AMARIS SUBIANTORO, S.PdI",
                "STAF PERPUSTAKAAN MADRASAH",
                "",
                "08113589124"
            ],
            [
                "M. ZAINUL ARIFIN, S.Pd",
                "STAF. KURIKULUM",
                "",
                "085236755335"
            ],
            [
                "AHMAD SUHAEMI, SH",
                "STAF. KEUANGAN",
                "",
                "085232323349 / 0811323252"
            ],
            [
                "CANDRA USEH, S.PdI/td>\n                        ",
                "KARYAWAN",
                "",
                "085258740227"
            ],
            [
                "LILIK ATUS SHOLEHA, S.Pd.I",
                "STAF KESISWAAN",
                "",
                "081235233222"
            ],
            [
                "SUSILAWATI, S.PdI",
                "KARYAWAN",
                "",
                "085258949428"
            ],
            [
                "NUR FITRIYAH. S.PdI",
                "STAF KEUANGAN",
                "",
                "085233049987"
            ],
            [
                "SITI WALIDA",
                "KARYAWAN",
                "",
                "082234306021"
            ],
            [
                "IRFANI KHOIRIYAH",
                "KARYAWAN",
                "",
                "082310907641"
            ],
            [
                "MUHAMMAD DANIEL AINUL ISLAM",
                "KARYAWAN",
                "",
                "082325588569"
            ],
            [
                "RIFA‘I",
                "KARYAWAN",
                "",
                "082334807688"
            ],
            [
                "IQBAL ZAKARIYAH",
                "INSTRUKTUR PRODISTIK",
                "PEMROGRAMAN WEB DAN JARINGAN KOMPUTER",
                "085258619348"
            ],
            [
                "MISDIYANTO",
                "GURU PRODISTIK",
                "PEMROGRAMAN WEB DAN JARINGAN KOMPUTER",
                "082334869496"
            ],
            [
                "SANIRI, S.Kom",
                "GURU PRODISTIK",
                "TIK",
                "085130335670"
            ],
            [
                "ROFIQOH HANDAYANI",
                "GURU PRODISTIK",
                "TIK",
                "085258523739 / 085336141514"
            ],
            [
                "TAUFIQ QURROHMAN",
                "GURU PRODISTIK",
                "TIK",
                "085234640755"
            ],
            [
                "SYADIDATUL FAHMIAH",
                "GURU PRODISTIK",
                "ROBOTIKA",
                "085745771134"
            ]
        ];
        $data1 = [];
        $start = 2023001;
        foreach ($data as $d) {
            $p = [];
            $p['nama'] = $d[0];
            $p['jabatan'] = $d[1];
            $p['bidang_studi'] = $d[2];
            $p['no_hp'] = $d[3];
            $p['alamat'] = '-';
            $p['is_active'] = 1;
            $p['email'] = $start . '@mazainulhasan1.sch.id';
            $p['password'] = bcrypt($start);
            $p['username'] = strval($start);
            $start++;

            array_push($data1, $p);
        }

        foreach ($data1 as $d) {
            $user = [
                'name' => $d['nama'],
                'username' => $d['username'],
                'email' => $d['email'],
                'password' => bcrypt($d['password']),
                'role' => 'guru',
                'is_active' => 1,
            ];
            $user = User::create($user);
            $gs = [
                'uid' => $user->id,
                'alamat' => $d['alamat'],
                'jabatan' => $d['jabatan'],
                'bidang_studi' => $d['bidang_studi'],
                'no_hp' => $d['no_hp'],
            ];
            $profile = [
                'uid' => $user->id,
                'image' => null,
                'telegram' => null,
                'instagram' => null,
                'facebook' => null,
            ];
            gs::create($gs);
            Profile::create($profile);
        }

    }
}
