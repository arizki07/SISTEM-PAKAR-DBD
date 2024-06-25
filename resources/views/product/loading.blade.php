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
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="assets/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-slim py-4">
            <div class="text-center">
                <div class="mb-3">
                    <lottie-player src="https://lottie.host/080e410e-d727-4f13-8823-393a5620b093/eV5Y7WHYxX.json"
                        background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay>
                    </lottie-player>

                </div>

                <div class="text-secondary mb-3">Sedang proses masuk ke halaman Administrator</div>
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
