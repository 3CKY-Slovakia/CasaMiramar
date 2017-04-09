<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <hr>

                <nav class="nav row">
                    <div class="col-sm-5">
                        <ul class="navigation left-nav">
                            <li style="width: 120px"></li>
                            <li class='current'><a class='current' href="{{ url('/') }}">Home</a></li>
                            <li><a href="listing-3col.html">Rooms</a></li>
                            <li><a href="{{ url('booking') }}">Booking</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-2">
                        <div class="logo"><a class='current' href="{{ url('/') }}"><img src="images/dummy/logo_grey.png" alt=""></a></div>
                    </div>

                    <div class="col-sm-5">
                        <ul class="navigation right-nav">
                            <li><a href="{{ url('gallery') }}">Galleries</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li style="width: 180px"></li>
                        </ul>
                    </div>
                </nav>

                <p class="credits">Developed by 3CKYSOFT</p>
            </div>
        </div>
    </div>
</footer>