<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto {{ ($pages === 'home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
        <li><a class="nav-link scrollto {{ ($pages === 'profile') ? 'active' : '' }}" href="{{ url('/profile') }}">Profile</a></li>
        <li><a class="nav-link scrollto {{ ($pages === 'visi-misi') ? 'active' : '' }}" href="{{ url('/visi-misi') }}">Visi-Misi</a></li>
        <li><a class="nav-link scrollto {{ ($pages === 'staff-pengajar') ? 'active' : '' }}" href="{{ url('/staff-pengajar') }}">Staff Pengajar</a></li>
        <li><a class="nav-link scrollto" href="https://ppsb.mazainulhasan1.sch.id" target="_blank">PSB</a></li>
{{--        <li><a class="nav-link scrollto" href="https://mazainulhasan1.sch.id" target="_blank">Berita</a></li>--}}
        <li><a class="nav-link scrollto {{ ($pages === 'berita') ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a></li>
        <li><a class="getstarted scrollto" href="https://simumtaz.mazainulhasan1.sch.id" target="_blank">SIMUMTAZ</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
