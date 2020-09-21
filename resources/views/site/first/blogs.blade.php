@extends('site.first.layouts.app')

@section('content')

    <!-- BREADCRUMBS AREA START -->
    <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70" style="background: rgba(0, 0, 0, 0) url('{{ asset("site/images/bg/5.jpg") }}') no-repeat scroll 100% 0 / cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs">
                        <h2 class="breadcrumbs-title">{{ __('admin.latest_blog') }}</h2>
                        <ul class="breadcrumbs-list">
                            <li><a href="{{ url('/') }}">{{ __('home.home') }}</a></li>
                            <li>{{ __('home.latest_blog') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS AREA END -->

    <!-- Start page content -->
    <div id="page-content" class="page-wrapper">

        <!-- BLOG AREA START -->
        <div class="blog-area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <!-- blog-item -->
                    @php
                        $title = session('lang') . '_title';
                        $content = session('lang') . '_content';
                    @endphp
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-12">
                        <article class="blog-item bg-gray">
                            <div class="blog-image">
                                <a href="{{ route('blog.show', ['id' => $blog->id, 'title' => $blog->$title]) }}">
                                    <img src="{{ $blog->blog_image }}" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <div class="post-title-time">
                                    <h5>
                                        <a href="{{ route('blog.show', ['id' => $blog->id, 'title' => $blog->$title]) }}">
                                            {{ $blog->$title }}
                                        </a>
                                    </h5>
                                    <p>{{ date('d,M Y', strtotime($blog->create_at)) }}</p>
                                </div>
                                {!! $blog->$content !!}
                                <a class="read-more" href="{{ route('blog.show', ['id' => $blog->id, 'title' => $blog->$title]) }}">{{ __('home.read_more') }}</a>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    <!-- pagination-area -->
                    <div class="col-12">
                        <div class="pagination-area mb-60">
                            <ul class="pagination-list text-center">
                                {{ $blogs->appends(request()->query())->links() }}
                            </ul>
                        </div>
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
    </div>
    <!-- End page content -->


@endsection
