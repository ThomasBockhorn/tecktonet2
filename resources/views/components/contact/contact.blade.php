<!--/ contact Area -->
<section id="contact" class="contact section" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row">
						<div class="contact-head">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="contact-left">
									<h3>Contact <span>me now</span></h3>
									<p class="p1">Thank you for your interest!  Tecktonet.com is here to help you with your digital presence.  Let's create a website that you can be proud of!.</p>
									<p>If you are interested, let's discuss how I can help you build a website that will help you achieve your goals.</p>
									
								</div>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="contact-right">
									<div class="row">
										<form class="form" action="contact" method="post">
											@csrf
											@honeypot
											<div class="col-md-6">
												<div class="form-group">
													<input name="fullname" type="text" placeholder="full name">
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