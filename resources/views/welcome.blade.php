@extends('layouts.front')

@section('content')
<!-- Header Area -->
<header id="header" class="header">
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2 col-xs-2">
							<div class="logo">
								<a href="index.html"><img src="{{ asset('img/logo.png')}}" alt="logo.png"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-10">
							<div class="mobile-menu"></div>
							<nav class="navbar navbar-default">
								<div class="collapse navbar-collapse">
									<ul id="nav" class="nav navbar-nav">
										<li class="current"><a href="#slider">home</a>
										</li>
										<li><a href="#Services">Services</a></li>
										<li><a href="#latest-works">portfolio<i class="fa fa-caret-down" aria-hidden="true"></i></a>
											<ul class="dropdown">
												<li><a href="portfolio.html">Portfolio</a></li>
												<li><a href="portfolio-single.html">portfolio-single</a></li>
											</ul>
										</li>
										<li><a href="#blog">Blogs<i class="fa fa-caret-down" aria-hidden="true"></i></a>
											<ul class="dropdown">
												<li><a href="blog.html">Blog Archive</a></li>
												<li><a href="blog-single.html">Blog Single</a></li>
											</ul>
										</li>
										<li><a href="#team">Team</a></li>
										<li><a href="#">Pages <i class="fa fa-caret-down" aria-hidden="true"></i></a>
											<ul class="dropdown">
												<li><a href="404.html">Error 404</a></li>
												<li><a href="mail-success.html">Mail Success</a></li>
											</ul>
										</li>
										<li><a href="#contact">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--/ End Header Area -->
		
		<!-- Slider Area -->
		<section id="slider">
				<div class="single-slider" style="background-image:url('img/slider1.jpg')">
					<div id="particles-js"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="text">
									<h1 class="cd-headline clip is-full-width">
										awesome creative
										<span class="cd-words-wrapper">
											<b class="is-visible">design</b>
											<b>Theme</b>
											<b>codes</b>
										</span>
									</h1>
									<p>Lorem Ipsum is simply dummy text of the printing and printing and typesetting industry.<br> Lorem Ipsum has been the industry's</p>
									<div class="button-head">
										<div class="button">
											<span></span>
											<a href="#" class="btn">Load More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- features Area -->
		<section id="features" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Our Feautes</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="feature-left">
							<img src="img/computer.jpg" alt="#">
						</div>	
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="feature-right">
							<div class="single-right">
								<i class="fas fa-laptop" aria-hidden="true"></i>
								<div class="right-content">
									<h3>UX design</h3>
									<P>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</P>
								</div>
							</div>
							<div class="single-right">
								<i class="fa fa-database" aria-hidden="true"></i>
								<div class="right-content">
									<h3>UI design</h3>
									<P>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</P>
								</div>
							</div>
							<div class="single-right">
								<i class="fa fa-cubes" aria-hidden="true"></i>
								<div class="right-content">
									<h3>SEO Services</h3>
									<P>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</P>
								</div>
							</div>
							<div class="single-right">
								<i class="fa fa-desktop" aria-hidden="true"></i>
								<div class="right-content">
									<h3>Web Development</h3>
									<P>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</P>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End features Area -->
		
		<!-- Start Service area -->
		<section id="Services" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Exclusive <span>Services</span></h2>
							<p>We create exclusive & creative Stuffs for our awesome clients</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<div class="single-service">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<h3>Web Design</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">
						<div class="single-service">
							<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
							<h3>Web Development</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s">
						<div class="single-service">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
							<h3>Investment Plan</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.7s">
					<div class="single-service">
							<i class="fa fa-meetup" aria-hidden="true"></i>
							<h3>Finance Support</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
						<div class="single-service">
							<i class="fa fa-globe" aria-hidden="true"></i>
							<h3>World Marketing</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="single-service">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<h3>Perfect Solution</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Service -->
		
		<!-- Latest Works Area -->
		<section id="latest-works" class="latest-works section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Latest Works</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
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
						<div class="col-md-4 col-sm-4 col-xs-12 print identity">
							<!-- Single Works -->
							<div class="single-work">
								<img src="img/pf1.jpg" alt="">
								<div class="works-hover">
									<a href="portfolio-single.html"><h4>Project Name</h4></a>
									<a class="link popup" href="img/pf1.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
									<a href="portfolio-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div>
							</div>
							<!--/ End Single Works -->
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 wordpress branding">
							<!-- Single Works -->
							<div class="single-work">
								<img src="img/pf2.jpg" alt="">
								<div class="works-hover">
									<a href="portfolio-single.html"><h4>Project Name</h4></a>
									<a class="link popup" href="img/pf2.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
									<a href="portfolio-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div>
							</div>
							<!--/ End Single Works -->
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 web">
							<!-- Single Works -->
							<div class="single-work">
								<img src="img/pf3.jpg" alt="">
								<div class="works-hover">
									<a href="portfolio-single.html"><h4>Project Name</h4></a>
									<a class="link popup" href="img/pf3.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
									<a href="portfolio-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div>
							</div>
							<!--/ End Single Works -->
						</div>
						<div class="col-md-4  col-sm-4 col-xs-12 wordpress">
							<!-- Single Works -->
							<div class="single-work">
								<img src="img/pf4.jpg" alt="#">
								<div class="works-hover">
									<a href="portfolio-single.html"><h4>Project Name</h4></a>
									<a class="link popup" href="img/pf4.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
									<a href="portfolio-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div>
							</div>
							<!--/ End Single Works -->
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 branding">
							<!-- Single Works -->
							<div class="single-work">
								<img src="img/pf5.jpg" alt="#">
								<div class="works-hover">
									<a href="portfolio-single.html"><h4>Project Name</h4></a>
									<a class="link popup" href="img/pf5.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
									<a href="portfolio-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div>
							</div>
							<!--/ End Single Works -->
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 web print">
							<!-- Single Works -->
							<div class="single-work">
								<img src="img/pf6.jpg" alt="#">
								<div class="works-hover">
									<a href="portfolio-single.html"><h4>Project Name</h4></a>
									<a class="link popup" href="img/pf6.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
									<a href="portfolio-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div>
							</div>
							<!--/ End Single Works -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="button-head">
							<div class="button">
								<span></span>
								<a href="#" class="btn">Load More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Works Area -->
		
		<!-- Testimonials -->
		<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
			<section class="bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="owl-carousel testimonial-slider">
								<div class="single-testimonial">
									<img src="img/testi-1.jpg" alt="#">
									<h2><i>What Clients  Says</i></h2>
									<p><i class="fa fa-quote-left" aria-hidden="true"></i><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore aliqua.<i class="fa fa-quote-right" aria-hidden="true"></i></i></p>
									<span> -Naimur Rahman</span>
								</div>
								<div class="single-testimonial">
									<img src="img/testi-2.jpg" alt="#">
									<h2><i>What Clients  Says</i></h2>
									<p><i class="fa fa-quote-left" aria-hidden="true"></i><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore aliqua.<i class="fa fa-quote-right" aria-hidden="true"></i></i></p>
									<span> -Rakib Hasan</span>
								</div>
								<div class="single-testimonial">
									<img src="img/testi-3.jpg" alt="#">
									<h2><i>What Clients  Says</i></h2>
									<p><i class="fa fa-quote-left" aria-hidden="true"></i><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore aliqua.<i class="fa fa-quote-right" aria-hidden="true"></i></i></p>
									<span> -Sabbir Ahmed</span>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
		<!--/ End Testimonials -->
		
		<!-- Blog -->
		<section id="blog" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>latest News</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<div class="single-news">
							<div class="news-head">
								<img src="img/blog1.jpg" alt="#">
							</div>
							<div class="news-body">
								<h3 class="date">25<span>nov</span></h3>
								<h2><a href="blog-single.html"> give us that</a></h2>
								<div class="title"><span class="user"><i class="fa fa-user" aria-hidden="true"></i>adminaccess</span> <span class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i>no comment</span></div>
								<p>Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
								<a href="blog-single.html" class="btn">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.6s">
						<div class="single-news">
							<div class="news-head">
								<img src="img/blog2.jpg" alt="#">
							</div>
							<div class="news-body">
								<h3 class="date">30<span>nov</span></h3>
								<h2><a href="blog-single.html"> consisting with technology</a></h2>
								<div class="title"><span class="user"><i class="fa fa-user" aria-hidden="true"></i>adminaccess</span> <span class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i>no comment</span></div>
								<p>Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
								<a href="blog-single.html" class="btn">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="single-news">
							<div class="news-head">
								<img src="img/blog3.jpg" alt="#">
							</div>
							<div class="news-body">
								<h3 class="date">05<span>dec</span></h3>
								<h2><a href="blog-single.html">the inline product </a></h2>
								<div class="title"><span class="user"><i class="fa fa-user" aria-hidden="true"></i>adminaccess</span> <span class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i>no comment</span></div>
								<p>Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
								<a href="blog-single.html" class="btn">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="button-head">
							<div class="button">
								<span></span>
								<a href="#" class="btn">Load More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Newslatter -->
		
		<!-- Fun Facts Area -->
		<section id="fun-facts" class="fun-facts section" data-stellar-background-ratio="0.5">
			<div class="bf-color">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
							<!-- Single Fun -->
							<div class="single-fun">
								<i class="fa fa-th-list" aria-hidden="true"></i>
								<span class="counter">3468</span>
								<p>Project Finished</p>
							</div>
							<!--/ End Single Fun -->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.6s">
							<!-- Single Fun -->
							<div class="single-fun">
								<i class="fa fa-smile-o" aria-hidden="true"></i>
								<span class="counter">468</span>
								<p>Happy Clients</p>
							</div>
							<!--/ End Single Fun -->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.8s">
							<!-- Single Fun -->
							<div class="single-fun">
								<i class="fa fa-briefcase" aria-hidden="true"></i>
								<span class="counter">4368</span>
								<p>Hourse Work</p>
							</div>
							<!--/ End Single Fun -->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="1s">
							<!-- Single Fun -->
							<div class="single-fun">
								<i class="fa fa-coffee" aria-hidden="true"></i>
								<span class="counter">3468</span>
								<p>Cups of coffes</p>
							</div>
							<!--/ End Single Fun -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Fun Facts Area -->
			
		<!-- Team -->
		<section id="team" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-title">
							<h2>our creative team</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.7s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="img/team1.png" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>naimur rahman<span>Branding</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.6s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="img/team2.png" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>rakib hassan<span>Designer</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.5s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="img/team3.png" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>afsana mimi<span>Photographer</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="img/team1.png" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>saiful abir<span>Developer</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Team -->
		
		<!-- Pricing Table -->
		<section class="p-table4 section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Pricing Table</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="title-head">
									<h2 class="title">Basic</h2>
								</div>
								<div class="price">
									<p class="amount"><span>$</span>19</p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li>Responsive( Mobile Website)</li>
								<li>24/7 Technic Support</li>
								<li>1 Year Hosting Free</li>
								<li>Image slider (Animation)</li>
								<li>Unlimited Email Account</li>
								<li>Free Domain Name</li>
							</ul>
							<div class="button-head">
								<div class="button">
									<span></span>
									<a href="#" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>buy now</a>
								</div>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="title-head">
									<h2 class="title">Medium</h2>
								</div>
								<div class="price">
									<p class="amount"><span>$</span>25</p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li>Responsive( Mobile Website)</li>
								<li>24/7 Technic Support</li>
								<li>1 Year Hosting Free</li>
								<li>Image slider (Animation)</li>
								<li>Unlimited Email Account</li>
								<li>Free Domain Name</li>
							</ul>
							<div class="button-head">
								<div class="button">
									<span></span>
									<a href="#" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>buy now</a>
								</div>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="title-head">
									<h2 class="title">Advanced</h2>
								</div>
								<div class="price">
									<p class="amount"><span>$</span>55</p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li>Responsive( Mobile Website)</li>
								<li>24/7 Technic Support</li>
								<li>1 Year Hosting Free</li>
								<li>Image slider (Animation)</li>
								<li>Unlimited Email Account</li>
								<li>Free Domain Name</li>
							</ul>
							<div class="button-head">
								<div class="button">
									<span></span>
									<a href="#" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i>buy now</a>
								</div>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>	
			</div>	
		</section>	
		<!--/ End Pricing Table -->
		
		<!-- Map -->
		<div id="gmap">
			<div id="map"></div>
		</div>
		<!-- End Map -->	
		
		<!--/ contact Area -->
		<section id="contact" class="contact section" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row">
						<div class="contact-head">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="contact-left">
									<h3>Contact <span>us now</span></h3>
									<p class="p1">Aercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.</p>
									
								</div>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="contact-right">
									<div class="row">
										<form class="form" action="#">
											<div class="col-md-6">
												<div class="form-group">
													<input name="name" type="text" placeholder="full name">
												</div>
												<div class="form-group">
													<input name="email" type="email" placeholder="enter your email">
												</div>
												<div class="button">
													<button type="submit" class="btn primary">Submit<i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<textarea name="message" placeholder="type your message"></textarea>
												</div>
												
											</div>
										</form>
									</div>
								<!--/ End Contact Form -->
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<!--/ End contact Area -->
		
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Clients Area -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer section">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="single-footer">
								<div class="logo">
									<img src="img/ruby.png" alt="#">
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  consectetur adipisicing elit, </p>
								<div class="contact">
									<p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Mirpur, dhaka-bangledesh</p>
									<p class="mail-add"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@clippinglamp.com</p>
									<p class="call"><i class="fa fa-phone-square" aria-hidden="true"></i>call:900-200-2315</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="single-footer">
								<h2><i class="fa fa-sliders" aria-hidden="true"></i>setra site map</h2>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>home</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>our shop</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>about us</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>blog</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>your account</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>our guarantee</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="single-footer">
								<h2><i class="fa fa-cogs" aria-hidden="true"></i>our company</h2>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>shipping policy</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>international shipping</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>affiliates</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>our sponsors</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>team & conditions</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>cash on delivery</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="single-footer">
								<h2>newsletter subscription</h2>
								<p>subscribe to our newsletter to get allour news in your inbox</p>
								<div class="mail">
									<input type="email" placeholder="Enter your email">
									<button class="button"><a href="#">subscribe us</a></button>
									<i class="fa fa-lock"  class="icon"></i>
									<p>Your email address is 100% safe to us</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->

			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="copyright-content">
								<p>Copyright 2018 | Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<ul class="social">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-instagram"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
@endsection