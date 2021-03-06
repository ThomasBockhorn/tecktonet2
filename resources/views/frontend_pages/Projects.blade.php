@extends('layouts.front')

@section('content')
@include('components/frontend_components/common_components/breadcrumb/breadcrumb')
<section id="latest-works" class="latest-works section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Tecktonet's Portfolio</h2>
                    <p>“Programming is not easy like Sunday morning, it is silent poetry.”
                        ― Waseem Latif</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Project Nav -->
                <div class="works-menu wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <ul>
                        <li class="active" data-filter="*">All Works</li>
                        @foreach($ProjectCategories as $projectCategory)
                        <li data-filter=".{{$projectCategory->category}}">{{$projectCategory->category}}</li>
                        @endforeach
                    </ul>
                </div>
                <!--/ End Project Nav -->
            </div>
        </div>
        <div class="row">
            <div class="isotop-active">

                <!-- Single Works -->
                @foreach($Projects as $key => $project)
                <div class="col-md-4 col-sm-4 col-xs-12 {{ $project->category }}">
                    <!-- Single Works -->
                    <div class="single-work">
                        <img src="{{ asset('storage/'. $ProjectImages[$key]->image) }}" alt="">
                        <div class="works-hover">
                            <a href="{{ route('portfolio.show', $project->id) }}">
                                <h4>{{$project->title}}</h4>
                            </a>
                            <a class="link popup" href="{{ asset('storage/'. $ProjectImages[$key]->image) }}"><i
                                    class="far fa-images" aria-hidden="true"></i></a>
                            <a href="{{ route('portfolio.show', $project->id) }}"><i class="fa fa-link"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Works -->
                </div>
                @endforeach
            </div>
            {{$Projects->links()}}
        </div>
    </div>
</section>
@endsection