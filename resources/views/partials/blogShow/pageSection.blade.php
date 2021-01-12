	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{asset('img/blog/'.$show->src)}}" alt="">
							<div class="post-date">
								<h2>{{$show->created_at->format('d')}}</h2>
								<h3>{{$show->created_at->format('M')}} {{$show->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$show->titre}}</h2>
							<div class="post-meta">
								<a href="">{{$show->users->name}}</a>
								<a href="">
                                    @foreach ($show->tags as $tag)
											{{$tag->tag}}
									@endforeach
                                </a>
								<a href="">2 Comments</a>
							</div>
							<p>{{$show->texte}}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="img/avatar/03.jpg" alt="">
							</div>
							<div class="author-info">
								<h2>{{$show->users->name}}, <span>{{$show->users->role}}</span></h2>
								<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments (2)</h2>
							<ul class="comment-list">
								<li>
									<div class="avatar">
										<img src="img/avatar/01.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 03 nov, 2017 | Reply</h3>
										<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
									</div>
								</li>
								<li>
									<div class="avatar">
										<img src="img/avatar/02.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 03 nov, 2017 | Reply</h3>
										<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
									</div>
								</li>
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class">
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
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
                            @foreach ($show->categories as $categorie)
							    <li><a href="#">{{$categorie->categorie}}</a></li>
                            @endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
                            @foreach ($show->tags as $tags)
							    <li><a href="#">{{$tags->tag}}</a></li>
                            @endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>