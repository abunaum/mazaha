<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto {{ ($pages === 'home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
        <li><a class="nav-link scrollto {{ ($pages === 'profile') ? 'active' : '' }}" href="{{ url('/profile') }}">Profile</a></li>
        <li><a class="nav-link scrollto {{ ($pages === 'visi-misi') ? 'active' : '' }}" href="{{ url('/visi-misi') }}">Visi-Misi</a></li>
        <li><a class="nav-link scrollto {{ ($pages === 'staff-pengajar') ? 'active' : '' }}" href="{{ url('/staff-pengajar') }}">Staff Pengajar</a></li>
        <li><a class="nav-link scrollto {{ ($pages === 'ppdb') ? 'active' : '' }}" href="{{ url('/ppdb') }}">PPDB</a></li>
{{--        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>--}}
{{--            <ul>--}}
{{--                <li><a href="#">Drop Down 1</a></li>--}}
{{--                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                        <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                        <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                        <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                        <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="#">Drop Down 2</a></li>--}}
{{--                <li><a href="#">Drop Down 3</a></li>--}}
{{--                <li><a href="#">Drop Down 4</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <li><a class="getstarted scrollto" href="https://www.mazainulhasan1.sch.id/">Berita</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
