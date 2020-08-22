		<!-- Footer Area -->
		<footer id="footer" class="footer section">
		    <!-- Footer Top -->
		    <div class="footer-top" style="background-color: white;">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-3 col-sm-3 col-xs-12">
		                    <div class="single-footer">
		                        <div class="logo">
		                            <img width="100%" height="100%" src="{{ asset('img/Black_tecktonet_logo.png')}}"
		                                alt="logo">
		                        </div>
		                        <p>Let me help you build a website that you can be proud of.</p>
		                        <div class="contact">
		                            <p class="mail-add"><i class="fas fa-envelope"
		                                    aria-hidden="true"></i>Thomas.Bockhorn@tecktonet.com</p>
		                            <p class="call"><i class="fa fa-phone-square" aria-hidden="true"></i>call:256.679.6197</p>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-3 col-xs-12">
		                    <div class="single-footer">
		                        <h2><i class="fa fa-sliders" aria-hidden="true"></i>site map</h2>
		                        <span><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#top">home</a></span>
		                        <span><i class="fa fa-caret-right" aria-hidden="true"></i><a
		                                href="#Services">services</a></span>
		                        <span><i class="fa fa-caret-right" aria-hidden="true"></i><a
		                                href="#latest-works">portfolio</a></span>
		                        <span><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#blog">blog</a></span>
		                        <span><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#team">about me</a></span>
		                        <span><i class="fa fa-caret-right" aria-hidden="true"></i><a
		                                href="#contact">contact</a></span>
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-3 col-xs-12">
		                    <div class="single-footer">
		                        <h2><i class="fa fa-cogs" aria-hidden="true"></i>Tecktonet.com</h2>
		                        <!--<span><i class="fa fa-caret-right" aria-hidden="true"></i>shipping policy</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>international shipping</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>affiliates</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>our sponsors</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>team & conditions</span>
								<span><i class="fa fa-caret-right" aria-hidden="true"></i>cash on delivery</span>-->
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-3 col-xs-12">
		                    <div class="single-footer">
		                        <h2>newsletter subscription</h2>
		                        <p>subscribe to our newsletter to get all our news in your inbox</p>
		                        <div class="mail">
		                            <form action="subscription" method="post">
		                                @csrf
		                                @honeypot
		                                <input type="email" name="email" placeholder="Enter your email">
		                                <button type="submit" class="button">Subscribe</button>
		                                <i class="fa fa-lock" class="icon"></i>
		                                <p>Your email address is 100% safe</p>
		                            </form>
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
		                        <!--<p>Copyright 2018 | Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>-->
		                    </div>
		                </div>
		                <div class="col-md-6 col-sm-6 col-xs-12">
		                    <ul class="social">
		                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
		                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
		                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
		                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		    <!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->