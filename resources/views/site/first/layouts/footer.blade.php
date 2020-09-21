<!-- Start footer area -->
<footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
    <div class="footer-top pt-110 pb-80">
        <div class="container">
            <div class="row">
                <!-- footer-address -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-1">
                    <div class="footer-widget">
                        <h6 class="footer-titel">{{ __('home.get_in_touch') }}</h6>
                        <ul class="footer-address">
                            <li>
                                <div class="address-icon">
                                    <img src="{{ asset('site/images/icons/location-2.png') }}" alt="">
                                </div>
                                <div class="address-info">
                                    <span>{{ setting(session('lang') . '_address') }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <img src="{{ asset('site/images/icons/phone-3.png') }}" alt="">
                                </div>
                                <div class="address-info">
                                    <span>{{ __('home.phone') }} : {{ setting('phone') }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="address-icon">
                                    <img src="{{ asset('site/images/icons/world.png') }}" alt="">
                                </div>
                                <div class="address-info">
                                    <span>{{ __('admin.email') }} : {{ setting('email') }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer-latest-news -->
                <div class="col-xl-6 col-lg-5 col-12 order-3 order-lg-2 mt-md-30">
                    <div class="footer-widget middle">
                        <h6 class="footer-titel">{{ __('home.latest_news') }}</h6>
                        <ul class="footer-latest-news">
                            @php
                                $title = session('lang') . '_title';
                                $desc = session('lang') . '_description';
                            @endphp
                            @foreach($blogs as $index => $blog)
                            <li>
                                <div class="latest-news-image">
                                    <a href="{{ route('blog.show', ['id' => $blog->id, 'title' => $blog->$title]) }}">
                                        <img src="{{ $blog->blog_image }}" alt="">
                                    </a>
                                </div>
                                <div class="latest-news-info">
                                    <h6>
                                        <a href="{{ route('blog.show', ['id' => $blog->id, 'title' => $blog->$title]) }}">
                                            {{ $blog->$title }}
                                        </a>
                                    </h6>
                                    {!! substr($blog->$desc, 0, 60) !!}
                                </div>
                            </li>
                                @if($index == 2)
                                    @break
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- footer-contact -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 order-2 order-lg-3 mt-sm-30">
                    <div class="footer-widget">
                        <h6 class="footer-titel">{{ __('admin.contact_us') }}</h6>
                        <div class="footer-contact">
                            <form id="contact-form-2" action="{{ route('send.contact') }}" method="post">
                                @csrf
                                <input type="email" name="email" placeholder="{{ __('home.type_email') }}">
                                <textarea name="message" placeholder="{{ __('home.message') }}"></textarea>
                                <button type="submit" value="send">{{ __('home.send') }}</button>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center">
                        <p>Copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> <a href="#"><b>{{ setting('website_title') }}</b></a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer area -->
