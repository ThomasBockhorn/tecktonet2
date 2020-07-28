@extends('layouts.front')

@section('content')
@include('components/frontend_components/common_components/breadcrumb/breadcrumb')
<!-- single-pf -->
<section id="single-pf" class=" section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-pf owl-carousel">
                    <!--Single pf -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/single-pf1.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <h2>{{ $Project->title }}</h2>
                            {!! $Project->description !!}
                            <h5>project details</h5>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>date:
                                {{$Project->created_at->format('d M Y')}}</span>
                            <span><i class="fa fa-folder-open-o" aria-hidden="true"></i>category: web design</span>
                            <span><i class="fa fa-folder-o" aria-hidden="true"></i>project url: <a
                                    href="#">www.twitter.com</a></span>
                            <a href="#" class="btn">view live<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                    <!--Single pf -->
                    @foreach($Projects as $key => $project)
                    <div class="single-news">
                        <div class="news-head">
                            <img src="img/single-pf2.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <h2>{{$project->title}}</h2>
                            {!! $project->description !!}
                            <h5>project details</h5>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>date:
                                {{$project->created_at->format('d M Y')}}</span>
                            <span><i class="fa fa-folder-open-o" aria-hidden="true"></i>category: branding</span>
                            <span><i class="fa fa-folder-o" aria-hidden="true"></i>project url: <a
                                    href="#">www.facebook.com</a></span>
                            <a href="#" class="btn">view live<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End single-pf -->



@endsection