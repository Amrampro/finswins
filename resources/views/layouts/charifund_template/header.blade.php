<header class="header header-primary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-header__menu-box">
                    <nav class="navbar p-0">
                        <div class="navbar-logo">
                            <a href="{{route('frontend.home')}}">
                                <img src="{{asset('assets/images/logo.png')}}" alt="Image">
                            </a>
                        </div>
                        <div class="navbar__menu d-none d-xl-block">
                            <ul class="navbar__list">
                                <li class="navbar__item navbar__item nav-fade">
                                    <a @class([ 'active' => request()->routeIs('frontend.home')]) href="{{route('frontend.home')}}" aria-label="dropdown menu">Accueil</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a @class([ 'active' => request()->routeIs('frontend.about')]) href="{{route('frontend.about')}}">A Propos</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a @class([ 'active' => request()->routeIs('frontend.cause_detail')]) href="{{route('frontend.cause_detail')}}">Actions</a>
                                </li>
                                <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="#" aria-label="dropdown menu"
                                       class="navbar__dropdown-label dropdown-label-alter">Membres</a>
                                    <ul class="navbar__sub-menu">
                                        <li>
                                            <a @class([ 'active' => request()->routeIs('frontend.team')]) href="{{route('frontend.team')}}">Notre équipe</a>
                                        </li>
                                        <li>
                                            <a @class([ 'active' => request()->routeIs('frontend.portrait')]) href="{{route('frontend.portrait')}}">Portraits</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li class="navbar__item nav-fade">
                                    <a @class([ 'active' => request()->routeIs('frontend.team')]) href="{{route('frontend.team')}}">Nos Membres</a>
                                </li> --}}
                                <li class="navbar__item nav-fade">
                                    <a @class([ 'active' => request()->routeIs('frontend.blogs.*')]) href="{{route('frontend.blogs.index')}}">Blog</a>
                                </li>
                                <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="#" aria-label="dropdown menu"
                                       class="navbar__dropdown-label dropdown-label-alter">Medias</a>
                                    <ul class="navbar__sub-menu">
                                        <li>
                                            <a href="blog-list.html">Photo</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid.html">Video</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Dossier de presse</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a @class([ 'active' => request()->routeIs('frontend.contact')]) href="{{route('frontend.contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar__options">
                            <div class="navbar__mobile-options ">
                                <div class="contact-btn d-none d-xxl-flex">
                                    <div class="contact-icon">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                    <div class="contact-content">
                                        <p>Appeler Maintenant</p>
                                        <a href="tel:+32485150430">+32 (0) 485 15 04 30</a>
                                    </div>
                                </div>
                                <div class="search-box">
                                    <button class="open-search" aria-label="search products" title="open search box">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                                <a href="{{\App\Filament\Pages\Dashboard::getUrl()}}" class="btn--primary d-none d-md-flex">Administration<i
                                        class="icon-circle-arrow"></i></a>
                            </div>
                            <button class="open-offcanvas-nav d-flex d-xl-none" aria-label="toggle mobile menu"
                                    title="open offcanvas menu">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
