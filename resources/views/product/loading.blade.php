<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Loading Administrator | SISTEM PAKAR.</title>
    <!-- CSS files -->
    <link href="assets/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        .navbar-brand img {
            width: 600px;
            /* Perbesar gambar */
            height: auto;
            /* Perbesar gambar */
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="assets/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-slim py-2">
            <div class="text-center">
                {{-- <div class="mb-2">
                    <lottie-player src="https://lottie.host/080e410e-d727-4f13-8823-393a5620b093/eV5Y7WHYxX.json"
                        background="transparent" speed="1" style="width: 270px; height: 270px;" loop autoplay>
                    </lottie-player>

                </div> --}}
                <div class="mb-3">
                    <a href="." class="navbar-brand navbar-brand-autodark">
                        <img src="assets/static/me.jpg" alt="Logo">
                    </a>
                </div>
                <div class="text-secondary mb-3"><b>Sedang proses masuk ke halaman Administrator</b></div>
                <div class="progress progress-sm">
                    <div class="progress-bar progress-bar-indeterminate"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="assets/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="assets/dist/js/demo.min.js?1692870487" defer></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


    <script>
        setTimeout(function() {
            window.location.href = "{{ route('dashboard') }}";
        }, 5000); // Redirect after 3 seconds (adjust as needed)
    </script>

</body>

</html>
