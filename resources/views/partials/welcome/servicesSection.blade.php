	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{!! $tab[3] !!}</h2>
			</div>
			<div class="row">
				@foreach ($services as $service)
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<div class="icon">
								<i class="{{$service->icons->image}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$service->titre}}</h2>
								<p>{{$service->text}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->