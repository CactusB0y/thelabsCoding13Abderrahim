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
                                        @if ($tag == $show->tags->last())
                                            {{$tag->tag}}
                                            @else
                                            {{$tag->tag}},
                                        @endif
									@endforeach
                                </a>
								<a href="">{{count($show->comments)}} Comments</a>
							</div>
							<p>{{$show->texte}}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img height="117px" width="117px" src="{{asset('img/avatar/'.$show->users->src)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$show->users->prenom}} {{$show->users->name}}, <span>{{$show->users->role}}</span></h2>
								<p>{{$show->users->description}}</p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments ({{count($show->comments)}})</h2>
							<ul class="comment-list">
                                @foreach ($show->comments as $comment)
                                    <li>
                                        <div class="avatar">
                                            <img  src={{asset("img/avatar/".$comment->users->src)}} alt="">
                                        </div>
                                        <div class="commetn-text">
                                            <h3>{{$comment->users->prenom}} {{$comment->users->name}} | {{$comment->created_at->format('d')}} {{$comment->created_at->format('M')}}, {{$comment->created_at->format('Y')}} | Reply</h3>
                                            <p>{{$comment->message}}</p>
                                        </div>
                                    </li>
                                @endforeach
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								@if (Auth::check())
									<form class="form-class" role="form" action="/comment" method="POST">
										@csrf
										<input name="article_id" value="{{$show->id}}" style="display: none" type="text">
										<div class="row">
											<div class="col-sm-12">
												<textarea name="message" placeholder="Message"></textarea>
												<button type="submit" class="site-btn">send</button>
											</div>
										</div>
									</form>
								@else
									<h4>Pour pouvoir poster un commentaire veuillez vous connectez <a href="{{ route('login') }}">en cliquant sur ce lien</a></h4>
								@endif
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