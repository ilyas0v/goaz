<div class="header-wrapper header-transparent">
    <!-- .header.header-style01 start -->
    <header id="header"  class="header-style01">
        <!-- .container start -->
        <div class="container">
            <!-- .main-nav start -->
            <div class="main-nav">
                <!-- .row start -->
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default nav-left" role="navigation">

                            <!-- .navbar-header start -->
                            <div class="navbar-header">
                                <div class="logo">
                                    <a href="/">
                                        <img src="https://pmcdeadline2.files.wordpress.com/2016/07/logo-tv-logo.png" width="50" alt=""/>
                                    </a>
                                </div><!-- .logo end -->
                            </div><!-- .navbar-header start -->

                            <!-- MAIN NAVIGATION -->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="{{Request::is('/') ? 'current-menu-item' : '' }}">
                                        <a href="/" >Ana səhifə</a>
                                    </li>
                                    <li class="{{Request::is('haqqimizda') ? 'current-menu-item' : '' }}">
                                        <a href="/haqqimizda" >Haqqımızda</a>
                                    </li>

                                    <li class="{{Request::is('elaqe') ? 'current-menu-item' : '' }}">
                                        <a href="/elaqe" >Əlaqə</a>

                                    </li><!-- .dropdown end -->




                                    <li class="dropdown {{Request::is('servisler') ? 'current-menu-item' : '' }}">
                                        <a href="" data-toggle="dropdown" class="dropdown-toggle">Servislər</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Yük daşıma</a></li>
                                            <li><a href="#">Digər</a></li>
                                        </ul><!-- .dropdown-menu end -->
                                    </li><!-- .dropdown end -->
              <li class="{{Request::is('giris') ? 'current-menu-item' : '' }}"><a href="giris">Giriş</a></li>
              <li class="{{Request::is('qeydiyyat') ? 'current-menu-item' : '' }}"><a href="qeydiyyat">Qeydiyyat</a></li>
                                </ul><!-- .nav.navbar-nav end -->

                                <!-- RESPONSIVE MENU -->
                                <div id="dl-menu" class="dl-menuwrapper">
                                    <button class="dl-trigger">Menyu</button>

                                    <ul class="dl-menu">
                                        <li>
                                            <a href="/">Ana səhifə</a>

                                        </li>

                                        <li>
                                            <a href="/haqqimizda">Haqqımızda</a>

                                        </li>

                                        <li>
                                            <a href="/elaqe">Əlaqə</a>

                                        </li>

                                        <li>
                                            <a href="#">Servislər</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Yük daşıma</a></li>
                                                <li><a href="#">Digər</a></li>
                                            </ul><!-- .dl-submenu end -->
                                        </li>
                                        <li>
                                            <a href="/giris">Giriş</a>
                                        </li>
                                        <li>
                                            <a href="/qeydiyyat">Qeydiyyat</a>
                                        </li>
                                    </ul><!-- .dl-menu end -->
                                </div><!-- #dl-menu end -->

                                <!-- #search start -->
                                <div id="search">
                                    <form action="#" method="get">
                                        <input class="search-submit" type="submit" />
                                        <input id="m_search" name="s" type="text" placeholder="Axtarış..." />
                                    </form>
                                </div><!-- #search end -->
                            </div><!-- MAIN NAVIGATION END -->
                        </nav><!-- .navbar.navbar-default end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .main-nav end -->
        </div><!-- .container end -->
    </header><!-- .header.header-style01 -->
</div><!-- .header-wrapper.header-transparent end -->
