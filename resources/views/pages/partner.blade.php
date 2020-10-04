@extends('layouts.frontend')

@section('content')

    <section class="inner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h4>
                    @if (App::isLocale('en'))
                        {{ $partner->en_name }}
                    @else
                        {{ $partner->id_name }}
                    @endif
                </h4>
                <p>@lang('menu.home') 
                    <a href="{{ url('partner/' . $partner->slug) }}">
                        @if (App::isLocale('en'))
                            {{ $partner->en_name }}
                        @else
                            {{ $partner->id_name }}
                        @endif
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
                        <img src="images/resources/abut-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content">
                        <h6>@lang('menu.partner')</h6>
                        @if (App::isLocale('en'))
                            <h4>{{ $partner->en_name }}</h4>
                            {!! $partner->en_description !!}
                        @else
                            <h4>{{ $partner->id_name }}</h4>
                            {!! $partner->id_description !!}
                        @endif
                        <img src="images/icons/2.png" alt="" style="width: 170px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection