@extends('layouts.landing.main')
@section('content')
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mr-auto text-center text-lg-left">
                    <h1 class="heading mb-3">SISTEM PAKAR.</h1>
                    <p class="mb-5">Sistem Pakar untuk Mendiagnosa Gejala Penyakit Demam Berdarah Menggunakan Metode
                        Forward Chaining Dan Certainty Faktor</p>
                    <p class="mb-4"><a href="/mulai_diagnosa" class="btn btn-primary">Mulai Diagnosa</a></p>

                </div>
                <div class="col-lg-6">
                    <figure class="illustration">
                        <img src="landing/images/illustration.png" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>


    <!-- MAIN -->

    {{-- <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-7 text-center mx-auto">
                    <h2 class="section-heading">Statistics</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, voluptate!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="data">
                        <span class="icon text-primary">
                            <span class="flaticon-virus"></span>
                        </span>
                        <strong class="d-block number">{{ $totalPenyakit }}</strong>
                        <span class="label">Data Penyakit</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
                        <span class="icon text-primary">
                            <span class="flaticon-virus"></span>
                        </span>
                        <strong class="d-block number">{{ $totalGejala }}</strong>
                        <span class="label">Data Gejala</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
                        <span class="icon text-primary">
                            <span class="flaticon-virus"></span>
                        </span>
                        <strong class="d-block number">{{ $totalRelasi }}</strong>
                        <span class="label">Data Relasi</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}




    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <figure class="img-play-vid">
                        <img src="landing/images/hero_1.jpg" alt="Image" class="img-fluid">
                        <div class="absolute-block d-flex">
                            <span class="text">Watch the Video</span>
                            <a href="https://www.youtube.com/watch?v=9pVy8sRC440" data-fancybox class="btn-play">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="mb-4 section-heading">What is Coronavirus?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi
                        numquam!</p>
                    <ul class="list-check list-unstyled mb-5">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Unde doloremque</li>
                    </ul>
                    <p><a href="#" class="btn btn-primary">Learn more</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-protection"></span>
                    </div>
                    <div>
                        <h3>Protection</h3>
                        <span class="d-block">Lorem ipsum dolor sit.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-patient"></span>
                    </div>
                    <div>
                        <h3>Prevention</h3>
                        <span class="d-block">Lorem ipsum dolor sit.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-hand-sanitizer"></span>
                    </div>
                    <div>
                        <h3>Treatments</h3>
                        <span class="d-block">Lorem ipsum dolor sit.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-virus"></span>
                    </div>
                    <div>
                        <h3>Symptoms</h3>
                        <span class="d-block">Lorem ipsum dolor sit.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-primary-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-6 col-lg-6 mt-lg-5">
                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-stay-at-home"></span>
                                </div>
                                <div class="body">
                                    <h3>Stay at home</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>

                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-patient"></span>
                                </div>
                                <div class="body">
                                    <h3>Wear facemask</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-social-distancing"></span>
                                </div>
                                <div class="body">
                                    <h3>Keep social distancing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>

                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-hand-washing"></span>
                                </div>
                                <div class="body">
                                    <h3>Wash your hands</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-heading mb-4">How to Prevent Coronavirus?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis doloribus
                        consequatur fugit voluptatum ex rerum perspiciatis cupiditate, esse hic!</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, error!
                    </p>

                    <ul class="list-check list-unstyled mb-5">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Unde doloremque</li>
                    </ul>

                    <p><a href="#" class="btn btn-primary">Read more about prevention</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-primary-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="mb-4 section-heading">Symptoms of Coronavirus</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi
                        numquam!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="landing/images/symptom_high-fever.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>High Fever</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ipsum repellendus
                                animi modi iure provident, cupiditate perferendis voluptatem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="landing/images/symptom_cough.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>Cough</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ullam illo laborum
                                repellendus vel esse dolor, sunt exercitationem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="landing/images/symptom_sore-troath.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>Sore Troath</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum esse voluptatum, vel
                                inventore at! Ullam, libero reiciendis amet?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="landing/images/symptom_headache.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>Headache</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem voluptatem
                                ratione veniam rerum qui quibusdam reprehenderit quis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <div class="note row">

                        <div class="col-lg-8 mb-4 mb-lg-0"><strong>Stay at home and call your doctor:</strong>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, eaque.</div>
                        <div class="col-lg-4 text-lg-right">
                            <a href="#" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Help
                                line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
