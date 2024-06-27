<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <div class="mb-0 site-logo"><a href="/" class="mb-0">Sistem Pakar<span
                                class="text-primary">.</span> </a></div>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="/" class="nav-link">Home</a></li>
                            <li><a href="{{ url('about') }}" class="nav-link">About</a></li>
                            <li><a href="contact.html" class="nav-link">Contact</a></li>
                            <li><a href="{{ url('login') }}" class="nav-link">Login</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                            class="icon-menu h3 text-black"></span></a></div>

            </div>
        </div>

    </header>
