<li class="nav-heading">Blog</li>

<li class="nav-item">
    <a class="nav-link @if(!isset($tab)) collapsed @elseif($tab !== 'Blog') collapsed @endif" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Blog Data</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="blog-nav" class="nav-content collapse @if(isset($tab)) @if($tab === 'Blog') show @endif @endif" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ $url_panel.'/post' }}" @if($pages === 'Semua Post') class="active" @endif>
                <i class="bi bi-circle"></i><span>Semua Post</span>
            </a>
        </li>
        <li>
            <a href="{{ $url_panel.'/post/create' }}" @if($pages === 'Tambah Post') class="active" @endif>
                <i class="bi bi-circle"></i><span>Tambah Post</span>
            </a>
        </li>

        <li>
            <a href="{{ $url_panel.'/kategori' }}" @if($pages === 'Kategori') class="active" @endif>
                <i class="bi bi-circle"></i><span>Kategori</span>
            </a>
        </li>
    </ul>
</li><!-- End Profile Page Nav -->

