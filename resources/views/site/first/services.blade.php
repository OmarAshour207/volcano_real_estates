@extends('site.first.layouts.app')

@section('content')
    <!-- BREADCRUMBS AREA START -->
    <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70" style="background: rgba(0, 0, 0, 0) url('{{ asset("site/images/bg/5.jpg") }}') no-repeat scroll 100% 0 / cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs">
                        <h2 class="breadcrumbs-title">{{ __('admin.services') }}</h2>
                        <ul class="breadcrumbs-list">
                            <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                            <li>{{ __('admin.services') }}</li>
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
                            <h3> {{ $about->$title }} </h3>
                            <h2>{{ __('home.our_services') }}</h2>
                        </div>
                        <div class="about-sheltek-info">
                            <p>{{ $about->$desc }} </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="about-image">
                            <img src="{{ $about->about_image }}" alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SHELTEK AREA END -->

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

        <!-- TESTIMONIAL AREA START -->
        <div class="testimonial-area ptb-115">
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
