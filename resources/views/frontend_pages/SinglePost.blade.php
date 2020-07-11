@extends('layouts.front')

@section('content')
@include('components/frontend_components/common_components/breadcrumb/breadcrumb')
<section id="blog-single" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-news">
                    <div class="news-head">
                        <img src="img/single-b1.jpg" alt="#">
                    </div>
                    <div class="news-body">
                        <h3 class="date">
                            {{$Blog_Post->created_at->format('d')}}<span>{{$Blog_Post->created_at->format('M')}}</span>
                        </h3>
                        <h2><a href="#">{{ $Blog_Post->title }}</a></h2>
                        <div class="title"><span class="user"><i class="fa fa-user"
                                    aria-hidden="true"></i>{{$Blog_Post->author}}</span></div>
                        {!! $Blog_Post->text !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection