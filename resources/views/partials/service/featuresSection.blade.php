	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! $tab[5] !!}</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($servicesPrimes->take(3) as $servicePrimes)
						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$servicePrimes->titre}}</h2>
								<p>{{$servicePrimes->text}}</p>
							</div>
							<div class="icon">
								<i class="{{$servicePrimes->iconprimes->image}}"></i>
							</div>
						</div>
						<div style="display: none">
							{{$limite=$servicePrimes->id}}
						</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($servicesPrimes->take(6) as $servicePrimes)
						@if ($servicePrimes->id < $limite)
							<div class="icon-box light left">
								<div class="service-text">
									<h2>{{$servicePrimes->titre}}</h2>
									<p>{{$servicePrimes->text}}</p>
								</div>
								<div class="icon">
									<i class="{{$servicePrimes->iconprimes->image}}"></i>
								</div>
							</div>
						@endif
					@endforeach
					{{-- <div class="icon-box light">
						<div class="icon">
							<i class="flaticon-037-idea"></i>
						</div>
						<div class="service-text">
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="flaticon-025-imagination"></i>
						</div>
						<div class="service-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="flaticon-008-team"></i>
						</div>
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div> --}}
				</div>
			</div>
			<div class="text-center mt100">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->