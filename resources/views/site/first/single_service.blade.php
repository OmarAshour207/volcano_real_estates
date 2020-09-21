@extends('site.first.layouts.app')

@section('content')
    <!-- BREADCRUMBS AREA START -->
    <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70" style="background: rgba(0, 0, 0, 0) url('{{ asset("site/images/bg/5.jpg") }}') no-repeat scroll 100% 0 / cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs">
                        <h2 class="breadcrumbs-title">{{ __('home.service') }}</h2>
                        <ul class="breadcrumbs-list">
                            <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                            <li><a href="{{ url('services') }}">{{ __('home.service') }}</a></li>
                            <li>{{ __('home.service_details') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS AREA END -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- ABOUT SHELTEK AREA START -->
        <div class="about-sheltek-area ptb-115">
            <div class="container">
                <div class="row">
                    @php
                        $title = session('lang') . '_title';
                        $desc = session('lang') . '_description';
                    @endphp
                    <div class="col-md-6 col-12">
                        <div class="section-title mb-30">
                            <h3> {{ $service->$title }} </h3>
                            <h2>{{ __('home.our_services') }}</h2>
                        </div>
                        <div class="about-sheltek-info">
                            <p>{{ $service->$desc }} </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="about-image">
                            <img src="{{ $service->service_image }}" alt="Service Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SHELTEK AREA END -->

        <!-- FEATURED FLAT AREA START -->
        <div class="featured-flat-area pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-2 text-center">
                            <h2>PROPERTY FOR SALE</h2>
                            <p>Sheltek is the best theme for elit, sed do eiusmod tempor dolor sit amet, conse
                                ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd
                                minim veniam, quis nostrud</p>
                        </div>
                    </div>
                </div>
                <div class="featured-flat">
                    <div class="row">
                        <!-- flat-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <span class="for-sale">For Sale</span>
                                    <a href="properties-details.html"><img src="images/flat/1.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>450 sqft</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/5.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/6.png" alt="">
                                            <span>3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                        <span class="price">$52,350</span>
                                    </div>
                                    <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                </div>
                            </div>
                        </div>
                        <!-- flat-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <a href="properties-details.html"><img src="images/flat/2.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>450 sqft</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/5.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/6.png" alt="">
                                            <span>3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                        <span class="price">$52,350</span>
                                    </div>
                                    <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                </div>
                            </div>
                        </div>
                        <!-- flat-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <span class="for-sale rent">For rent</span>
                                    <a href="properties-details.html"><img src="images/flat/3.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>450 sqft</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/5.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/6.png" alt="">
                                            <span>3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                        <span class="price">$52,350</span>
                                    </div>
                                    <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                </div>
                            </div>
                        </div>
                        <!-- flat-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <a href="properties-details.html"><img src="images/flat/4.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>450 sqft</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/5.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/6.png" alt="">
                                            <span>3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                        <span class="price">$52,350</span>
                                    </div>
                                    <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                </div>
                            </div>
                        </div>
                        <!-- flat-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <span class="for-sale">For Sale</span>
                                    <a href="properties-details.html"><img src="images/flat/5.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>450 sqft</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/5.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/6.png" alt="">
                                            <span>3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                        <span class="price">$52,350</span>
                                    </div>
                                    <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                </div>
                            </div>
                        </div>
                        <!-- flat-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <a href="properties-details.html"><img src="images/flat/6.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>450 sqft</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/5.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/6.png" alt="">
                                            <span>3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                        <span class="price">$52,350</span>
                                    </div>
                                    <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                </div>
                            </div>
                        </div>
                        <!-- flat-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <span class="for-sale rent">For rent</span>
                                    <a href="properties-details.html"><img src="images/flat/7.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>450 sqft</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/5.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/6.png" alt="">
                                            <span>3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                        <span class="price">$52,350</span>
                                    </div>
                                    <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                </div>
                            </div>
                        </div>
                        <!-- flat-item -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <a href="properties-details.html"><img src="images/flat/8.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>450 sqft</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/5.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/6.png" alt="">
                                            <span>3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                        <span class="price">$52,350</span>
                                    </div>
                                    <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                </div>
                            </div>
                        </div>
                        <!-- flat-item -->
                        <div class="col-lg-4 col-12 d-none d-lg-block">
                            <div class="flat-item">
                                <div class="flat-item-image">
                                    <span class="for-sale">For Sale</span>
                                    <a href="properties-details.html"><img src="images/flat/9.jpg" alt=""></a>
                                    <div class="flat-link">
                                        <a href="properties-details.html">More Details</a>
                                    </div>
                                    <ul class="flat-desc">
                                        <li>
                                            <img src="images/icons/4.png" alt="">
                                            <span>450 sqft</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/5.png" alt="">
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <img src="images/icons/6.png" alt="">
                                            <span>3</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="properties-details.html">Masons de Villa </a></h5>
                                        <span class="price">$52,350</span>
                                    </div>
                                    <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED FLAT AREA END -->

        <!-- BOOKING AREA START -->
        <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="section-title text-white">
                            <h3>{{ __('home.some') }}</h3>
                            <h2 class="h1">{{ __('home.stat') }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="booking-conternt  clearfix">
                            <div class="counter-content">
                                <!-- counter-item -->
                                <div class="counter-item">
                                    <h2>
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span class="counter">{{ $projects_count }}</span>
                                    </h2>
                                    <p>{{ __('home.complete_projects') }}</p>
                                </div>
                                <!-- counter-item -->
                                <div class="counter-item">
                                    <h2>
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                        <span class="counter">555</span>
                                    </h2>
                                    <p>Property Sold</p>
                                </div>
                                <!-- counter-item -->
                                <div class="counter-item">
                                    <h2>
                                        <i class="fa fa-smile-o" aria-hidden="true"></i>
                                        <span class="counter">{{ $team_count }}</span>
                                    </h2>
                                    <p>{{ __('home.happy_client') }}</p>
                                </div>
                                <!-- counter-item -->
                                <div class="counter-item">
                                    <h2>
                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                        <span class="counter">{{ $services_count }}</span>
                                    </h2>
                                    <p>{{ __('admin.services') }}</p>
                                </div>
                            </div>
                            <div class="booking-imgae">
                                <img src="{{ asset('site/images/others/booking.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BOOKING AREA END -->

        <!-- OUR AGENTS AREA START -->
        <div class="our-agents-area pt-115 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-2 text-center">
                            <h2>{{ __('admin.team_members') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="our-agents">
                    <div class="row">
                        <div class="col-12">
                            <div class="agents-carousel">
                                <!-- single-agent -->
                                @php
                                    $name = session('lang') . '_name';
                                    $title = session('lang') . '_title';
                                    $desc = session('lang') . '_description';
                                @endphp
                                @foreach($teamMembers as $index => $teamMember)
                                    <div class="col-12">
                                        <div class="single-agent">
                                            <div class="agent-image">
                                                <img src="{{ $teamMember->member_image }}" alt="">
                                            </div>
                                            <div class="agent-info">
                                                <div class="agent-name">
                                                    <h5>
                                                        <a href="{{ $teamMember->$name }}"></a>
                                                    </h5>
                                                    <p>{{ $teamMember->$title }}</p>
                                                </div>
                                            </div>
                                            <div class="agent-info-hover">
                                                <div class="agent-name">
                                                    <h5><a href="#">{{ $teamMember->$name }}</a></h5>
                                                    <p>{{ $teamMember->$title }}</p>
                                                </div>
                                                <ul class="social-media">
                                                    @php
                                                        $socialSites = ['facebook', 'twitter', 'instagram'];
                                                    @endphp
                                                    @for($i = 0; $i < count($socialSites); $i++)
                                                        @if(setting($socialSites[$i]) != '')
                                                            <li>
                                                                <a href="{{ setting($socialSites[$i]) }}" >
                                                                    <i class="fa fa-{{ $socialSites[$i] }}" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @if($index == 4)
                                        @break
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- OUR AGENTS AREA END -->

        <!-- SUBSCRIBE AREA START -->
        <div class="subscribe-area bg-blue call-to-bg plr-140 ptb-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="section-title text-white">
                            <h3>{{ __('home.subscribe') }}</h3>
                            <h2 class="h1">{{ __('home.news_letter') }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="subscribe">
                            <form action="#">
                                <input type="text" name="subscribe" placeholder="{{ __('home.type_email') }}">
                                <button type="submit" value="send">{{ __('home.send') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUBSCRIBE AREA END -->
    </section>
    <!-- End page content -->

@endsection
