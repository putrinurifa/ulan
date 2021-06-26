@extends('layouts.master')

@section('content')
 <!-- Masthead-->
 <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Konveksi, Sablon, dan Printing</h1>
                        <hr class="divider my-4"  />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Sejak 2019</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Kenali Kami</a>
                    </div>
                </div>
            </div>
        </header >
<!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Kami Tahu Apa Yang Anda Inginkann!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Designer Clothes adalah vendor yang berdomisili di Malang. Kami mulai produksi sejak tahun 2019. Selain menerima jasa pembuatan pakaian jadi sesuai desain yang anda inginkan, kami juga menerima jasa makloon jahit, sablon dan printing.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Telusuri Layanan Kami!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Layanan Kami</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="./assets/img/icons/desain.png" class="img-icon mb-4" alt="desain">
                            <h3 class="h4 mb-2">Desain</h3>
                            <p class="text-muted mb-0">Kami bantu untuk mendesain pakian yang anda inginkan.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="./assets/img/icons/jahit.png" class="img-icon mb-4" alt="jahit">
                            <h3 class="h4 mb-2">Jahit</h3>
                            <p class="text-muted mb-0">Kami berikan potongan dan jahitan yang Anda inginkan.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="./assets/img/icons/sablon.png" class="img-icon mb-4" alt="sablon">
                            <h3 class="h4 mb-2">Sablon</h3>
                            <p class="text-muted mb-0">Kami berikan kualitas dan jenis sablon yang Anda inginkan.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <img src="./assets/img/icons/print.png" class="img-icon mb-4" alt="print">
                            <h3 class="h4 mb-2">Printing/Sublime</h3>
                            <p class="text-muted mb-0">Kami berikan jutaan pilihan warna yang Anda inginkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Desain</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Desain</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Desain</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Desain</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Desain</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Tunggu Apalagi? Hubungi Kami Sekarang Juga!</h2>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">Kontak Kami Sekarang</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Kontak</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Hubungi kami sekarang juga untuk berdiskusi terkait dengan pakaian yang akan Anda buat. Admin kami akan memberikan pelayanan terbaik untuk mewujudkan keinginan Anda.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+6285540411698</div>
                    </div>
					<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
						<i class="fab fa-whatsapp fa-3x mb-3 text-muted"></i>
                        <div><a href="https://api.whatsapp.com/send?phone=6285540411698&text=Hai%20Admin%2C%20saya%20ingin%20bertanya%20tentang%20produksi%20pakaian%20di%20Designer%20Clothes" target="_blank">+6285540411698</a></div>
						</div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:designer.clothes@gmail.com">Designer.Clothes@gmail.com</a>
                    </div>
                </div>
            </div>
        </section>

@endsection