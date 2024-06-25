@include('shared.head')

<body>
    <script src="assets/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <div class="page" id="focusArea" onmousemove="getPos(event)"
            onmouseout="startTimerWhenStopped(60 * 15, $('#timer'))" onmouseover="stopTimerWhenMoving()">
            <!-- Sidebar -->
            @include('shared.sidebar')
            <!-- Navbar -->
            @include('shared.navbar')
            <div class="page-wrapper">
                <!-- Page header -->
                @yield('content')
                @include('shared.footer')
            </div>
        </div>
    </div>
    @include('shared.script')
</body>

</html>
