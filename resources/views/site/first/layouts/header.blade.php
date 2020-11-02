
<!-- HEADER AREA START -->
<header class="header-area header-wrapper">
    <div class="header-top-bar bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ getLogo() }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="company-info clearfix">
                        <div class="company-info-item">
                            <div class="header-icon">
                                <img src="{{ asset('site/images/icons/phone.png') }}" alt="">
                            </div>
                            <div class="header-info">
                                <h6>{{ setting('phone') }}</h6>
                            </div>
                        </div>
                        <div class="company-info-item">
                            <div class="header-icon">
                                <img src="{{ asset('site/images/icons/mail-open.png') }}" alt="">
                            </div>
                            <div class="header-info">
                                <h6><a href="mailto:info@domain.com">{{ setting('email') }}</a></h6>
                                <p>{{ __('home.mail_us') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="header-search clearfix">
                        <form action="#">
                            <button class="search-icon" type="submit">
                                <img src="{{ asset('site/images/icons/search.png') }}" alt="">
                            </button>
                            <input type="text" placeholder="{{ __('home.search') }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="header-middle-area transparent-header d-none d-md-block">
        <div class="container">
            <div class="full-width-mega-drop-menu">
                <div class="row">
                    <div class="col-12">
                        <div class="sticky-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ getLogo() }}" alt="">
                            </a>
                        </div>
                        <nav id="primary-menu">
                            <ul class="main-menu text-center">
                                <li>
                                    <a href="{{ url('/') }}">{{ __('home.home') }}</a>
                                </li>

                                <li>
                                    <a href="{{ url('services') }}">{{ __('admin.services') }}</a>
                                </li>

                                <li>
                                    <a href="{{ url('properties') }}">{{ __('home.properties') }}</a>
                                </li>

                                <li>
                                    <a href="{{ url('blogs') }}">{{ __('home.blogs') }}</a>
                                </li>

                                <li>
                                    <a href="{{ url('about') }}">{{ __('home.about_us') }}</a>
                                </li>

                                <li>
                                    <a href="{{ url('contact-us') }}">{{ __('admin.contact_us') }}</a>
                                </li>
                                @if(session('lang') == 'ar')
                                    <li>
                                        <a href="{{ url('lang/en') }}">
                                            {{ __('home.english') }}
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ url('lang/ar') }}">
                                            {{ __('home.arabic') }}
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER AREA END -->

<!-- MOBILE MENU AREA START -->
<div class="mobile-menu-area d-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">{{ __('home.home') }}</a>
                            </li>

                            <li>
                                <a href="{{ url('services') }}">{{ __('admin.services') }}</a>
                                <ul class="drop-menu">
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="service-details.html">Service details</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ url('properties') }}">{{ __('home.properties') }}</a>
                            </li>

                            <li>
                                <a href="{{ url('projects') }}">{{ __('home.projects') }}</a>
                            </li>

                            <li>
                                <a href="{{ url('blogs') }}">{{ __('home.blogs') }}</a>
                            </li>

                            <li>
                                <a href="{{ url('about') }}">{{ __('home.about_us') }}</a>
                            </li>

                            <li>
                                <a href="{{ url('contact-us') }}">{{ __('admin.contact_us') }}</a>
                            </li>

                            <li>
                                <a href="#">{{ __('home.language') }}</a>
                                <ul class="drop-menu">
                                    <li><a href="{{ url('lang/ar') }}">{{ __('home.arabic') }}</a></li>
                                    <li><a href="{{ url('lang/en') }}">{{ __('home.english') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MOBILE MENU AREA END -->
