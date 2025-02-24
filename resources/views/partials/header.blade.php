<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Fadel anjing</h1><span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li class="dropdown">
                    <a href="{{ url('/about') }}" class="{{ request()->is('about*') ? 'active' : '' }}">
                        <span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="{{ url('/team') }}" class="{{ request()->is('team') ? 'active' : '' }}">Team</a>
                        </li>
                        <li><a href="{{ url('/testimonials') }}"
                                class="{{ request()->is('testimonials') ? 'active' : '' }}">Testimonials</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ url('/services') }}"
                        class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
                {{-- <li><a href="{{ url('/portfolio') }}"
                        class="{{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a></li> --}}
                <li><a href="{{ url('/pricing') }}" class="{{ request()->is('pricing') ? 'active' : '' }}">Pricing</a>
                </li>
                {{-- <li><a href="{{ url('/blog') }}" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>
                --}}
                <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</header>