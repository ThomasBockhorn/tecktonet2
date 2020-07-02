@extends('layouts.front')

@section('content')
<section id="blog-single" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-news">
							<div class="news-head">
								<img src="img/single-b1.jpg" alt="#">
							</div>
							<div class="news-body">
								<h3 class="date">25<span>nov</span></h3>
								<h2><a href="#"> give us that</a></h2>
								<div class="title"><span class="user"><i class="fa fa-user" aria-hidden="true"></i>adminaccess</span> <span class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i>no comment</span></div>
                                {!! $Blog_Post->text !!}
								<h5 class="tags">tags-
									<li><a href="#">html,</a></li>
									<li><a href="#">Bootstrap,</a></li>
									<li><a href="#">Creative,</a></li>
									<li><a href="#">web design</a></li>
								</h5>
							</div>
                        </div>
					</div>
	
				</div>
			</div>
		</section>

@endsection