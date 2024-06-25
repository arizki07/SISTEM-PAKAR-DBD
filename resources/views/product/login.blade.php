<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign in with illustration - Tabler - Premium and Open Source dashboard template with responsive and high
        quality UI.</title>
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
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4">
                            <h1>Sispak-Sapi</h1>
                            <h5>Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode Forward
                                Chaining Dan Certainty Faktor</i></h5>
                        </div>
                        <div class="card card-md">
                            <div class="card-body">
                                <h2 class="h2 text-center mb-4">Login to your account</h2>
                                <form action="{{ route('post.login') }}" method="post" name="handleAjax"
                                    id="handleAjax">
                                    @csrf
                                    {{-- Error Alert --}}
                                    <div id="errors-list"></div>

                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="Masukkan username" autofocus value="{{ old('username') }}" />
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Masukkan password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" id="submitLogin"
                                            class="btn btn-blue w-100">Login</button>
                                    </div>
                                </form>

                            </div>
                            {{-- <div class="hr-text">or</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col"><a href="#" class="btn w-100">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                            </svg>
                                            Login with Github
                                        </a></div>
                                    <div class="col"><a href="#" class="btn w-100">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-twitter"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                                            </svg>
                                            Login with Twitter
                                        </a></div>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <div class="text-center text-secondary mt-3">
                            Don't have account yet? <a href="assets/sign-up.html" tabindex="-1">Sign up</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img src="assets/static/illustrations/undraw_secure_login_pdn4.svg" height="300"
                        class="d-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="assets/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="assets/dist/js/demo.min.js?1692870487" defer></script>
    <script src="{{ asset('assets/extentions/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/extentions/jquery.validate.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $("#handleAjax").validate({
                rules: {
                    username: {
                        required: true,
                        username: true
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    username: {
                        required: "Username tidak boleh kosong",
                        username: "Format username tidak valid"
                    },
                    password: {
                        required: "Password tidak boleh kosong",
                    },
                },

                submitHandler: function(form) {
                    $('#submitLogin').html(
                        '<i class="fa-solid fa-fw fa-spinner fa-spin"></i> Redirect to Dashboard, Please Wait...'
                    );
                    $("#submitLogin").attr("disabled", true);

                    $.ajax({
                        url: $(form).attr('action'),
                        data: $(form).serialize(),
                        type: "POST",

                        success: function(response) {
                            if (response.includes('dashboard')) {
                                window.location.href = response;
                            } else {
                                $('#errors-list').html('<div class="alert alert-danger">' +
                                    response + '</div>');
                            }
                        },
                        error: function(xhr, status, error) {
                            $('#errors-list').html(
                                '<div class="alert alert-danger">Terjadi kesalahan saat melakukan login. Silakan coba lagi nanti.</div>'
                            );
                        },
                        complete: function() {
                            // Reset tombol login setelah AJAX selesai
                            $('#submitLogin').html('Login');
                            $("#submitLogin").attr("disabled", false);
                        }
                    });
                }
            });

        });
    </script>

</body>

</html>
