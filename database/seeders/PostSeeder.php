<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
                'excerpt' => 'Afifah Al Kamil, santri kelas XII Program Keagamaan (PK) MA Zainul Hasan 1 dinobatkan sebagai Juara 1 lomba Ghina’ Araby Tingkat Nasional pada Festival Zukhruf. Agenda tahunan ini diselenggarakan oleh Prodi Bahasa dan Sastra Arab (BSA) UIN Sunan Ampel Surabaya pada 9-11 November 2022. Sebelumnya ia berhasil lolos dari babak penyisihan yang pesertanya berasal dari instansi tingkat SLTA sampai Perguruan Tinggi. Di babak final, Afifah berhasil mengalahkan peserta dari Ponpes Nazhatut Thullab dan Al Kindy UIN Maulana Malik Ibrahim Malang sebagai j...',
                'body' => '<p class="ql-align-justify"><span style="background-color: rgb(255, 255, 255);">Afifah Al Kamil, santri kelas XII Program Keagamaan (PK) MA Zainul Hasan 1 dinobatkan sebagai Juara 1 lomba Ghina’ Araby Tingkat Nasional pada Festival Zukhruf. Agenda tahunan ini diselenggarakan oleh Prodi Bahasa dan Sastra Arab (BSA) UIN Sunan Ampel Surabaya pada 9-11 November 2022.</span></p><p class="ql-align-justify"><span style="background-color: rgb(255, 255, 255);">Sebelumnya ia berhasil lolos dari babak penyisihan yang pesertanya berasal dari instansi tingkat SLTA sampai Perguruan Tinggi. Di babak final, Afifah berhasil mengalahkan peserta dari Ponpes Nazhatut Thullab dan Al Kindy UIN Maulana Malik Ibrahim Malang sebagai juara 2 dan 3.</span></p><p class="ql-align-justify">Selain Afifah, 3 delegasi dari MA Zaha juga berhasil menjadi finalis cabang lomba yang lain. Salsabila Meisefiyani mendapat nilai tertinggi ke-5 pada Olimpiade Nahwu Shorof, Adn Rael Arkan Syah mendapat nilai tertinggi ke-4 pada lomba Khitobah Arabiyah, dan Mudrik Albar mendapat nilai tertinggi ke-6 pada Musabaqah Qiraatil Kutub.</p><p class="ql-align-justify">“Prestasi yang membanggakan. Menjadi finalis atau jadi juara itu keren banget, karena peserta lainnya tidak hanya dari pondok pesantren tapi juga dari kampus-kampus. Tinggal evaluasi untuk tahun depan,” ungkap Kepala Madrasah saat mendapat kabar pengumuman dari Surabaya (11/11). Beliau juga berharap setelah ini MA Zaha bisa terus meraih prestasi di berbagai bidang.<strong>.(en)</strong></p>',
                'gambar' => 'gambar-post/1675568450566.jpeg',
                'created_at' => new Carbon('2022-11-12 07:00:00'),
            ],
            [
                'categori' => 2,
                'author' => 2,
                'judul' => 'Kemah Blok Ada Lagi, Nun Alex: Ini Tarbiyah dan Pembentukan Karakter',
                'slug' => 'kemah-blok-ada-lagi-nun-alex-ini-tarbiyah-dan-pembentukan-karakter',
                'excerpt' => 'Setelah sempat ditiadakan selama tiga tahun karena pandemi Covid-19, Madrasah Aliyah Zainul Hasan 1 Genggong kembali melangsungkan Kemah Blok. Kegiatan yang dikhususkan kepada santri kelas X ini dilaksanakan pada 16-17 November untuk santri putri dan 19-21 November untuk santri putra.Bertempat di Bermi, Krucil, Probolinggo, Kemah Blok dilaksanakan...',
                'body' => '<p class="ql-align-justify"><span style="background-color: rgb(255, 255, 255);">Setelah sempat ditiadakan selama tiga tahun karena pandemi Covid-19, Madrasah Aliyah Zainul Hasan 1 Genggong kembali melangsungkan Kemah Blok. Kegiatan yang dikhususkan kepada santri kelas X ini dilaksanakan pada 16-17 November untuk santri putri dan 19-21 November untuk santri putra.</span></p><p class="ql-align-justify"><span style="background-color: rgb(255, 255, 255);">Bertempat di Bermi, Krucil, Probolinggo, Kemah Blok dilaksanakan dengan berbagai rangkaian kegiatan. Diantaranya pemberian materi Teknik Kepramukaan, Pendidikan Kemandirian, Pendidikan Jasmani dan Fisik, dan Pendidikan Rohani. Sedangkan puncak dari kegiatan ini adalah pelantikan penerimaan Tamu Ambalan menuju Anggota Ambalan yang ditujukan kepada santri baru MA Zaha.</span></p><p class="ql-align-justify">Nun Alex sebagai Kepala Madrasah mengatakan bahwa Kemah Blok adalah bagian dari tarbiyah dan pembentukan karakter santri untuk disiplin, giat, terampil, kreatif, dan siaga. Pihaknya juga menegaskan kegiatan tahunan ini juga implementasi kurikulum 2013 Permendikbud No. 63 Tahun 2014 tentang Kepramukaan.</p><p class="ql-align-justify">“Sengaja di Bermi, biar anak-anak menyatu dengan alam dan bertadabbur atas ciptaan Allah,” jelasnya saat ditanya alasan perkemahan ditempatkan di daerah pegunungan.</p><p class="ql-align-justify">Menurut Ustaz Bambang Dwi, antusiasme santri selama mengikuti kegiatan sangat bagus. “Meski sempat hujan, tapi mereka tetap semangat,” pungkasnya<strong>.(en)</strong></p>',
                'gambar' => 'gambar-post/CYWbHrfBFD5uMzx8YG6bWunLEtWXcRPdmwSa95k9.jpg',
                'created_at' => new Carbon('2022-11-23 07:00:00'),
            ],
            [
                'categori' => 3,
                'author' => 2,
                'judul' => 'Dua Santri MA Zaha Raih Juara 1 Pemrograman GIM',
                'slug' => 'dua-santri-ma-zaha-raih-juara-1-pemrograman-gim',
                'excerpt' => 'Lagi-lagi santri Madrasah Aliyah Zainul Hasan 1 Genggong menorehkan prestasi di bidang Teknologi Informatika. Elok Faiqoh dan Siti Ma’rifatul Khoir, dua santri kelas XII IPAini dinobatkan sebagai Juara 1 Lomba Pemrograman GIM pada ajang Procommit V.12 di Institut Teknologi Sepuluh November (ITS) Surabaya, Sabtu (26/11/2022).Procommit adalah singkat...',
                'body' => '<p class="ql-align-justify"><span style="background-color: rgb(242, 255, 222); color: rgb(103, 103, 103);">Lagi-lagi santri Madrasah Aliyah Zainul Hasan 1 Genggong menorehkan prestasi di bidang Teknologi Informatika. Elok Faiqoh dan Siti Ma’rifatul Khoir, dua santri kelas XII IPAini dinobatkan sebagai Juara 1 Lomba Pemrograman GIM pada ajang Procommit V.12 di Institut Teknologi Sepuluh November (ITS) Surabaya, Sabtu (26/11/2022).</span></p><p class="ql-align-justify"><span style="background-color: rgb(242, 255, 222); color: rgb(103, 103, 103);">Procommit adalah singkatan dari Prodistik Competition in IT, yang merupakan agenda tahunan Prodistik ITS Surabaya. Pesertanya berasal dari SMA/MA mitra ITS yang tersebar di Jawa Timur dan Jawa Tengah.</span></p><p class="ql-align-justify"><span style="background-color: rgb(242, 255, 222); color: rgb(103, 103, 103);">Sebelumnya Elok dan Khoir mengikuti babak penyisihan secara online pada 19/11/2022 dengan mengerjakan 2 produk GIM. Bersaing dengan 32 tim dari sekolah dan madrasah kemitraan Prodistik ITS Surabaya, tim dari MA Zaha berhasil lolos ke babak final bersama 14 tim lainnya.</span></p><p class="ql-align-justify"><span style="background-color: rgb(242, 255, 222); color: rgb(103, 103, 103);">Di babak final, keduanya diuji lagi mengerjakan 3 produk GIM dan berhasil menjadi 3 tim terbaik karena ketepatan dan kecepatannya menyelesaikan produk dibanding sekolah lain. 3 tim terbaik ini diberi kesempatan untuk presentasi, hingga akhirnya terpilihlah MA Zaha menjadi Juara 1 Pemrograman GIM Procommit V.12 tahun 2022.</span></p><p class="ql-align-justify"><span style="background-color: rgb(242, 255, 222); color: rgb(103, 103, 103);">Nun Alex, Kepala Madrasah yang turut hadir dan mendampingi ke ITS Surabaya mengaku sangat bangga atas capaian Prodistik MA Zaha tahun ini. “Mabruk. Ini ajang bergengsi, apalagi bidangnya programming. Bukti bahwa Madrasah dari Pesantren juga tidak kalah di bidang ini,” sanjungnya.</span></p><p class="ql-align-justify"><span style="background-color: rgb(242, 255, 222); color: rgb(103, 103, 103);"><span class="ql-cursor">﻿</span>Procommit memang dilaksanakan secara online selama dua tahun terakhir karena pandemi Covid-19. “Alhamdulillah, tahun ini mulai digelar offline lagi, lomba pemograman GIM pertama, dan kita langsung juara 1. Ini karena kegigihan peserta dan pembinanya,” imbuh Nun Alex<strong>.(en)</strong></span></p><p><br></p>',
                'gambar' => 'gambar-post/voQ2vvw5AjaBTXPsETgHPVhkgk3KTa2zjsAeOIvL.jpg',
                'created_at' => new Carbon('2022-11-27 07:00:00'),
            ],
            [
                'categori' => 1,
                'author' => 2,
                'judul' => 'MA Zaha Jalin Kerja Sama dengan ISI Surakarta',
                'slug' => 'ma-zaha-jalin-kerja-sama-dengan-isi-surakarta',
                'excerpt' => 'Sebanyak 52 santri MA Zainul Hasan 1 Genggong mengikuti Studi Kampus ke Institut Senin Indonesia, Surakarta, Solo pada Kamis, (3/11/2022). Mereka adalah santri Program Pendidikan Terapan Bidang TIK (Prodistik) jurusan Multimedia dan Desain. Kedatangan pihak MA Zaha ke ISI bertujuan untuk menjalin kerja sama dengan Fakultas Seni Rupa dan Desain (FSR...',
                'body' => '<p class="ql-align-justify"><span style="background-color: rgb(242, 255, 222); color: rgb(103, 103, 103);">Sebanyak 52 santri MA Zainul Hasan 1 Genggong mengikuti Studi Kampus ke Institut Senin Indonesia, Surakarta, Solo pada Kamis, (3/11/2022). Mereka adalah santri Program Pendidikan Terapan Bidang TIK (Prodistik) jurusan Multimedia dan Desain.</span></p><p class="ql-align-justify"><span style="background-color: rgb(242, 255, 222); color: rgb(103, 103, 103);">Kedatangan pihak MA Zaha ke ISI bertujuan untuk menjalin kerja sama dengan Fakultas Seni Rupa dan Desain (FSRD) Jurusan Film dan Televisi (FTV) dan Desain Komunikasi Visual (DKV). Pertemuan kedua pihak ini diharapkan bisa saling memberikan manfaat. “Misalnya nanti bisa lewat pengabdian kampus, bimbingan ToT, dan lain sebagainya,” jelas Widhi Nugroho, S.Sn, M.Sn., Kaprodi Jurusan FTV.</span></p><p class="ql-align-justify"><span style="background-color: rgb(242, 255, 222); color: rgb(103, 103, 103);"><span class="ql-cursor">﻿</span>Kepala Madrasah, Nun Alex, sangat berterima kasih pada pihak ISI Surakarta atas sambutan hangat yang diberikan kepada pihak MA Zaha. Di awal sambutannya beliau memaparkan semua program dan kegiatan Prodistik di MA Zaha. Selain penandatanganan MoU, Nun Alex meminta pihak ISI menjelaskan jurusan dan fakultas yang ada di kampus. “Harapannya nanti anak-anak kami bisa melanjutkan studi ke kampus ini lebih banyak lagi,” pungkasnya<strong>.(en)</strong></span></p><p><br></p>',
                'gambar' => 'gambar-post/1675572900434.jpeg',
                'created_at' => new Carbon('2022-11-05 07:00:00'),
            ],
        ];
        foreach ($data as $d) {
            $newdata = [
                'categori' => $d['categori'],
                'author' => $d['author'],
                'judul' => $d['judul'],
                'slug' => $d['slug'],
                'excerpt' => $d['excerpt'],
                'body' => $d['body'],
                'gambar' => $d['gambar'],
                'created_at' => $d['created_at']
            ];
            Post::create($newdata);
        }
    }
}
