@include('layouts.landing.head')

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    @include('layouts.landing.header')
    @yield('content')
    @include('layouts.landing.footer')

    @include('layouts.landing.script')


</body>

</html>
