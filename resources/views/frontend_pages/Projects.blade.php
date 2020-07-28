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
                        <li data-filter=".print">Print</li>
                        <li data-filter=".identity">Identity</li>
                        <li data-filter=".branding">Branding</li>
                        <li data-filter=".web">Web</li>
                        <li data-filter=".wordpress">Wordpress</li>
                    </ul>
                </div>
                <!--/ End Project Nav -->
            </div>
        </div>
        <div class="row">
            <div class="isotop-active">

                <!-- Single Works -->
                @foreach($Projects as $key => $project)
                <div class="col-md-4 col-sm-4 col-xs-12 print identity">
                    <!-- Single Works -->
                    <div class="single-work">
                        <img src="img/pf1.jpg" alt="">
                        <div class="works-hover">
                            <a href="{{ route('portfolio.show', $project->id) }}">
                                <h4>{{$project->title}}</h4>
                            </a>
                            <a class="link popup" href="img/pf1.jpg"><i class="fa fa-picture-o"
                                    aria-hidden="true"></i></a>
                            <a href="{{ route('portfolio.show', $project->id) }}"><i class="fa fa-link"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Works -->
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
</section>
<!--/ End Works Area -->

<!-- Clients Area -->
<div id="clients" class="clients section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="owl-carousel clients-slider">
                    <!-- Single Clients -->
                    <div class="single-clients">
                        <img src="img/client1.jpg" alt="#">
                    </div>
                    <!--/ End Single Client -->
                    <!-- Single Client -->
                    <div class="single-clients">
                        <img src="img/client2.jpg" alt="#">
                    </div>
                    <!--/ End Single Client -->
                    <!-- Single Client -->
                    <div class="single-clients">
                        <img src="img/client3.jpg" alt="#">
                    </div>
                    <!--/ End Single Client -->
                    <!-- Single Client -->
                    <div class="single-clients">
                        <img src="img/client4.jpg" alt="#">
                    </div>
                    <!--/ End Single Client -->
                    <!-- Single Client -->
                    <div class="single-clients">
                        <img src="img/client5.jpg" alt="#">
                    </div>
                    <!--/ End Single Client -->
                    <!-- Single Client -->
                    <div class="single-clients">
                        <img src="img/client6.jpg" alt="#">
                    </div>
                    <!--/ End Single Client -->
                    <!-- Single Client -->
                    <div class="single-clients">
                        <img src="img/client7.jpg" alt="#">
                    </div>
                    <!--/ End Single Client -->
                    <!-- Single Client -->
                    <div class="single-clients">
                        <img src="img/client8.jpg" alt="#">
                    </div>
                    <!--/ End Single Client -->
                    <!-- Single Client -->
                    <div class="single-clients">
                        <img src="img/client9.jpg" alt="#">
                    </div>
                    <!--/ End Single Client -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Clients Area -->

@endsection