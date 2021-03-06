@extends('layouts.frontend')

@section('title', __('menu.publication'))

@section('content')

<section class="inner-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h4>@lang('menu.publication')</h4>
				<p>@lang('menu.home') <a href="{{ route('publication') }}">@lang('menu.publication')</a></p>
			</div>
		</div>
	</div>
</section>

<section class="service-details-section">
	<div class="container">
		<div class="row">
			<ul>
				@foreach($pubs as $row)
				<li><strong>{{ $row->title }}</strong> | {{ $row->description }}</li>
				@endforeach
			</ul>
		</div>
	</div>
</section>

@endsection