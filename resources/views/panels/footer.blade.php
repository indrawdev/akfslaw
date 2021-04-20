<footer class="footer-section">
	<div class="upper-footer">
		<div class="container">
			<div class="row">
				<div class="col col-lg-4 col-md-3 col-sm-6">
					<div class="widget about-widget">
						<div class="logo widget-title">
							<img src="{{ asset('images/akfs-lawfirm.png') }}" alt>
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
					<div class="widget about-widget">
						<div class="widget-title">
							<h3>Contact</h3>
						</div>
						<div class="widget-instagram">
							<a href="https://api.whatsapp.com/send?phone=6281513116819" target="_blank"><i class="icofont-whatsapp"></i> +62 815-1311-6819</a>
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
					<p>© @lang('footer.copyright') 2020 - {{ date('Y') }} | <a href="{{ url('/') }}">AKFS Law</a> | @lang('footer.all-right')</p>
				</div>
			</div>
		</div>
	</div>
</footer>