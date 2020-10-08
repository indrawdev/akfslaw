    <div id="home-st1" class="carousel slide carousel-fade home-slider home-st1-sec" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home-st1" data-slide-to="0" class="active"></li>
            <li data-target="#home-st1" data-slide-to="1"></li>
            <li data-target="#home-st1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active fullHeight">
                <img src="images/slider/1.jpg" alt="First slide">
                <div class="slide-caption">
                    <div class="text">
                        <div class="sub-title">
                            <h4>Need any help?</h4>
                        </div>
                        <div class="title">
                            <h1>We Fight for Right</h1>
                        </div>
                        <div class="p-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus maiores quas nemo, rerum vitae cumque ipsa id aut mollitia soluta! Expedita quod reprehenderit possimus iste repellendus natus consequatur.</p>
                        </div>
                        <div class="btn">
                            <a class="home-btn" href="#">Contact Us</a>
                        </div>
                    </div>
                    <div class="img">
                        <img src="images/slider/lawyer-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item fullHeight">
                <img src="images/slider/1.jpg" alt="Second slide">
                <div class="slide-caption">
                    <div class="text">
                        <div class="sub-title">
                            <h4>Need any help?</h4>
                        </div>
                        <div class="title">
                            <h1>We Fight for Right</h1>
                        </div>
                        <div class="p-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus maiores quas nemo, rerum vitae cumque ipsa id aut mollitia soluta! Expedita quod reprehenderit possimus iste repellendus natus consequatur.</p>
                        </div>
                        <div class="btn">
                            <a class="home-btn" href="#">Contact Us</a>
                        </div>
                    </div>
                    <div class="img">
                        <img src="images/slider/lawyer-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item fullHeight">
                <img src="images/slider/1.jpg" alt="Third slide">
                <div class="slide-caption">
                    <div class="text">
                        <div class="sub-title">
                            <h4>Need any help?</h4>
                        </div>
                        <div class="title">
                            <h1>We Fight for Right</h1>
                        </div>
                        <div class="p-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus maiores quas nemo, rerum vitae cumque ipsa id aut mollitia soluta! Expedita quod reprehenderit possimus iste repellendus natus consequatur.</p>
                        </div>
                        <div class="btn">
                            <a class="home-btn" href="#">Contact Us</a>
                        </div>
                    </div>
                    <div class="img">
                        <img src="images/slider/lawyer-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#home-st1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home-st1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="about-section">
        <div class="container">
            <div class="row about-wrapper">
                <div class="col-lg-5">
                    <div class="thumb">
                        <img src="images/icons/1.png" alt="" style="width: 170px;">
                        <div class="text">
                            <h4>welcome to law</h4>
                            <h6>Need any help?</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content">
                        <h6>@lang('menu.about')</h6>
                        <h4>
                            @if (App::isLocale('en'))
                                {{ $about->en_intro }}
                            @else
                                {{ $about->id_intro }}
                            @endif
                        </h4>
                        @if (App::isLocale('en'))
                            {!! Str::limit($about->en_content, 473) !!}
                        @else
                            {!! Str::limit($about->id_content, 473) !!}
                        @endif
                        <img src="images/icons/2.png" alt="" style="width: 170px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h6>What We Do</h6>
                        <h4>Our Practice Areas</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae id aut ratione, qui debitis reprehenderit numquam et vitae.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-slider owl-carousel service-wrapper">
                        @foreach($services as $row)
                        <div class="item">
                            <div class="service-post">
                                <div class="icon">
                                    <i class="{{ $row->icon }}"></i>
                                </div>
                                <h4>
                                    <a href="{{ url('service/' . $row->slug) }}">
                                        @if (App::isLocale('en'))
                                            {{ $row->en_title }}
                                        @else
                                            {{ $row->id_title }}
                                        @endif
                                    </a>
                                </h4>
                                @if (App::isLocale('en'))
                                    {{ Str::limit(strip_tags($row->en_content), 30) }}
                                @else
                                    {{ Str::limit(strip_tags($row->id_content), 30) }}
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="attorney-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h6>Partner</h6>
                        <h4>Meet Our Partner</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae id aut ratione, qui debitis reprehenderit numquam et vitae.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="attorney-grids attorney-slider owl-carousel">
                        @foreach($partners as $row)
                        <div class="item">
                            <div class="grid">
                                <div class="thumb">
                                    <a href="{{ url('partner/' . $row->slug) }}">
                                        <img src="{{ asset('images/' . $row->photo) }}" alt="{{ $row->en_name }}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h3>{{ $row->en_name }}</h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title st-2">
                        <h6>Publication</h6>
                        <h4>Latest Blog Post</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae id aut ratione, qui debitis reprehenderit numquam et vitae.</p>
                    </div>
                </div>
            </div>
            <div class="row blog-wrapper">
                <div class="col-lg-4">
                    <div class="blog-post">
                        <div class="thumb">
                            <img src="images/blog/1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="#">Best Education Law and Training</a></h4>
                            <div class="tag">
                                <ul>
                                    <li>May 07, 2022</li>
                                    <li>-By &nbsp;<a href="#">Noah Ava</a></li>
                                    <li><a href="#">Family Law</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-post">
                        <div class="thumb">
                            <img src="images/blog/2.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="#">Remembering the dark history</a></h4>
                            <div class="tag">
                                <ul>
                                    <li>May 07, 2022</li>
                                    <li>-By &nbsp;<a href="#">Noah Ava</a></li>
                                    <li><a href="#">Family Law</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-post">
                        <div class="thumb">
                            <img src="images/blog/3.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="#">scotus Lets Transgender Bathroom</a></h4>
                            <div class="tag">
                                <ul>
                                    <li>May 07, 2022</li>
                                    <li>-By &nbsp;<a href="#">Noah Ava</a></li>
                                    <li><a href="#">Family Law</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>