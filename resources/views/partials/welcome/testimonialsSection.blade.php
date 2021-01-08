	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{!! $tab[2] !!}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($testimonials as $testimonial)
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$testimonial->testimonial}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('img/avatar/'.$testimonial->teams->src_avatar)}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$testimonial->teams->prenom}} {{$testimonial->teams->nom}}</h2>
									<p>{{$testimonial->teams->role}}</p>
								</div>
							</div>
						</div>	
						@endforeach
						{{-- <!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('img/avatar/02.jpg')}}" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('img/avatar/01.jpg')}}" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('img/avatar/02.jpg')}}" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('img/avatar/01.jpg')}}" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('img/avatar/02.jpg')}}" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->