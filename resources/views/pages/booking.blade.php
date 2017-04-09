@extends('layouts.sub_page')

@section('content')
	<h2 class="page-title">booking</h2>

	<div class="row">
		<div class="col-sm-8">
			<article class="entry">
				<form class="booking" action="">

					<div class="row">
						<div class="col-md-6">
							<input type="text" name="ci_name" id="ci_name" placeholder="your name">
						</div>

						<div class="col-md-6">
							<input type="email" name="ci_email" id="ci_email" class="datepicker" placeholder="your email">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<input type="text" name="arrive" id="arrive" class="datepicker" placeholder="arrival">
						</div>

						<div class="col-md-6">
							<input type="text" name="depart" id="depart" class="datepicker" placeholder="departure">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<select name="adults" id="adults" class="dk">
								<option selected disabled>adults</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>

						<div class="col-md-6">
							<select name="children" id="children" class="dk">
								<option selected disabled>children</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<select name="room" id="room" class="dk">
								<option selected disabled>room</option>
								<option value="1">Single</option>
								<option value="2">Deluxe Double</option>
								<option value="3">Suite I</option>
								<option value="4">Suite II</option>
								<option value="5">King's Suite</option>
							</select>

							<textarea name="comments" id="ci_comments" cols="30" rows="10" placeholder="comments"></textarea>

							<button type="submit">submit</button>
						</div>
					</div>
				</form>
			</article>
		</div>

		<div class="col-sm-4">
			<div class="sidebar">

				<div class="widget widget_ci_testimonial_widget">
					<div class="testimonial-wrap">
						<div class="testimonial-inner">
							<blockquote>

								<i class="fa fa-quote-left"></i>
								<p>The best experience ever. Would recommended it everyone. We got married in Havana, and stayed at Casa Miramara, and it was a dream come true.</p>

								<cite>Peter Daniel &ndash; Travel Magazine</cite>
							</blockquote>
						</div>
					</div>
				</div>


				<aside class="widget widget_ci_social_widget ci-socials group">
					<h3 class="widget-title">social</h3>
					<a href="#" class="social-icon" title="Subscribe to our RSS feed."><i class="fa fa-rss"></i></a>
					<a href="http://www.twitter.com/3cky" class="social-icon" title="Follow us on twitter."><i class="fa fa-twitter"></i></a>
					<a href="http://www.facebook.com/Miramar-casa-1669965826629167/?fref=ts&ref=br_tf" class="social-icon" title="Like us on Facebook."><i class="fa fa-facebook"></i></a>
					<a href="http://www.dribbble.com/tsiger" class="social-icon" title="See our Dribbble shots."><i class="fa fa-dribbble"></i></a>
				</aside>


				<div class="widget widget_ci_newsletter_widget">
					<h3 class="widget-title">newsletter</h3>

					<p>Get explosive offers straight to your inbox and win a free weekend stay!</p>
					<form class="ci-newsletter" action="/">
						<input type="email" name="ci_newsletter_email" id="ci_newsletter_email" placeholder="your email">
						<button type="submit"><i class="fa fa-chevron-right"></i></button>
					</form>
				</div>

			</div>
		</div>
	</div>
@endsection