<!-- Latest Works Area -->
<section id="latest-works" class="latest-works section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Latest Works</h2>
                    <p>Tecktonet's portfolio of projects.</p>
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

                @foreach($Projects as $key => $project)
                <div class="col-md-4 col-sm-4 col-xs-12 print identity">
                    <!-- Single Works -->
                    <div class="single-work">
                        <img src="img/pf1.jpg" alt="">
                        <div class="works-hover">
                            <a href="portfolio-single.html">
                                <h4>{{$project->title}}</h4>
                            </a>
                            <a class="link popup" href="img/pf1.jpg"><i class="fa fa-picture-o"
                                    aria-hidden="true"></i></a>
                            <a href="portfolio-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Works -->
                </div>
                @endforeach

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="button-head">
                    <div class="button">
                        <span></span>
                        <a href="/portfolio" class="btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Works Area -->