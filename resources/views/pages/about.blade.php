@extends('layouts.frontend')

@section('content')

    <section class="inner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h4>
                    @lang('menu.about')
                </h4>
                <p>@lang('menu.home') 
                    <a href="{{ route('about') }}">
                        @lang('menu.about')
                    </a>
                </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row about-wrapper style-2"> 
                <div class="col-lg-5">
                    <div class="thumb">
                        <img src="{{ asset('images/resources/abut-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content">
                        <h6>
                            @if (App::isLocale('en'))
                                {{ $profile->en_title }}
                            @else
                                {{ $profile->id_title }}
                            @endif
                        </h6>
                        <h4>
                            @if (App::isLocale('en'))
                                {{ $profile->en_intro }}
                            @else
                                {{ $profile->id_intro }}
                            @endif                        
                        </h4>
                        @if (App::isLocale('en'))
                            {!! $profile->en_content !!}
                        @else
                            {!! $profile->id_content !!}
                        @endif
                        <img src="images/icons/2.png" alt="" style="width: 170px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection