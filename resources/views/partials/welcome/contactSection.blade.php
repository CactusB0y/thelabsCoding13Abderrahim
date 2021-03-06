	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$contact->titre}}</h2>
					</div>
					<p>{{$contact->texte}}</p>
					<h3 class="mt60">{{$contact->sous_titre}}</h3>
					<p class="con-item">{{$contact->rue}} <br> {{$contact->code_postal}} {{$contact->region}} </p>
					<p class="con-item">{{$contact->tel}}</p>
					<p class="con-item">{{$contact->email}}</p>
				</div>
				<!-- contact form -->
				<div id="contact" class="col-md-6 col-pull">
					<form class="form-class" id="con_form" role="form" action="/message" method="POST">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->