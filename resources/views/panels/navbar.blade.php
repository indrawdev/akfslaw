    <!-- main-navigation start -->
    <div class="main-navigation main-mega-menu animated">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- header dropdown buttons end-->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img id="logo_img" src="{{ asset('images/akfs-lawfirm.png') }}" alt=""></a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                

                <div class="collapse navbar-collapse" id="navbar-collapse-1">

                    <!-- main-menu -->
                    <ul class="navbar-nav ml-xl-auto">

                        <!-- mega-menu end -->
                        <li class="nav-item dropdown {{ (request()->is('/')) ? 'active' : '' }}">
                            <a href="{{ url('/') }}" class="nav-link">@lang('menu.home')</a>
                        </li>
                        <!-- mega-menu start -->

                        <!-- mega-menu end -->
                        <li class="nav-item dropdown {{ (request()->is('about')) ? 'active' : '' }}">
                            <a href="{{ route('about') }}" class="nav-link">@lang('menu.about')</a>
                        </li>
                        <!-- mega-menu start -->

                        <!-- mega-menu end -->
                        <li class="nav-item dropdown {{ (request()->is('partner/*')) ? 'active' : '' }}">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('menu.our-people')</a>
                            <div class="dropdown-menu left-1">
                                <div class="dropdown">
                                    @foreach($menuPartner as $row)
                                    <a class="dropdown-item" href="{{ url('partner/' . $row->slug) }}">@if (App::isLocale('en')) {{ $row->en_name }} @else {{ $row->id_name }} @endif</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <!-- mega-menu start -->

                        <!-- mega-menu end -->
                        <li class="nav-item dropdown {{ (request()->is('service/*')) ? 'active' : '' }}">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('menu.our-service')</a>
                            <div class="dropdown-menu left-1">
                                <div class="dropdown">
                                    @foreach($menuCategory as $row)
                                    <a class="dropdown-item" href="{{ url('service/' . $row->slug) }}">@if (App::isLocale('en')) {{ $row->en_title }} @else {{ $row->id_title }} @endif</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <!-- mega-menu start -->

                        <!-- mega-menu end -->
                        <li class="nav-item dropdown {{ (request()->is('publication')) ? 'active' : '' }}">
                            <a href="{{ route('publication') }}" class="nav-link">@lang('menu.publication')</a>
                        </li>
                        <!-- mega-menu start -->

                        <!-- mega-menu end -->
                        <li class="nav-item dropdown {{ (request()->is('contact')) ? 'active' : '' }}">
                            <a href="{{ route('contact') }}" class="nav-link">@lang('menu.contact')</a>
                        </li>
                        <!-- mega-menu start -->

                    </ul>

                    <!-- header dropdown buttons -->
                    <div class="dropdown-buttons">
                        <div class="btn-group menu-search-box">
                            <button type="button" class="btn dropdown-toggle" id="header-drop-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont-search"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-drop-3">
                                <li>
                                    <form role="search" class="search-box">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <i class="icofont-search form-control-feedback"></i>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- main-menu end -->

                </div>
            </div>
        </nav>
    </div>
    <!-- main-navigation end -->