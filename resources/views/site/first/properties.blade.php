@extends('site.first.layouts.app')

@section('content')

    <!-- BREADCRUMBS AREA START -->
    <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70" style="background: rgba(0, 0, 0, 0) url('{{ asset("site/images/bg/5.jpg") }}') no-repeat scroll 100% 0 / cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs">
                        <h2 class="breadcrumbs-title">{{ __('home.properties') }}</h2>
                        <ul class="breadcrumbs-list">
                            <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                            <li>{{ __('home.properties') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS AREA END -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- FEATURED FLAT AREA START -->
        <div class="featured-flat-area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    @if($properties->count() > 0)
                    <!-- flat-item -->
                    @foreach($properties as $index => $property)
                        <div class="col-lg-4 col-md-6 col-12">
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
                                        {{ $property->$address }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- pagination-area -->
                    <div class="col-xs-12">
                        <div class="pagination-area mb-60">
                            <ul class="pagination-list text-center">
                                {{ $properties->appends(request()->query())->links() }}
                            </ul>
                        </div>
                    </div>
                    @else
                        <div class="col">
                            <h2> {{ __('admin.no_records') }} </h2>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- FEATURED FLAT AREA END -->

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
