<header class="header header-primary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-header__menu-box">
                    <nav class="navbar p-0">
                        <div class="navbar-logo">
                            <a href="{{route('frontend.home')}}">
                                <img src="assets/images/logo.png" alt="Image">
                            </a>
                        </div>
                        <div class="navbar__menu d-none d-xl-block">
                            <ul class="navbar__list">
                                <li class="navbar__item navbar__item nav-fade">
                                    <a @class([ 'active' => request()->routeIs('frontend.home')]) href="{{route('frontend.home')}}" aria-label="dropdown menu">Home</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a @class([ 'active' => request()->routeIs('frontend.about')]) href="{{route('frontend.about')}}">About Us</a>
                                </li>
                                <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="#" aria-label="dropdown menu"
                                       class="navbar__dropdown-label dropdown-label-alter">Causes</a>
                                    <ul class="navbar__sub-menu">
                                        <li>
                                            <a href="our-causes.html">Our Causes</a>
                                        </li>
                                        <li>
                                            <a href="cause-details.html">Cause Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="#" aria-label="dropdown menu"
                                       class="navbar__dropdown-label dropdown-label-alter">Pages</a>
                                    <ul class="navbar__sub-menu">
                                        <li>
                                            <a href="faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="donate-us.html">Donate Us</a>
                                        </li>
                                        <li class="navbar__item navbar__item--has-children">
                                            <a aria-label="dropdown menu"
                                               class="navbar__dropdown-label navbar__dropdown-label-sub">Events</a>
                                            <ul class="navbar__sub-menu navbar__sub-menu__nested">
                                                <li>
                                                    <a href="events.html">Events</a>
                                                </li>
                                                <li>
                                                    <a href="event-details.html">Event Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar__item navbar__item--has-children">
                                            <a aria-label="dropdown menu"
                                               class="navbar__dropdown-label navbar__dropdown-label-sub">Shop</a>
                                            <ul class="navbar__sub-menu navbar__sub-menu__nested">
                                                <li>
                                                    <a href="shop.html">Our Shop</a>
                                                </li>
                                                <li>
                                                    <a href="product-details.html">Product Details</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">View Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Cehckout</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar__item navbar__item--has-children">
                                            <a aria-label="dropdown menu"
                                               class="navbar__dropdown-label navbar__dropdown-label-sub">Team</a>
                                            <ul class="navbar__sub-menu navbar__sub-menu__nested">
                                                <li>
                                                    <a href="our-team.html">Our Teams</a>
                                                </li>
                                                <li>
                                                    <a href="team-details.html">Team Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="coming-soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="404.html">Error</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="#" aria-label="dropdown menu"
                                       class="navbar__dropdown-label dropdown-label-alter">News</a>
                                    <ul class="navbar__sub-menu">
                                        <li>
                                            <a href="blog-list.html">News List View</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid.html">News Grid View</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">News Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a @class([ 'active' => request()->routeIs('frontend.contact')]) href="{{route('frontend.contact')}}">Contact Us</a>
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
                                        <p>Call Us Now</p>
                                        <a href="tel:01-793-7938">(+01)-793-7938 </a>
                                    </div>
                                </div>
                                <div class="search-box">
                                    <button class="open-search" aria-label="search products" title="open search box">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                                <a href="donate-us.html" class="btn--primary d-none d-md-flex">Donate Now <i
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
