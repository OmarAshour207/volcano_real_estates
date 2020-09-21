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
                            <li>{{ __('home.single_property') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS AREA END -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- PROPERTIES DETAILS AREA START -->
        <div class="properties-details-area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    @php
                        $name = session('lang') . '_name';
                        $desc = session('lang') . '_description';
                        $address = session('lang') . '_address';
                    @endphp
                    <div class="col-lg-8">
                        <!-- pro-details-image -->
                        <div class="pro-details-image mb-60">
                            <div class="pro-details-big-image">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                                        <a href="{{ $property->property_image }}" data-lightbox="image-1" data-title="{{ $property->$name }}">
                                            <img src="{{ $property->property_image }}" alt="">
                                        </a>
                                    </div>
                                    @foreach($property->files()->get() as $index => $file)
                                        <div class="tab-pane fade" id="pro-{{ $index+2 }}" role="tabpanel" aria-labelledby="pro-{{ $index+2 }}-tab">
                                            <a href="{{ Storage::url('public/' . $file->full_file) }}" data-lightbox="image-{{ $index+2 }}" data-title="{{ $property->$name }}">
                                                <img src="{{ Storage::url('public/' . $file->full_file) }}" alt="">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <ul class="nav nav-pills pro-details-navs" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pro-1-tab" data-toggle="pill" href="#pro-1" role="tab" aria-controls="pro-1" aria-selected="true"><img src="{{ $property->property_image }}" alt=""></a>
                                </li>
                                @foreach($property->files()->get() as $index => $file)
                                    <li class="nav-item">
                                        <a class="nav-link" id="pro-{{ $index+2 }}-tab" data-toggle="pill" href="#pro-{{ $index+2 }}" role="tab" aria-controls="pro-{{ $index+2 }}" aria-selected="false">
                                            <img src="{{ Storage::url('public/' . $file->full_file) }}" alt="">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- pro-details-short-info -->
                        <div class="pro-details-short-info mb-60">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="pro-details-condition">
                                        <h5>{{ __('home.property_info') }}</h5>
                                        <div class="pro-details-condition-inner bg-gray">
                                            <ul class="condition-list">
                                                <li>
                                                    <img src="{{ asset('site/images/icons/4.png') }}" alt="">
                                                    {{ $property->$name }}
                                                </li>
                                                <li>
                                                    <img src="{{ asset('site/images/icons/4.png') }}" alt="">
                                                    {{ __('admin.area') }} {{ $property->area }} {{ __('home.sqft') }}
                                                </li>
                                                <li>
                                                    <img src="{{ asset('site/images/icons/6.png') }}" alt="">
                                                    @if($property->type == 1)
                                                        {{ __('home.property_home') }}
                                                    @elseif($property->type == 1)
                                                        {{ __('home.villa') }}
                                                    @else
                                                        {{ __('admin.chalet') }}
                                                    @endif
                                                </li>
                                                <li>
                                                    <img src="{{ asset('site/images/icons/7.png') }}" alt="">
                                                    {{ $property->status == 0 ? __('admin.rent') : __('home.sale') }}
                                                </li>
                                                <li>
                                                    <img src="{{ asset('ite/images/icons/13.png') }}" alt="">
                                                    {{ $property->state->$name }}
                                                </li>
                                                <li> {{ __('home.le') }} {{ $property->price }}</li>
                                            </ul>
                                            <p>
                                                <img src="{{ asset('site/images/icons/location.png') }}" alt="">
                                                {{ $property->$address }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="pro-details-amenities">
                                        <h5>{{ __('home.more_info') }}</h5>
                                        <div class="pro-details-amenities-inner bg-gray">
                                            <ul class="amenities-list">
                                                @foreach($property->other_data()->get() as $data)
                                                    <li>{{ $data->data_value }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pro-details-description -->
                        <div class="pro-details-description mb-50">
                            <p>
                                <span data-placement="top" data-toggle="tooltip" data-original-title="{{ __('home.trust_name') }}" class="tooltip-content">{{ setting('website_title') }}</span>
                                {{ $property->$desc }}
                            </p>
                        </div>
                        <!-- Send Contacts -->
                        <div class="pro-details-agent-review">
                            <div class="row">
                                <!-- leave-massage -->
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="leave-review">
                                        <h5>{{ __('home.contact_us') }}</h5>
                                        @if (session('success'))
                                            <h3 class="alert alert-success"> {{ __('home.sent_successfully') }} </h3>
                                        @endif
                                        <form action="{{ route('send.contact') }}" method="post">
                                            @csrf
                                            <input type="text" name="name" placeholder="{{ __('home.full_name') }} :*" value="{{ old('name') }}">
                                            <input type="email" name="email" placeholder="{{ __('home.type_email') }} :*" value="{{ old('email') }}">
                                            <input type="text" name="phone" placeholder="{{ __('home.phone') }} ({{ __('home.optional') }})" value="{{ old('phone') }}">
                                            <textarea name="message" placeholder="{{ __('home.message') }}"></textarea>
                                            <button type="submit" class="submit-btn-1">
                                                {{ __('home.send') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <!-- widget-search-property -->
                        <aside class="widget widget-search-property mb-30">
                            <h5>{{ __('home.search_for_property') }}</h5>
                            <form action="{{ url('properties/search') }}">
                                <div class="row">
                                    <div class="col-lg-6 col-md-3 col-12">
                                        <div class="find-home-item custom-select">
                                            <select class="selectpicker" title="{{ __('home.location') }}" data-hide-disabled="true" data-live-search="true">
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
                                    <div class="col-lg-6 col-md-3 col-12">
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
                                    <div class="col-lg-6 col-md-3 col-12">
                                        <div class="find-home-item">
                                            <input type="text" name="min_area" placeholder="{{ __('home.min_area') }} ({{ __('home.sqft') }})" value="{{ request('min_area') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-12">
                                        <div class="find-home-item">
                                            <input type="text" name="max_area" placeholder="{{ __('home.max_area') }} ({{ __('home.sqft') }})" value="{{ request('max_area') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-12">
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
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-sm-7 col-xs-12">
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
                                            <div class="col-sm-12 col-sm-5 col-xs-12">
                                                <div class="find-home-item">
                                                    <button class="button-1 btn-block btn-hover-1" type="submit">{{ __('home.search') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        <!-- widget-featured-property -->
                        <aside class="widget widget-featured-property mb-30">
                            <h5>{{ __('home.latest_properties') }}</h5>
                            <div class="row">
                                <!-- flat-item -->
                                @php
                                    $name = session('lang') . '_name';
                                    $address = session('lang') . '_address';
                                @endphp
                                @foreach($properties as $index => $latest_property)
                                    <div class="col-lg-12 col-md-6 col-12">
                                    <div class="flat-item">
                                        <div class="flat-item-image">
                                            <span class="for-sale">
                                                {{ $property->status == 0 ? __('home.for_rent') : __('home.for_sale') }}
                                            </span>
                                            <a href="{{ route('property.show', ['id' => $latest_property->id, 'name' => $latest_property->$name]) }}">
                                                <img src="{{ $latest_property->property_image }}" alt="">
                                            </a>
                                            <div class="flat-link">
                                                <a href="{{ route('property.show', ['id' => $latest_property->id, 'name' => $latest_property->$name]) }}">
                                                    {{ __('home.more_details') }}
                                                </a>
                                            </div>
                                            <ul class="flat-desc">
                                                <li>
                                                    <img src="{{ asset('site/images/icons/4.png') }}" alt="">
                                                    <span>{{ $latest_property->area }} {{ __('home.sqft') }}</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('site/images/icons/5.png') }}" alt="">
                                                    <span>
                                                @if($latest_property->type == 1)
                                                            {{ __('home.property_home') }}
                                                @elseif($latest_property->type == 2)
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
                                                    <a href="{{ route('property.show', ['id' => $latest_property->id, 'name' => $latest_property->$name]) }}">
                                                        {{ $latest_property->$name }}
                                                    </a>
                                                </h5>
                                                <span class="price">{{ $property->price }} {{ __('home.le') }}</span>
                                            </div>
                                            <p>
                                                <img src="{{ asset('site/images/icons/location.png') }}" alt="">
                                                {{ $latest_property->state->$name }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- PROPERTIES DETAILS AREA END -->

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
