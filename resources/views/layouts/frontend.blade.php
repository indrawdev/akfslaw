<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="keywords"  content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    @include('panels/styles')

    <!-- Favicon -->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">

  </head>

<body>

    @include('panels/preloader')

    <div class="page-wrapper">

        @include('panels/header')

        @yield('content')

        @include('panels/footer')
    
    </div>

    @include('panels/scripts')

</body>
</html>