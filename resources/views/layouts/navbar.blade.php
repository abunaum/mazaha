<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto {{ ($pages === 'home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
        <li class="dropdown">
            <a href="#">
                <span>Tentang Kami</span> <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
                <li>
                    <a class="nav-link scrollto" href="{{ route('sambutan') }}">
                        Sambutan Kepala Madrasah
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('sejarah') }}">
                        Sejarah Madrasah
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ ($pages === 'profile') ? 'active' : '' }}"
                       href="{{ url('/profile') }}">
                        Profile Madrasah
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ ($pages === 'visi-misi') ? 'active' : '' }}"
                       href="{{ url('/visi-misi') }}">
                        Visi-Misi
                    </a>
                </li>
                <li class="dropdown"><a href="#"><span>Struktur Organisasi</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Madrasah</a></li>
                        <li><a href="#">Komite</a></li>
                        <li><a href="#">Osis</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link scrollto {{ ($pages === 'staff-pengajar') ? 'active' : '' }}"
                       href="{{ url('/tenaga-pendidik') }}">
                        Tenaga Pendidik
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('/tenaga-kependidikan') }}">
                        Tenaga Kependidikan
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('sarpras') }}">
                        Sarana Prasarana
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">
                <span>Program</span> <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
                <li class="dropdown"><a href="#"><span>Intrakulikuler</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">MIPA</a></li>
                        <li><a href="#">ISS</a></li>
                        <li><a href="#">PK</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Ekstrakulikuler</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Pramuka</a></li>
                        <li><a href="#">KIR</a></li>
                        <li><a href="#">Tartilul Qur'an</a></li>
                        <li><a href="#">English Club</a></li>
                        <li><a href="#">Arabic Club</a></li>
                        <li><a href="#">kelas Olimpiade</a></li>
                        <li><a href="#">Pagar Nusa</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Program Unggulan</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Tahfizdul Qur'an</a></li>
                        <li><a href="#">Tahqiqu Qiroatil Kutub</a></li>
                        <li><a href="#">Prodistik</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">
                <span>Informasi</span> <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
                <li><a class="nav-link scrollto" href="{{ url('/berita') }}">Berita</a></li>
                <li><a class="nav-link scrollto" href="{{ route('agenda-list') }}">Agenda</a></li>
                <li><a class="nav-link scrollto" href="https://drive.google.com/drive/folders/1MM8y1__qJr4pGJxhXFDqRwdLafBIAM1S" target="_blank">Galeri</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">
                <span>Testimoni</span> <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
                <li><a class="nav-link scrollto" href="">Testimoni Alumni</a></li>
                <li><a class="nav-link scrollto" href="">Sebaran Berita</a></li>
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="{{route('kontak')}}">Kontak</a></li>
        <li><a class="getstarted scrollto" href="https://ppsb.mazainulhasan1.sch.id" target="_blank">PPSB</a></li>
        {{--        <li><a class="nav-link scrollto" href="https://ppsb.mazainulhasan1.sch.id" target="_blank">PSB</a></li>--}}
        {{--        <li><a class="nav-link scrollto {{ ($pages === 'berita') ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a></li>--}}
        {{--        <li><a class="getstarted scrollto" href="https://simumtaz.mazainulhasan1.sch.id" target="_blank">SIMUMTAZ</a></li>--}}
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
