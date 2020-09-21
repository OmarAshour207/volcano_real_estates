@extends('site.first.layouts.app')

@section('content')
    <!-- BREADCRUMBS AREA START -->
    <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70" style="background: rgba(0, 0, 0, 0) url('{{ asset("site/images/bg/5.jpg") }}') no-repeat scroll 100% 0 / cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs">
                        <h2 class="breadcrumbs-title">{{ __('home.blog_details') }}</h2>
                        <ul class="breadcrumbs-list">
                            <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                            <li><a href="{{ url('blogs') }}">{{ __('admin.blog') }}</a></li>
                            <li>{{ __('home.blog_details') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS AREA END -->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- BLOG AREA START -->
        <div class="blog-area pt-115 pb-120">
            @php
                $title = session('lang') . '_title';
                $content = session('lang') . '_content';
            @endphp
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="blog-details-area">
                            <!-- blog-details-image -->
                            <div class="blog-details-image">
                                <img src="{{ $blog->blog_image }}" alt="">
                            </div>
                            <!-- blog-details-title-time -->
                            <div class="blog-details-title-time">
                                <h5>{{ $blog->$title }}</h5>
                                <p>{{ date('d,M Y', strtotime($blog->create_at)) }}</p>
                            </div>
                            <!-- blog-details-desctiption -->
                            <div class="blog-details-desctiption mb-60">
                                {!! $blog->$content !!}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- widget-search -->
                        <aside class="widget widget-search mb-30">
                            <form action="#">
                                <input type="text" name="search" placeholder="{{ __('home.search') }}">
                                <button type="button" class=""><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </aside>
                        <!-- widget-recent-post -->
                        <aside class="widget widget-recent-post mb-50">
                            <h5>Recent Post</h5>
                            <div class="row">
                                <!-- blog-item -->
                                @foreach($blogs as $blog)
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <article class="recent-post-item">
                                            <div class="recent-post-image">
                                                <a href="{{ route('blog.show', ['id' => $blog->id, 'title' => $blog->$title]) }}">
                                                    <img src="{{ $blog->blog_image }}" alt="">
                                                </a>
                                            </div>
                                            <div class="recent-post-info">
                                                <div class="recent-post-title-time">
                                                    <h5>
                                                        <a href="{{ route('blog.show', ['id' => $blog->id, 'title' => $blog->$title]) }}">
                                                            {{ $blog->$title }}
                                                        </a>
                                                    </h5>
                                                    <p>{{ date('d,M Y', strtotime($blog->create_at)) }}</p>
                                                </div>
                                                {!! $blog->$content !!}
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG AREA END -->

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
