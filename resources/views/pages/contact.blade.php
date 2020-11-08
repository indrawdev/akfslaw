@extends('layouts.frontend')

@section('title', __('menu.contact'))

@section('content')

    <section class="inner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h4>@lang('menu.contact')</h4>
                <p>@lang('menu.home') <a href="{{ route('contact') }}">@lang('menu.contact')</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="form-area">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <input type="text" class="form-control" placeholder="@lang('contact.first-name')">
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control" placeholder="@lang('contact.last-name')">
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" placeholder="@lang('contact.email')">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="form-control" placeholder="@lang('contact.website')">
                            </div>
                            <div class="form-group col-12">
                                <textarea class="form-control" placeholder="@lang('contact.messages')"></textarea>
                            </div>
                            <div class="form-group col-6">
                                <a href="#">@lang('contact.send-message')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="icofont-contact-add"></i>
                        </div>
                        <div class="content">
                            <h5><a href="#">@lang('contact.address')</a></h5>
                            <p>Business Park Kebon Jeruk Blok A No. 9. Jl. Meruya Ilir Raya No. 88, Meruya Utara, Kembangan<br>Jakarta 11620, Indonesia</p>
                        </div>
                    </div>
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="icofont-clock-time"></i>
                        </div>
                        <div class="content">
                            <h5><a href="#">@lang('contact.business-hours')</a></h5>
                            <p>@lang('contact.hours')</p>
                        </div>
                    </div>
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="icofont-ui-email"></i>
                        </div>
                        <div class="content">
                            <h5><a href="mailto:support@akfslaw.com">@lang('contact.email')</a></h5>
                            <p>support@akfslaw.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection