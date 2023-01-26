@extends('layouts.main')
@section('hero')
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">
                    <h1>Madrasah Aliyah Zainul Hasan 1</h1>
                    <h2>Madrasah Mumtaz Berkualitas!</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="https://mazainulhasan1.sch.id" target="_blank" class="btn-get-started scrollto">Berita</a>
                        <a href="https://www.youtube.com/watch?v=2coSKe0kGkI" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Lihat Kami</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200" style="text-align:center;">
                    <img src="assets/img/LOGO.png" class="img-fluid animated" alt="logo" style="height: 50vh;">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="clients" class="clients arab-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">
                <div class="col-lg-12 col-md-12 d-flex align-items-center justify-content-center">
                    <p class="animated-arab" dir="rtl"></p>
                </div>
            </div>

        </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="program" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Program</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Program Pilihan :
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> UIlmu Agama Islam(IAI/MAK)</li>
                        <li><i class="ri-check-double-line"></i> Ilmu Sosial (IPS)</li>
                        <li><i class="ri-check-double-line"></i> Ilmu Alam (IPA)</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Program Unggulan :
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Prodistik</li>
                        <li><i class="ri-check-double-line"></i> Tahqiqu Qiroatil Kutub</li>
                        <li><i class="ri-check-double-line"></i> Tahfidhul Quran</li>
                        <li><i class="ri-check-double-line"></i> MA Vokasi</li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>Mengapa harus sekolah di <strong>Madrasah Aliyah Zainul Hasan 1</strong></h3>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>
                                    Alasan No 1 <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        Keterangan Alasan no 1
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>
                                    Alasan no 2 <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Keterangan Alasan no 2
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                                    Alasan no 3 <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Keterangan Alasan no 3
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                     style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">
                    &nbsp;
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/skills.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3>Minat siswa</h3>
                    <p class="fst-italic">
                        Persentase Minat siswa terhadap program unggulan
                    </p>

                    <div class="skills-content">

                        <div class="progress">
                            <span class="skill">Tahfidhul Quran <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Tahqiqu Qiroatil Kutub <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Prodistik <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">MA Vokasi <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Fasilitas Madrasah</h2>
                <p>Dengan adanya fasilitas madrasah yang memadai tentunya akan membuat kegiatan belajar mengajar akan
                    terasa lebih nyaman dan efektif.</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <center>
                            <div class="icon">
                                <iconify-icon icon="maki:town-hall" width="32" height="32"></iconify-icon>
                            </div>
                            <h4><a href="#">AULA</a></h4>
                        </center>
                        <p>Digunakan ketika ada kegiatan penting di madrasah aliyah zainul hasan 1 genggong</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                     data-aos-delay="200">
                    <div class="icon-box">
                        <center>
                            <div class="icon">
                                <iconify-icon icon="openmoji:desktop-computer" width="32" height="32"></iconify-icon>
                            </div>
                            <h4><a href="#">LAB Komputer</a></h4>
                        </center>
                        <p>Digunakan ketika mata pelajaran yang berkaitan dengan komputer.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                     data-aos-delay="300">
                    <div class="icon-box">
                        <center>
                            <div class="icon">
                                <iconify-icon icon="ic:baseline-language" width="32" height="32"></iconify-icon>
                            </div>
                            <h4><a href="#">LAB Bahasa</a></h4>
                        </center>
                        <p>Digunakan ketika mata pelajaran yang berkaitan dengan bahasa.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                     data-aos-delay="400">
                    <div class="icon-box">
                        <center>
                            <div class="icon">
                                <iconify-icon icon="game-icons:materials-science" width="32" height="32"></iconify-icon>
                            </div>
                            <h4><a href="">LAB IPA</a></h4>
                        </center>
                        <p>Digunakan ketika mata pelajaran yang berkaitan dengan ipa.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hal yang sering ditanyakan</h2>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                                                       data-bs-target="#faq-list-1">Non consectetur a
                            erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-2" class="collapsed">Feugiat
                            scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-3" class="collapsed">Dolor
                            sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-4" class="collapsed">Tempus
                            quam pellentesque nec nam aliquam sem et tortor consequat? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-5" class="collapsed">Tortor
                            vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Ada pertanyaan lain?</h3>
                    <p> Jika ada hal lain yang ingin ditanyakan silahkan menghubungi kami.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Hubungi kami</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="kontak" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontak</h2>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p>Jl. Raya Condong No.12, Gerojokan
                                Karangbong, Kec. Pajarakan
                                Kab. Probolinggo, Jawa Timur, 67281</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>mazainulhasan1@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telepon:</h4>
                            <p>(0335) 842253</p>
                        </div>

                        <iframe
                            src="https://maps.google.com/maps?q=ma%20zainul%20hasan%201%20genggong&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="#" method="post" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Pesan</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan anda telah terkirim, Terima Kasih!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Kirim Pesan</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript">
        function animasimadrasah() {
            const arab = document.querySelector('.animated-arab');
            const tarab = 'المدرسة العالية زين الحسن ١ قنقون';
            const config = {
                wait : 1000 ,
                speed : 100,
            }
            const content = tarab.trim();
            arab.textContent = '';
            console.log(content)
            let count = 0;
            setTimeout(() =>{
                const counter = setInterval(() =>{
                    arab.textContent += content[count];
                    count++;
                    if(count >= content.length) {
                        clearInterval(counter)
                    }
                },config.speed);
            },config.wait)
        }
        animasimadrasah();
        setInterval(animasimadrasah, 10*1000);
    </script>
@endsection
