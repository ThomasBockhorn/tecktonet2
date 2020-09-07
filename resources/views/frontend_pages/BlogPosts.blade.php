@extends('layouts.front')

@section('content')
@include('components/frontend_components/common_components/breadcrumb/breadcrumb')
<!-- Blog -->
<section id="blog-single" class="section">
    <div class="container">
        <div class="row">
            @foreach($Blog_Posts as $key => $post)
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ asset('/storage/'. $Images[$key]->image) }}" alt="">
                    </div>
                    <div class="news-body">
                        <h3 class="date">
                            {{ $post->created_at->format('d') }}<span>{{$post->created_at->format('M') }}</span></h3>
                        <h2><a href="#">{{ $post->title }}</a></h2>
                        <div class="title"><span class="user"><i class="fa fa-user"
                                    aria-hidden="true"></i>{{ $post->author }}</span></div>
                        {!! $post-> text !!}
                        <a href="{{ route('blog.show', $post->id) }}" class="btn">Read More<i class="fa fa-caret-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        {{$Blog_Posts->links()}}
    </div>
</section>
<!--/ End Newslatter -->

@endsection