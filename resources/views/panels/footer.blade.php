<footer class="footer-section">
    <div class="upper-footer">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-md-3 col-sm-6">
                    <div class="widget about-widget">
                        <div class="logo widget-title">
                            <img src="images/footer-logo.png" alt>
                        </div>
                        @if (App::isLocale('en'))
                            {!! $introProfile->en_content !!}
                        @else
                            {!! $introProfile->id_content !!}
                        @endif
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>               
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-3 col-sm-6">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3>@lang('footer.navigation')</h3>
                        </div>
                        <ul>
                            <li><a href="{{ route('about') }}">@lang('menu.about')</a></li>
                            <li><a href="{{ route('contact') }}">@lang('menu.contact')</a></li>
                            <li><a href="{{ route('publication') }}">@lang('menu.publication')</a></li>
                            <li><a href="{{ route('contact') }}">@lang('menu.contact')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-6">
                    <div class="widget link-widget service-widget">
                        <div class="widget-title">
                            <h3>@lang('footer.services')</h3>
                        </div>
                        <ul>
                            @foreach($menuCategory as $row)
                            <li>
                                <a href="{{ url('service/' . $row->slug) }}">
                                    @if (App::isLocale('en'))
                                        {{ $row->en_title }}
                                    @else
                                        {{ $row->id_title }}
                                    @endif
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-6">
                    <div class="widget instagram-widget">
                        <div class="widget-title">
                            <h3>instagram</h3>
                        </div>
                        <div class="widget-instagram">
                            <div class="grid">
                                <img src="images/instagram/1.jpg" alt="">
                            </div>
                            <div class="grid">
                                <img src="images/instagram/2.jpg" alt="">
                            </div>
                            <div class="grid">
                                <img src="images/instagram/3.jpg" alt="">
                            </div>
                            <div class="grid">
                                <img src="images/instagram/4.jpg" alt="">
                            </div>
                            <div class="grid">
                                <img src="images/instagram/5.jpg" alt="">
                            </div>
                            <div class="grid">
                                <img src="images/instagram/6.jpg" alt="">
                            </div>
                            <a href="#"><i class="icofont-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div>
    <div class="Copyright-footer">
        <div class="container">
            <div class="row">
                <div class="separator"></div>
                <div class="col col-xs-12">
                    <p>© @lang('footer.copyright') {{ date('Y') }} | <a href="{{ url('/') }}">AKFS Law</a> | @lang('footer.all-right')</p>
                </div>
            </div>
        </div>
    </div>
</footer>