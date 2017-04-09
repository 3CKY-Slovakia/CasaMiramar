<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row pre-head">
                    <div class="col-sm-6">
                        <div id="weather">
                            <i class="ywicon"></i>
                            <span id="ywloc"></span>
                            <span id="ywtem"></span>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <aside id="icl_lang_sel_widget" class="widget icl_languages_selector group"><h3 class="widget-title">Languages</h3><div id="lang_sel">
                                <ul>
                                    <li>
                                        <a href="#" class="lang_sel_sel icl-en">

                                            <img class="iclflag" src="images/flags/en.png" alt="en" title="English">
                                            &nbsp;English</a>
                                        <ul>
                                            <li class="icl-fr">
                                                <a href="http://www.3cky.com/preview/santorini/fr/">
                                                    <img class="iclflag" src="images/flags/fr.png" alt="fr" title="Français">&nbsp;
                                                    Français
                                                </a>
                                            </li>
                                            <li class="icl-de">
                                                <a href="http://www.3cky.com/preview/santorini/de/">
                                                    <img class="iclflag" src="images/flags/de.png" alt="de" title="Deutsch">&nbsp;
                                                    Deutsch
                                                </a>
                                            </li>
                                            <li class="icl-it">
                                                <a href="http://www.3cky.com/preview/santorini/it/">
                                                    <img class="iclflag" src="images/flags/it.png" alt="it" title="Italiano">&nbsp;
                                                    Italiano
                                                </a>
                                            </li>
                                            <li class="icl-ru">
                                                <a href="http://www.3cky.com/preview/santorini/ru/">
                                                    <img class="iclflag" src="images/flags/ru.png" alt="ru" title="Русский">&nbsp;
                                                    Русский
                                                </a>
                                            </li>
                                            <li class="icl-es">
                                                <a href="http://www.3cky.com/preview/santorini/es/">
                                                    <img class="iclflag" src="images/flags/es.png" alt="es" title="Español">&nbsp;
                                                    Español
                                                </a>
                                            </li>
                                            <li class="icl-el">
                                                <a href="http://www.3cky.com/preview/santorini/el/">
                                                    <img class="iclflag" src="images/flags/el.png" alt="el" title="Ελληνικα">&nbsp;
                                                    Ελληνικα
                                                </a>
                                            </li>
                                        </ul>

                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div> <!-- .row.pre-head -->
                <hr/>

                <nav class="nav row">
                    <div class="col-sm-5">
                        <ul class="navigation left-nav">
                            <li style="width: 120px"></li>
                            <li class='current'><a class='current' href="{{ url('/') }}">Home</a></li>
                            {{--<li><a href="index_alt.html">Home 2</a></li>--}}
                            <li><a href="{{ url('room') }}">Rooms</a>
                                <ul>
                                    <li><a href="{{ url('room') }}">Single</a></li>
                                    <li><a href="{{ url('room') }}">Double De Luxe</a></li>
                                    <li><a href="{{ url('room') }}">Suite I</a></li>
                                    <li><a href="{{ url('room') }}">Suite II</a></li>
                                    <li><a href="{{ url('room') }}">King's Suite</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('booking') }}">Booking</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-2">
                        <h1 class="logo"><a class='current' href="{{ url('/') }}"><img src="images/dummy/logo_white.png" alt=""></a></h1>
                    </div>

                    <div class="col-sm-5">
                        <ul class="navigation right-nav">
                                <ul>
                                    <li><a href="">Sub Item</a></li>
                                    <li><a href="">Multi Level</a>
                                        <ul>
                                            <li><a href="">Another level</a></li>
                                            <li><a href="">Another level</a></li>
                                            <li><a href="">Another level</a></li>
                                            <li><a href="">Another level</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Sub Item</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('gallery') }}">Galleries</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li style="width: 150px"></li>
                        </ul>
                    </div>
                </nav>

                <div id="mobilemenu">
                    <ul>
                        <li class='current'><a class='current' href="{{ url('/') }}">Home</a></li>
                        {{--<li><a href="index_alt.html">Home 2</a></li>--}}
                        <li><a href="{{ url('room') }}">Listing</a></li>
                        <li><a href="{{ url('room') }}">Listing 4 Columns</a></li>
                        <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="">Sub Item</a></li>
                                <li><a href="">Sub Item</a></li>
                                <li><a href="">Sub Item Longer</a></li>
                                <li><a href="">Sub Item</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('booking') }}">Booking Page</a></li>
                        <li><a href="gallery-single.html">Galleries</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div> <!-- main container -->
        </div>
    </div>
</header>