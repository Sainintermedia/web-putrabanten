<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ URL::asset('assets/assets/img/logotitle.png') }}" alt="">
            {{-- <h1>ThreePuteraBantenIndonesia<span>.</span></h1> --}}
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('front.index') }}"
                        class="{{ request()->is('/') || request()->is('/*') ? 'active' : '' }}">Home</a>
                </li>
                <li><a href="{{ route('about.index') }}"
                        class="{{ request()->is('about') || request()->is('about/*') ? 'active' : '' }}">About</a>
                </li>
                <li><a href="{{ route('service.index') }}"
                        class="{{ request()->is('service') || request()->is('service/*') ? 'active' : '' }}">Services</a>
                </li>
                <li><a href="{{ route('legalitas.perusahaan.index') }}"
                        class="{{ request()->is('legalitas-perusahaan') || request()->is('legalitas-perusahaan/*') ? 'active' : '' }}">Legalitas
                        Perusahaan</a>
                </li>
                <li><a href="{{ route('project.index') }}"
                        class="{{ request()->is('project') || request()->is('project/*') ? 'active' : '' }}">Project</a>
                </li>
                {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ route('contact.us.index') }}"
                        class="{{ request()->is('contact-us') || request()->is('contact-us/*') ? 'active' : '' }}">Contact
                        Us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
