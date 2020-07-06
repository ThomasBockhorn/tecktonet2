<!-- Blog -->
<section id="blog" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Blog</h2>
							<p>Tecktonet's latest Blog posts</p>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach ($Blog_Posts as $post)
					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<div class="single-news">
							<div class="news-head">
								<img src="img/blog1.jpg" alt="#">
							</div>
							<div class="news-body">
								<h3 class="date">{{$post->created_at->format('d')}}<span>{{$post->created_at->format('M')}}</span></h3>
								<h2><a href="blog-single.html"> {{ $post->title }}</a></h2>
								<div class="title"><span class="user"><i class="fa fa-user" aria-hidden="true"></i>{{$post->author}}</span></div>
								{!!Str::of($post->text)->limit(20)!!}
								<br>
								<a href="{{ route('blog.show', $post->id) }}" class="btn">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					@endforeach
			</div>
		</section>
		<!--/ End Newslatter -->