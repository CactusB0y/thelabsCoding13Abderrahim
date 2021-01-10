	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					@foreach ($randomServices as $randomService)
						<div class="col-md-4 col-sm-6">
							<div class="lab-card">
								<div class="icon">
									<i class="{{$randomService->icons->image}}"></i>
								</div>
								<h2>{{$randomService->titre}}</h2>
								<p>{{$randomService->text}}</p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
			<div class="about-contant">
				<div class="container">
					<div class="section-title">
						<h2>{!! $tab[1] !!}</h2>
					</div>
					<div class="row">
						<div class="col-md-6">
							<p>{{$abouts->col_gauche}}</p>
						</div>
						<div class="col-md-6">
							<p>{{$abouts->col_droite}}</p>
						</div>
					</div>
					<div class="text-center mt60">
						<a href="{{$abouts->btn_lien}}" class="site-btn">{{$abouts->btn_nom}}</a>
					</div>
					<!-- popup video -->
					<div class="intro-video">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<img src="{{asset('img/'.$abouts->video_src)}}" alt="">
								<a href="{{$abouts->video_url}}" class="video-popup">
									<i class="fa fa-play"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- About section end -->