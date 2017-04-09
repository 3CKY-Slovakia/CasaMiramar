@extends('layouts.sub_page')

@section('content')
    <h2 class="page-title">contact</h2>
    <div class="map-wrap">
        <div id="map"></div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <article class="entry">
                <div class="entry-content">

                    <div class="contact-form">
                        <div id="done" style="display:none;"><div class="wrap"><h3>Thank you for your message! We'll get back to you as soon as possible!</h3></div></div>

                        <form id="cform" class="contact" action="contact.php">
                            <p>
                                <label for="name">Your Name:</label>
                                <input type="text" id="name" name="name"/>
                            </p>

                            <p>
                                <label for="email">Your Email:</label>
                                <input type="email" id="email" name="email"/>
                            </p>

                            <p>
                                <label for="subject">Subject:</label>
                                <input type="text" id="subject" name="subject"/>
                            </p>

                            <p>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            </p>

                            <p><input id="contact-submit" type="submit" value="Send" class="button"/></p>
                        </form>
                    </div>

                </div>
            </article>
        </div>

        <div class="col-sm-4">
            <div class="sidebar">

                <div class="widget widget_ci_special_offer_widget">
                    <h3 class="widget-title">special offer</h3>
                    <div class="item">
                        <figure class="item-thumb">
                            <a href="{{ url('booking') }}">
                                <img src='{{ asset('images/Offers/2.jpg') }}' width='750' height='930' alt='Placeholder Image' />
                            </a>
                        </figure>

                        <div class="item-content">
                            <h4>Our wedding suite. 50% off. May 5th.</h4>
                            <a class="item-title btn" href="{{ url('booking') }}">book now.</a>
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

            </div>
        </div>
    </div>
@endsection