	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! $tab[4] !!}</h2>
			</div>
			<div class="row">
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/'.$random[0]->src)}}" alt="">
						<h2>{{$random[0]->prenom}} {{$random[0]->nom}}</h2>
						<h3>{{$random[0]->role}}</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/'.$choix->teams->src)}}" alt="">
						<h2>{{$choix->teams->prenom}} {{$choix->teams->nom}}</h2>
						<h3>{{$choix->teams->role}}</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/'.$random2[0]->src)}}" alt="">
						<h2>{{$random2[0]->prenom}} {{$random2[0]->nom}}</h2>
						<h3>{{$random2[0]->role}}</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Section end-->