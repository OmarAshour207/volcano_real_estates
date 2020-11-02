@extends('site.first.layouts.app')

@section('content')
    <!-- BREADCRUMBS AREA START -->
    <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70" style="background-image: url('{{ asset("site/images/bg/5.jpg") }}')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs">
                        <h2 class="breadcrumbs-title">{{ __('admin.contact_us') }}</h2>
                        <ul class="breadcrumbs-list">
                            <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                            <li>{{ __('admin.contact_us') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS AREA END -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- CONTACT AREA START -->
        <div class="contact-area pt-115 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <!-- get-in-toch -->
                        <div class="get-in-toch">
                            <div class="section-title mb-30">
                                <h3>{{ __('home.get_in_touch') }}</h3>
                            </div>
                            <div class="contact-desc mb-50">
                                @php
                                  $desc = session('lang') . '_description';
                                @endphp
                                <p>
                                    {!! $contactUs->$desc !!}
                                </p>
                            </div>
                            <ul class="contact-address">
                                <li>
                                    <div class="contact-address-icon">
                                        <img src="{{ asset('site/images/icons/location-2.png') }}" alt="">
                                    </div>
                                    <div class="contact-address-info">
                                        <span>{{ setting(session('lang') . '_address') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-address-icon">
                                        <img src="{{ asset('site/images/icons/phone-3.png') }}" alt="">
                                    </div>
                                    <div class="contact-address-info">
                                        <span>{{ __('home.phone') }} : {{ setting('phone') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-address-icon">
                                        <img src="{{ asset('site/images/icons/world.png') }}" alt="">
                                    </div>
                                    <div class="contact-address-info">
                                        <span>{{ __('home.email') }} : {{ setting('email') }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="contact-messge contact-bg">
                            <!-- blog-details-reply -->
                            <div class="leave-review">
                                <h5>{{ __('home.send_message') }}</h5>
                                <form id="contact-form" action="{{ route('send.contact') }}" method="post">
                                    @csrf
                                    <input type="text" name="name" placeholder="{{ __('home.full_name') }}">
                                    <input type="email" name="email" placeholder="{{ __('admin.email') }}">
                                    <textarea name="message" placeholder="{{ __('home.message') }}"></textarea>
                                    <button type="submit" class="submit-btn-1">{{ __('home.send') }}</button>
                                </form>
                                <p class="form-messege mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTACT AREA END -->

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
