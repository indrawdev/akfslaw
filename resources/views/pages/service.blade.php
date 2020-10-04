@extends('layouts.frontend')

@section('content')

    <section class="inner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h4>
                    @if (App::isLocale('en'))
                        {{ $post->en_title }}
                    @else
                        {{ $post->id_title }}
                    @endif
                </h4>
                <p>@lang('menu.home') 
                    <a href="{{ url('service/' . $post->slug) }}">
                    @if (App::isLocale('en'))
                        {{ $post->en_title }}
                    @else
                        {{ $post->id_title }}
                    @endif
                    </a>
                </p>
                </div>
            </div>
        </div>
    </section>

    <section class="service-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="service-details-sidebar">
                        <div class="service-list mb-40">
                            <ul>
                                @foreach($menuCategory as $row)
                                <li>
                                    <a class="{{ (request()->is('service/' . $row->slug)) ? 'active' : '' }}" href="{{ url('service/' . $row->slug) }}">
                                        @if (App::isLocale('en')) 
                                            {{ $row->en_title }} 
                                        @else 
                                            {{ $row->id_title }} 
                                        @endif
                                        <i class="flaticon-right-arrow-1"></i>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="contact-box">
                            <div class="contact-item">
                                <h4>@lang('menu.contact')</h4>
                                <p>24 hours online support our customer.replacing a multi-lined selection of text.</p>
                                <a href="{{ url('contact') }}">@lang('menu.contact')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="service-details">
                        <div class="thumb">
                            <img src="images/service/details-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4>
                                @if (App::isLocale('en')) 
                                    {{ $post->en_title }} 
                                @else 
                                    {{ $post->id_title }} 
                                @endif
                            </h4>
                            @if (App::isLocale('en')) 
                                {!! $post->en_content !!} 
                            @else 
                                {!! $post->id_content !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection