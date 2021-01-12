	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				@foreach ($articleRapides as $articleRapide)
					<div class="col-md-4 col-sm-6">
						<div class="sv-card">
							<div class="card-img">
								<img src="{{asset('img/blog/'.$articleRapide->src)}}" alt="">
							</div>
							<div class="card-text">
								<h2>{{$articleRapide->titre}}</h2>
								<p>{{Str::limit($articleRapide->texte, 150, '...') }}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- services card section end-->