	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach ($articles as $article)
						<!-- Post item -->
						<div class="post-item">
							<div class="post-thumbnail">
								<img src="{{asset('img/blog/'.$article->src)}}" alt="">
								<div class="post-date">
									<h2>{{$article->created_at->format('d')}}</h2>
									<h3>{{$article->created_at->format('M')}} {{$article->created_at->format('Y')}}</h3>
								</div>
							</div>
							<div class="post-content">
								<h2 class="post-title">{{$article->titre}}</h2>
								<div class="post-meta">
									<a href="">{{$article->users->prenom}} {{$article->users->name}}</a>
									<a href="">
										@foreach ($article->tags as $tag)
											@if ($tag == $article->tags->last())
												{{$tag->tag}}
											@else
												{{$tag->tag}},
											@endif
											
										@endforeach
									</a>
									<a href="">{{count($article->comments)}} Comments</a>
								</div>
								<p>{{Str::limit($article->texte, 200, '...') }}</p>
								<a href="/article/{{$article->id}}" class="read-more">Read More</a>
							</div>
						</div>
					@endforeach
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="/search" class="search-form" method="GET">
							<input type="text" name="query" placeholder="Search">
							<button type="submit" class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($categories as $categorie)
								<li><a href="/categorie/{{$categorie->id}}">{{$categorie->categorie}}</a></li>	
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tags as $tag)
								<li><a href="/tag/{{$tag->id}}">{{$tag->tag}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->