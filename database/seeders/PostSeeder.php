<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
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
                'categori' => 3,
                'author' => 2,
                'judul' => 'Santri MA Zaha Jadi Finalis dan Juara 1 Festival Bahasa Arab Tingkat Nasional',
                'slug' => 'santri-ma-zaha-jadi-finalis-dan-juara-1-festival-bahasa-arab-tingkat-nasional',
                'body' => '<awal>Afifah Al Kamil, santri kelas XII Program Keagamaan (PK) MA Zainul Hasan 1 dinobatkan sebagai Juara 1 lomba Ghina’ Araby Tingkat Nasional pada Festival Zukhruf. Agenda tahunan ini diselenggarakan oleh Prodi Bahasa dan Sastra Arab (BSA) UIN Sunan Ampel Surabaya pada 9-11 November 2022.<enter>Sebelumnya ia berhasil lolos dari babak penyisihan yang pesertanya berasal dari instansi tingkat SLTA sampai Perguruan Tinggi. Di babak final, Afifah berhasil mengalahkan peserta dari Ponpes Nazhatut Thullab dan Al Kindy UIN Maulana Malik Ibrahim Malang sebagai juara 2 dan 3.<enter>Selain Afifah, 3 delegasi dari MA Zaha juga berhasil menjadi finalis cabang lomba yang lain. Salsabila Meisefiyani mendapat nilai tertinggi ke-5 pada Olimpiade Nahwu Shorof, Adn Rael Arkan Syah mendapat nilai tertinggi ke-4 pada lomba Khitobah Arabiyah, dan Mudrik Albar mendapat nilai tertinggi ke-6 pada Musabaqah Qiraatil Kutub.<enter>“Prestasi yang membanggakan. Menjadi finalis atau jadi juara itu keren banget, karena peserta lainnya tidak hanya dari pondok pesantren tapi juga dari kampus-kampus. Tinggal evaluasi untuk tahun depan,” ungkap Kepala Madrasah saat mendapat kabar pengumuman dari Surabaya (11/11). Beliau juga berharap setelah ini MA Zaha bisa terus meraih prestasi di berbagai bidang.<akhir>',
                'gambar' => 'gambar-post/1675568450566.jpeg',
                'created_at' => new Carbon('2022-11-12 07:00:00'),
            ],
            [
                'categori' => 2,
                'author' => 2,
                'judul' => 'Kemah Blok Ada Lagi, Nun Alex: Ini Tarbiyah dan Pembentukan Karakter',
                'slug' => 'kemah-blok-ada-lagi-nun-alex-ini-tarbiyah-dan-pembentukan-karakter',
                'body' => '<awal>Setelah sempat ditiadakan selama tiga tahun karena pandemi Covid-19, Madrasah Aliyah Zainul Hasan 1 Genggong kembali melangsungkan Kemah Blok. Kegiatan yang dikhususkan kepada santri kelas X ini dilaksanakan pada 16-17 November untuk santri putri dan 19-21 November untuk santri putra.<enter>Bertempat di Bermi, Krucil, Probolinggo, Kemah Blok dilaksanakan dengan berbagai rangkaian kegiatan. Diantaranya pemberian materi Teknik Kepramukaan, Pendidikan Kemandirian, Pendidikan Jasmani dan Fisik, dan Pendidikan Rohani. Sedangkan puncak dari kegiatan ini adalah pelantikan penerimaan Tamu Ambalan menuju Anggota Ambalan yang ditujukan kepada santri baru MA Zaha.<enter>Nun Alex sebagai Kepala Madrasah mengatakan bahwa Kemah Blok adalah bagian dari tarbiyah dan pembentukan karakter santri untuk disiplin, giat, terampil, kreatif, dan siaga. Pihaknya juga menegaskan kegiatan tahunan ini juga implementasi kurikulum 2013 Permendikbud No. 63 Tahun 2014 tentang Kepramukaan.<enter>“Sengaja di Bermi, biar anak-anak menyatu dengan alam dan bertadabbur atas ciptaan Allah,” jelasnya saat ditanya alasan perkemahan ditempatkan di daerah pegunungan.<enter>Menurut Ustaz Bambang Dwi, antusiasme santri selama mengikuti kegiatan sangat bagus. “Meski sempat hujan, tapi mereka tetap semangat,” pungkasnya<akhir>',
                'gambar' => 'gambar-post/CYWbHrfBFD5uMzx8YG6bWunLEtWXcRPdmwSa95k9.jpg',
                'created_at' => new Carbon('2022-11-23 07:00:00'),
            ],
            [
                'categori' => 3,
                'author' => 2,
                'judul' => 'Dua Santri MA Zaha Raih Juara 1 Pemrograman GIM',
                'slug' => 'dua-santri-ma-zaha-raih-juara-1-pemrograman-gim',
                'body' => '<awal>Lagi-lagi santri Madrasah Aliyah Zainul Hasan 1 Genggong menorehkan prestasi di bidang Teknologi Informatika. Elok Faiqoh dan Siti Ma’rifatul Khoir, dua santri kelas XII IPAini dinobatkan sebagai Juara 1 Lomba Pemrograman GIM pada ajang Procommit V.12 di Institut Teknologi Sepuluh November (ITS) Surabaya, Sabtu (26/11/2022).<enter>Procommit adalah singkatan dari Prodistik Competition in IT, yang merupakan agenda tahunan Prodistik ITS Surabaya. Pesertanya berasal dari SMA/MA mitra ITS yang tersebar di Jawa Timur dan Jawa Tengah.<enter>Sebelumnya Elok dan Khoir mengikuti babak penyisihan secara online pada 19/11/2022 dengan mengerjakan 2 produk GIM. Bersaing dengan 32 tim dari sekolah dan madrasah kemitraan Prodistik ITS Surabaya, tim dari MA Zaha berhasil lolos ke babak final bersama 14 tim lainnya.<enter>Di babak final, keduanya diuji lagi mengerjakan 3 produk GIM dan berhasil menjadi 3 tim terbaik karena ketepatan dan kecepatannya menyelesaikan produk dibanding sekolah lain. 3 tim terbaik ini diberi kesempatan untuk presentasi, hingga akhirnya terpilihlah MA Zaha menjadi Juara 1 Pemrograman GIM Procommit V.12 tahun 2022.<enter>Nun Alex, Kepala Madrasah yang turut hadir dan mendampingi ke ITS Surabaya mengaku sangat bangga atas capaian Prodistik MA Zaha tahun ini. “Mabruk. Ini ajang bergengsi, apalagi bidangnya programming. Bukti bahwa Madrasah dari Pesantren juga tidak kalah di bidang ini,” sanjungnya.<enter>Procommit memang dilaksanakan secara online selama dua tahun terakhir karena pandemi Covid-19. “Alhamdulillah, tahun ini mulai digelar offline lagi, lomba pemograman GIM pertama, dan kita langsung juara 1. Ini karena kegigihan peserta dan pembinanya,” imbuh Nun Alex<akhir>',
                'gambar' => 'gambar-post/voQ2vvw5AjaBTXPsETgHPVhkgk3KTa2zjsAeOIvL.jpg',
                'created_at' => new Carbon('2022-11-27 07:00:00'),
            ],
            [
                'categori' => 1,
                'author' => 2,
                'judul' => 'MA Zaha Jalin Kerja Sama dengan ISI Surakarta',
                'slug' => 'ma-zaha-jalin-kerja-sama-dengan-isi-surakarta',
                'body' => '<awal>Sebanyak 52 santri MA Zainul Hasan 1 Genggong mengikuti Studi Kampus ke Institut Senin Indonesia, Surakarta, Solo pada Kamis, (3/11/2022). Mereka adalah santri Program Pendidikan Terapan Bidang TIK (Prodistik) jurusan Multimedia dan Desain.<enter>Kedatangan pihak MA Zaha ke ISI bertujuan untuk menjalin kerja sama dengan Fakultas Seni Rupa dan Desain (FSRD) Jurusan Film dan Televisi (FTV) dan Desain Komunikasi Visual (DKV). Pertemuan kedua pihak ini diharapkan bisa saling memberikan manfaat. “Misalnya nanti bisa lewat pengabdian kampus, bimbingan ToT, dan lain sebagainya,” jelas Widhi Nugroho, S.Sn, M.Sn., Kaprodi Jurusan FTV.<enter>Kepala Madrasah, Nun Alex, sangat berterima kasih pada pihak ISI Surakarta atas sambutan hangat yang diberikan kepada pihak MA Zaha. Di awal sambutannya beliau memaparkan semua program dan kegiatan Prodistik di MA Zaha. Selain penandatanganan MoU, Nun Alex meminta pihak ISI menjelaskan jurusan dan fakultas yang ada di kampus. “Harapannya nanti anak-anak kami bisa melanjutkan studi ke kampus ini lebih banyak lagi,” pungkasnya<akhir>',
                'gambar' => 'gambar-post/1675572900434.jpeg',
                'created_at' => new Carbon('2022-11-05 07:00:00'),
            ],
            [
                'categori' => 2,
                'author' => 2,
                'judul' => 'Lantik OSIS Baru, Ini Harapan Kepala Madrasah',
                'slug' => 'lantik-osis-baru-ini-harapan-kepala-madrasah',
                'body' => '<awal>Kepala Madrasah Aliyah Zainul Hasan 1 Genggong menyelenggarakan pembinaan guru yang memang rutin dilakukan setiap triwulan pada Kamis, (15/09/2022). Kali ini, Kepala Madrasah yang biasa disapa Nun Alex tersebut mengundang tiga narasumber khusus dari Kantor Kementrian Agama Kabupaten Probolinggo untuk memberikan pembinaan sekaligus pelatihan mengenai implementasi Kurikulum Merdeka (Kurmer).<enter>Menurut beliau, meskipun para guru sudah mendapatkan sosialisasi sebelumnya, tapi perlu diadakan pelatihan khusus agar kesiapan untuk menerapkan seratus persen kurikulum ini di tahun mendatang lebih maksimal.<enter>Kepala Kantor Kementrian Agama Kabupaten Probolinggo, Dr. Akhmad Sruji Bahtiar, M.Pd mengajak para guru untuk terus berinovasi dan menjaga amanah sebagai guru yang bertugas untuk mendidik dan menyiapkan generasi berikutnya. “Tugas kita menyiapkan generasi yang siap fisik, mental, dan keilmuan,” tuturnya. Ia mengibaratkan guru seperti aktor yang harus tahu dan paham bagaimana cara memerankan peran yang diterimanya.<enter>Saat ini implementasi Kurmer pada madrasah belum menyeluruh, tetapi masih berupa piloting. Meskipun demikian, Kasie. Pendidikan Agama (Pendma) Kabupaten Probolinggo, Moh. Barzan, S.Ag, M.Pd.I berharap semua guru siap, dimulai dari mengenal istilah dan komponen baru pada Kurikulum Merdeka. “Sebenarnya saya yakin MA Zaha sudah sangat siap dengan kurikulum ini. Karena esensinya telah dilakukan oleh kurikulum pesantren. Hanya perlu penyesuaian saja,” jelasnya.<enter>Bapak Sholehuddin, S.Ag, M.Pd sebagai Pengawas Madrasah menjelaskan Kurmer secara teknis dengan sangat detail. Menurutnya kegiatan dan program sudah ada, tetapi bagaimana nanti Wakil Kepala Madrasah Bagian Kurikulum bisa menyusunnya sesuai ketentuan Kurmer di awal tahun pelajaran mendatang.<enter>Kurang lebih 70 guru mengikuti kegiatan dengan antusias. Terlihat dari diskusi yang komunikatif antara Bapak Sholehuddin dan para guru yang menyampaikan pertanyaan-pertanyaan.<enter>Tak cukup sehari, dalam beberapa minggu ke depan ia akan datang kembali ke MA Zaha untuk melanjutkan materi pelatihan lebih lengkap lagi.<akhir>',
                'gambar' => 'gambar-post/1675656692290.jpeg',
                'created_at' => new Carbon('2022-10-06 07:00:00'),
            ],
            [
                'categori' => 1,
                'author' => 2,
                'judul' => 'Adakan Pembinaan, Kamad MA Zaha Datangkan 3 Narasumber dari Kemenag Probolinggo',
                'slug' => 'adakan-pembinaan-kamad-ma-zaha-datangkan-3-narasumber-dari-kemenag-probolinggo',
                'body' => '<awal>Sebanyak 60 santri yang terdiri dari OSIS Putra dan Putri mengikuti pelantikan dengan khidmat. Sebelumnya, Ketua OSIS Demisioner menyerahkan Laporan Pertanggungjawaban pengurus OSIS sebagai tanda bahwa kepengurusan sebelumnya telah selesai.<enter>Pada pelantikan kali ini, Kepala Madrasah yang akrab disapa Nun Alex meminta pengurus OSIS bisa menjadi teladan untuk santri lainnya, “Aktif dalam semua kegiatan dan mengutamakan kesisiplinan, tegasnya.” Menurut Nun Alex, OSIS adalah ruh Madrasah. Sehingga beliau meminta agar semua anggota terlantik bisa menjalankan amanah dengan baik hingga akhir periode.<enter>Dalam arahannya, beliau mengulang-ulang hadis Nabi, “Tidak sempurna keimanan seseorang jika tidak menjalankan amanah dengan baik. Dan tidak sempurna agama seseorang yang tidak menunaikan janji. (HR. Ahmad). “Coba saja dibaca terus menerus dengan menghayati maknanya, sampai makna hadis ini mendarah daging pada diri kalian,” pesannya.<enter>Saat ditemui, Ketua OSIS Putri, Virza Adelia menyampaikan dirinya sadar menjadi pemimpian bukan hal yang mudah. “Setiap organisasi pasti akan menjumpai kendala. Tapi saya yakin, insya Allah bisa diselesaikan asalkan semua anggota bisa bekerja sama,” ungkapnya<akhir>',
                'gambar' => 'gambar-post/1675658730882.jpeg',
                'created_at' => new Carbon('2022-09-15 07:00:00'),
            ],
            [
                'categori' => 1,
                'author' => 2,
                'judul' => 'Pemilihan Ketua OSIS, MA ZAHA 1 Gunakan E-voting',
                'slug' => 'pemilihan-ketua-osis-ma-zaha-1-gunakan-e-voting',
                'body' => '<awal>GENGGONG: Pemilihan Ketua OSIS putra masa khidmat 2022/2023 di MA Zainul Hasan 1 Genggong, Kecamatan Pajarakan Kabupaten Probolinggo, menerapkan pemungutan suara secara elektronik atau e-voting dengan aplikasi Robot Telegram SiMumtaz MA ZAHA, Kamis (8/9/2022) tadi.&nbsp;<enter>Lukman salah satu panitia mengatakan pemilihan Ketua OSIS dengan sistem e-voting sangat memudahkan para pemilih dalam menentukan pilihannya. Karena pemilih hanya menunjukkan data nama dan kelas yang kemudian diverifikasi oleh petugas, setelah itu pemilih mendapat username dan pasword yang berfungsi mengaktifkan layar pemungutan suara.&nbsp;<enter>Setelah mucul gambar calon, pemilih hanya tinggal memilih calon. Bahkan dalam sistem ini, jika pilihannya tidak sesuai atau ganti pilihan, pemilih juga dapat menganulir dan kemudian memilih kembali.<enter>“Dengan Sistem e-voting ini sangat bagus dan modern, karena mempermudah untuk Pemilu dan memilih calon, kalau prosesnya itu kita dari pendaftaran untuk mendapat username dan pasword itu, kemudian masuk ke bilik suara dan memilih calon, lebih mudah,” katanya.<enter>Di tempat yang sama, Kepala MA Zainul Hasan 1 Genggong, Nun Hassan Ahsan Malik mengatakan, pemanfaatan teknologi digital di era revolusi society 5.0 ini dapat meminimalisir kecurangan dalam penghitungan suara. Karena semua suara yang masuk sudah terekap oleh sistem. Bahkan, username dan pasword para pemilih tidak bisa dipakai memilih untuk kedua kali.&nbsp;<enter>“Amazing, setingkat Madrasah kita sudah bisa mengupayakan untuk bisa melaksanakan pemilihan secara e-voting yang jujur, terbuka dan transparan tanpa ada suara terkurangi atau penggelembungan suara. Hal ini bukti keseriusan MA&nbsp;Zainul Hasan 1 Genggong dalam berdigital menjawab perkembangan digitalisasi di lingkungan Madrasah dan Pesantren,” ujar Kepala Biro Kominfo Pesantren Zainul Hasan Genggong.<enter>Selanjutnya, panitia pesta demokrasi langsung dapat mengumumkan Ketua OSIS terpilih melalui live streaming youtube official MA ZAHA 1 GENGGONG.<enter>Dalam sistem e-voting ini, kita menyediakan aplikasinya di komputer dan jumlah pemilih dapat diketahui, bahkan di e-voting ini, hasil suara pemilihan langsung terekap sistem setelah pemilih selesai memilih, jadi e-voting lebih hemat, efektif, karena waktunya cepat.<akhir>',
                'gambar' => 'gambar-post/nUeoFFPewV2bFrqWjgx83B65vU1VjpfkHGKDNdR2.jpg',
                'created_at' => new Carbon('2022-09-08 07:00:00'),
            ],
        ];
        foreach ($data as $d) {
            $body = $d['body'];
            $body = str_replace('<awal>','<p class="ql-align-justify"><span>',$body);
            $body = str_replace('<enter>','</span></p><p class="ql-align-justify"><span>',$body);
            $body = str_replace('<akhir>','<strong>.(en)</strong></span></p><p><br></p>',$body);
            $excerpt = str_replace("&nbsp;"," ",Str::limit(strip_tags($body), 350, '...'));
            $newdata = [
                'categori' => $d['categori'],
                'author' => $d['author'],
                'judul' => $d['judul'],
                'slug' => $d['slug'],
                'excerpt' => $excerpt,
                'body' => $body,
                'gambar' => $d['gambar'],
                'created_at' => $d['created_at']
            ];
            Post::create($newdata);
        }
    }
}
