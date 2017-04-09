@extends('layouts.sub_page')

@section('content')
    <h2 class="page-title">Kings Double Deluxe</h2>


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

    <div class="room-slider flexslider">
        <ul class="slides">
            <li>
                <a data-rel="prettyPhoto[gal]" href="{{ asset('images/Room/7.JPG') }}"><img src='{{ asset('images/Room/7-t.JPG') }}' width='925' height='465' alt='Placeholder Image' /></a>
            </li>
            <li>
                <a data-rel="prettyPhoto[gal]" href="{{ asset('images/Room/1.JPG') }}"><img src='{{ asset('images/Room/1-t.JPG') }}' width='925' height='465' alt='Placeholder Image' /></a>
            </li>
            <li>
                <a data-rel="prettyPhoto[gal]" href="{{ asset('images/Room/2.JPG') }}"><img src='{{ asset('images/Room/2-t.JPG') }}' width='925' height='465' alt='Placeholder Image' /></a>
            </li>
            <li>
                <a data-rel="prettyPhoto[gal]" href="{{ asset('images/Room/3.JPG') }}"><img src='{{ asset('images/Room/3-t.JPG') }}' width='925' height='465' alt='Placeholder Image' /></a>
            </li>
            <li>
                <a data-rel="prettyPhoto[gal]" href="{{ asset('images/Room/4.JPG') }}"><img src='{{ asset('images/Room/4-t.JPG') }}' width='925' height='465' alt='Placeholder Image' /></a>
            </li>
            <li>
                <a data-rel="prettyPhoto[gal]" href="{{ asset('images/Room/5.JPG') }}"><img src='{{ asset('images/Room/5-t.JPG') }}' width='925' height='465' alt='Placeholder Image' /></a>
            </li>
            <li>
                <a data-rel="prettyPhoto[gal]" href="{{ asset('images/Room/6.JPG') }}"><img src='{{ asset('images/Room/6-t.JPG') }}' width='925' height='465' alt='Placeholder Image' /></a>
            </li>
            <li>
                <a data-rel="prettyPhoto[gal]" href="{{ asset('images/Room/8.JPG') }}"><img src='{{ asset('images/Room/8-t.JPG') }}' width='925' height='465' alt='Placeholder Image' /></a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <article class="entry">
                <div class="entry-content">
                    <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores culpa debitis distinctio dolor fugiat, ipsam, laudantium libero mollitia omnis praesentium quia rem.</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda fuga illo laudantium magni sed temporibus. Amet atque aut autem consectetur consequuntur dolorum enim error hic inventore molestiae nisi nostrum numquam optio perspiciatis provident, quae quam quisquam quo similique suscipit veniam veritatis vero. Ab culpa cumque deleniti est explicabo facilis, ipsa itaque magni non officiis placeat provident quidem ratione recusandae reiciendis repellat, repudiandae tempora unde voluptates voluptatibus. Ab aliquid, blanditiis debitis eos eveniet ex incidunt itaque, labore maxime mollitia natus perspiciatis porro provident quidem quis reprehenderit rerum suscipit totam ullam voluptatum.</p>
                    <h2>H2 Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ea, eligendi excepturi nemo praesentium sapiente soluta tempore ullam. Architecto consequuntur culpa debitis error explicabo libero perferendis quisquam quo, rem sint tempora vero!</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque exercitationem harum laudantium maiores officia provident quaerat tempore tenetur voluptatibus! Adipisci deleniti, ipsum itaque modi neque obcaecati perspiciatis praesentium quos recusandae repellat! Aliquid at dicta dolore eius eos et, illum impedit ipsum libero magni modi nihil odit provident quidem rerum sed totam ullam unde voluptatibus voluptatum!</p>

                    <h3>H3 Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, cupiditate earum, eius et facere facilis impedit labore natus non perspiciatis quaerat ratione reiciendis repudiandae sapiente sed tempora vero? Accusamus accusantium adipisci unde voluptatem! Iste, sapiente voluptas? Animi dolores ex quia quis quos?</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, fugiat inventore labore porro sed sint voluptas voluptatum! Aut dignissimos dolore enim iusto magnam maxime modi nesciunt quisquam reprehenderit sint? Animi at doloremque eveniet explicabo fugiat, impedit in incidunt inventore ipsam iure nobis officiis optio, quos ratione repellendus sapiente voluptas! A doloribus fuga maiores nisi nobis.</p>

                </div>

            </article>
        </div>

        <div class="col-sm-4">
            <div class="sidebar">
                <ul class="room-nav">
                    <li><a href="" class="current-room">Room Name I</a></li>
                    <li><a href="">Room Name II</a></li>
                    <li><a href="">Room Name III</a></li>
                    <li><a href="">Room Name IV</a></li>
                </ul>

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