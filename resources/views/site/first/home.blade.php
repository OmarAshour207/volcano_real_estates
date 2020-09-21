@extends('site.first.layouts.app')

@section('content')
    <!-- SLIDER SECTION START -->
    <div class="slider-1 pos-relative slider-overlay">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                @foreach($sliders as $index => $slider)
                    <img src="{{ $slider->slider_image }}" alt="" title="#slider-direction-{{ $index+1 }}" />
                    @if($index == 2)
                        @break
                    @endif
                @endforeach
            </div>
            @php
                $title = session('lang') . '_title';
                $desc = session('lang') . '_description';
            @endphp
            @foreach($sliders as $index => $slider)
                <div id="slider-direction-{{ $index+1 }}" class="slider-direction">
                    <div class="slider-content text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">{{ __('home.welcome_to') }} <span>{{ setting('website_title') }}</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">{{ $slider->$title }}</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">{{ $slider->$desc }} </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="{{ url('contact-us') }}">{{ __('home.read_more') }}</a>
                        </div>
                    </div>
                </div>
                @if($index == 2)
                    @break
                @endif
            @endforeach
        </div>
    </div>
    <!-- SLIDER SECTION END -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- FIND HOME AREA START -->
        <div class="find-home-area bg-blue call-to-bg plr-140 pt-60 pb-20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="section-title text-white">
                            <h3>{{ __('home.find_your') }}</h3>
                            <h2 class="h1">{{ __('home.home_here') }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="find-homes">
                            <form action="{{ url('properties/search') }}">
                                <div class="row">
                                    <!-- Location -->
                                    <div class="col-md-3 col-12">
                                        <div class="find-home-item custom-select">
                                            <select class="selectpicker" name="state" title="{{ __('home.location') }}" data-hide-disabled="true" data-live-search="true">
                                                <optgroup disabled="disabled" label="disabled">
                                                    <option>Hidden</option>
                                                </optgroup>
                                                <optgroup label="{{ __('home.egypt') }}">
                                                    @php
                                                        $name = session('lang') . '_name';
                                                    @endphp
                                                    @foreach($states as $state)
                                                        <option value="{{ $state->id }}" {{ $state->id == request('state') ? 'selected' : '' }}> {{ $state->$name }} </option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Type 1 => Home, 2 => Villa, 3 => Chalet -->
                                    <div class="col-md-3 col-12">
                                        <div class="find-home-item custom-select">
                                            <select class="selectpicker" name="type" title="{{ __('home.type') }}" data-hide-disabled="true" data-live-search="true">
                                                <optgroup disabled="disabled" label="disabled">
                                                    <option>Hidden</option>
                                                </optgroup>
                                                <optgroup label="{{ __('home.type') }}">
                                                    @php
                                                        $types = [ __('home.property'), __('home.villa'), __('home.chalet') ];
                                                    @endphp
                                                    @for($i = 0;$i < count($types);$i++)
                                                        <option value="{{ ($i+1) }}" {{ ($i+1) == request('type') ? 'selected' : '' }}>
                                                            {{ $types[$i] }}
                                                        </option>
                                                    @endfor
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Min Area -->
                                    <div class="col-md-3 col-12">
                                        <div class="find-home-item">
                                            <input type="text" name="min_area" placeholder="{{ __('home.min_area') }} ({{ __('home.sqft') }})" value="{{ request('min_area') }}">
                                        </div>
                                    </div>
                                    <!-- Max Area -->
                                    <div class="col-md-3 col-12">
                                        <div class="find-home-item">
                                            <input type="text" name="max_area" placeholder="{{ __('home.max_area') }} ({{ __('home.sqft') }})" value="{{ request('max_area') }}">
                                        </div>
                                    </div>
                                    <!-- Rent or Sale -->
                                    <div class="col-md-3 col-12">
                                        <div class="find-home-item custom-select">
                                            <select class="selectpicker" name="status" title="{{ __('home.type') }}" data-hide-disabled="true" data-live-search="true">
                                                <optgroup disabled="disabled" label="disabled">
                                                    <option>Hidden</option>
                                                </optgroup>
                                                <optgroup label="{{ __('home.type') }}">
                                                    @php
                                                        $statuses = [ __('home.rent'), __('home.sale') ];
                                                    @endphp
                                                    @for($i = 0;$i < count($statuses);$i++)
                                                        <option value="{{ $i }}" {{ $i == request('status') ? 'selected' : '' }}>
                                                            {{ $statuses[$i] }}
                                                        </option>
                                                    @endfor
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Min and Max Price -->
                                    <div class="col-md-9 col-12">
                                        <div class="row">
                                            <div class="col-sm-7 col-xs-12">
                                                <div class="find-home-item">
                                                    <!-- shop-filter -->
                                                    <div class="shop-filter">
                                                        <div class="price_filter">
                                                            <div class="price_slider_amount">
                                                                <input type="submit" value="{{ __('home.your_range') }}" />
                                                                <input type="text" id="amount" name="price" placeholder="{{ __('home.add_price') }}" />
                                                            </div>
                                                            <div id="slider-range"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xs-12">
                                                <div class="find-home-item mb-0-xs">
                                                    <button class="button-1 btn-block btn-hover-1" href="#" type="submit">{{ __('home.search') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIND HOME AREA END -->

        <!-- ABOUT SHELTEK AREA START -->
        @if(in_array('about', $page_filter))
        <div class="about-sheltek-area ptb-115">
            <div class="container">
                @php
                    $title = session('lang') . '_title';
                    $desc = session('lang') . '_description';
                @endphp
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="section-title mb-30">
                            <h3>{{ __('home.about_us') }} </h3>
                            <h2>{{ $aboutUs->$title }}</h2>
                        </div>
                        <div class="about-sheltek-info">
                            <p>
                                {{ $aboutUs->$desc }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="about-image">
                            <a href="{{ url('about') }}">
                                <img src="{{ $aboutUs->about_image }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- ABOUT SHELTEK AREA END -->

        @if(in_array('our_services', $page_filter))
        <!-- SERVICES AREA START -->
        <div class="services-area pb-60">
            @php
                $title = session('lang') . '_title';
                $desc = session('lang') . '_description';
            @endphp
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-2 text-center">
                            <h2>{{ __('home.our_services') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="service-carousel">
                            <!-- service-item -->
                            @foreach($services as $index => $service)
                                <div class="col">
                                    <div class="service-item">
                                        <div class="service-item-image">
                                            <a href="{{ route('service.show', ['id' => $service->id, 'title' => $service->$title]) }}">
                                                <img src="{{ $service->service_image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="service-item-info">
                                            <h5>
                                                <a href="{{ route('service.show', ['id' => $service->id, 'title' => $service->$title]) }}">
                                                    {{ $service->$title }}
                                                </a>
                                            </h5>
                                            <p>{{ $service->$desc }}</p>
                                        </div>
                                    </div>
                                </div>
                                @if($index == 3)
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICES AREA END -->
        @endif


        @if(in_array('contacts', $page_filter))
        <!-- BOOKING AREA START -->
        <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="section-title text-white">
                            <h3>{{ __('home.book_your') }}</h3>
                            <h2 class="h1">{{ __('home.home_here') }}</h2>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="booking-conternt clearfix">
                            <div class="book-house text-white">
                                @php
                                    $desc = session('lang') . '_description';
                                @endphp
                                {!! $contactUs->$desc  !!}
                                <h2 class="h5">{{ __('home.call_us_on') }} : {{ setting('phone') }} </h2>
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
        @endif

        <!-- FEATURED FLAT AREA START -->
        <div class="featured-flat-area pt-115 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-2 text-center">
                            <h2>{{ __('home.feature_property') }}</h2>
                            @php
                                $desc = session('lang') . '_description';
                            @endphp
                            <p>{{ $aboutUs->$desc }}</p>
                        </div>
                    </div>
                </div>
                <div class="featured-flat">
                    <div class="row">
                        <!-- flat-item -->
                        @foreach($properties as $index => $property)
                            <div class="col-lg-4 col-md-6 col-12 {{ $index == 8 ? 'd-none d-lg-block' : '' }}">
                                <div class="flat-item">
                                    <div class="flat-item-image">
                                        <span class="for-sale">{{ $property->status == 0 ? __('home.for_rent') : __('home.for_sale') }}</span>
                                        @php
                                            $name = session('lang') . '_name';
                                            $address = session('lang') . '_address';
                                        @endphp
                                        <a href="{{ route('property.show', ['id' => $property->id, 'name' => $property->$name]) }}">
                                            <img src="{{ $property->property_image }}" alt="">
                                        </a>
                                        <div class="flat-link">
                                            <a href="{{ route('property.show', ['id' => $property->id, 'name' => $property->$name]) }}">
                                                {{ __('home.more_details') }}
                                            </a>
                                        </div>
                                        <ul class="flat-desc">
                                            <li>
                                                <img src="{{ asset('site/images/icons/4.png') }}" alt="">
                                                <span>{{ $property->area }} {{ __('home.sqft') }}</span>
                                            </li>
                                            <li>
                                                <img src="{{ asset('site/images/icons/5.png') }}" alt="">
                                                <span>
                                                @if($property->type == 1)
                                                        {{ __('home.property_home') }}
                                                    @elseif($property->type == 2)
                                                        {{ __('admin.villa') }}
                                                    @else
                                                        {{ __('admin.chalet') }}
                                                    @endif
                                            </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flat-item-info">
                                        <div class="flat-title-price">
                                            <h5>
                                                <a href="{{ route('property.show', ['id' => $property->id, 'name' => $property->$name]) }}">
                                                    {{ $property->$name }}
                                                </a>
                                            </h5>
                                            <span class="price">{{ $property->price }} {{ __('home.le') }}</span>
                                        </div>
                                        <p>
                                            <img src="{{ asset('site/images/icons/location.png') }}" alt="">
                                            {{ $property->state->$name }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED FLAT AREA END -->

        <!-- FEATURES AREA START -->
        <div class="features-area fix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="features-info bg-gray">
                            @php
                                $title = session('lang') . '_title';
                                $desc = session('lang') . '_description';
                            @endphp
                            <div class="section-title mb-30">
                                <h3>{{ __('home.about_us') }}</h3>
                                <h2 class="h1">{{ $aboutUs->$title }}</h2>
                            </div>
                            <div class="features-desc">
                                <p><span data-placement="top" data-toggle="tooltip" class="tooltip-content"></span>
                                    {{ $aboutUs->$desc }}
                                </p>
                            </div>
                            <div class="features-include">
                                <div class="row">
                                    @foreach($services as $index => $service)
                                        <div class="col-xl-4 col-lg-6 col-md-4">
                                            <div class="features-include-list">
                                                <h6><img src="{{ asset('site/images/icons/7.png') }}" alt="">
                                                    {{ $service->$title }}
                                                </h6>
                                                <p>{{ $service->$desc }}</p>
                                            </div>
                                        </div>
                                        @if($index == 5)
                                            @break
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURES AREA END -->

        @if(in_array('team_members', $page_filter))
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
        @endif

        @if(in_array('testimonials', $page_filter))
        <!-- TESTIMONIAL AREA START -->
        <div class="testimonial-area pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-lg-8 col-md-9">
                                    <div class="section-title mb-30">
                                        <h3>{{ __('home.some_of') }}</h3>
                                        <h2 class="h1">{{ __('home.happy_client') }}</h2>
                                    </div>
                                    <div class="testimonial-carousel dots-right-btm">
                                        <!-- testimonial-item -->
                                        @php
                                            $title = session('lang') . '_title';
                                            $desc = session('lang') . '_description';
                                            $name = session('lang') . '_name';
                                        @endphp
                                        @foreach($testimonials as $index => $testimonial)
                                        <div class="testimonial-item">
                                            <div class="testimonial-brief">
                                                <p>
                                                    {{ $testimonial->$desc }}
                                                </p>
                                            </div>
                                            <h6>
                                                {{ $testimonial->$name }}
                                                <span>{{ $testimonial->$title }}</span>
                                            </h6>
                                        </div>
                                            @if($index == 2)
                                                @break
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-3">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('site/images/others/testimonial.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TESTIMONIAL AREA END -->
        @endif

        @if(in_array('latest_blog', $page_filter))
        <!-- BLOG AREA START -->
        <div class="blog-area pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-2 text-center">
                            <h2>{{ __('admin.latest_blog') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="blog-carousel">
                            <!-- blog-item -->
                            @php
                                $title = session('lang') . '_title';
                                $content = session('lang') . '_content';
                            @endphp
                            @foreach($blogs as $index => $blog)
                                <div class="col">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="{{ url('blogs/'. $blog->id. '/' . $blog->$title) }}">
                                                <img src="{{ $blog->blog_image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5>
                                                    <a href="{{ url('blogs/'. $blog->id. '/' . $blog->$title) }}">
                                                        {{ $blog->$title }}
                                                    </a>
                                                </h5>
                                                <p>{{ date('d,M Y', strtotime($blog->create_at)) }}</p>
                                            </div>
                                            {!! $blog->$content !!}
                                            <a class="read-more" href="{{ url('blogs/'. $blog->id. '/' . $blog->$title) }}">
                                                {{ __('home.read_more') }}
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                @if($index == 3)
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG AREA END -->
        @endif

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
