@extends('template.frontend')
@section('content')
<!-- Banner Area Start -->
<div class="banner__two swiper banner-two-slider">
    <div class="swiper-wrapper">
        <div class="banner__two-image swiper-slide" data-background="frontend/assets/img/banner/back.beranda.jpg">				
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner__two-content">
                            {{-- <b class="subtitle">Conbix</b> --}}
                            <span data-animation="fadeInUp" data-delay=".3s">Selamat Datang di</span>
                            <h1 data-animation="fadeInUp" data-delay=".7s">Jurusan Teknik Elektro dan Teknik Informatika</h1>
                            {{-- <div class="banner__two-content-button" data-animation="fadeInUp" data-delay="1s">
                                <a class="btn-five" href="project-three.html">Let's Recent Works<i class="far fa-chevron-double-right"></i></a>
                            </div> --}}
                            <img class="banner__two-image-shape-one" src="frontend/assets/img/shape/banner-1.png" data-animation="rollIn" data-delay="2s" alt="">
                        </div>
                        <img class="banner__two-image-shape-two" src="frontend/assets/img/shape/banner-2.png" data-animation="fadeInRightBig" data-delay="1.1s" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__two-image swiper-slide" data-background="frontend/assets/img/banner/back.beranda.jpg">				
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner__two-content">
                            {{-- <b class="subtitle">Conbix</b> --}}
                            <span data-animation="fadeInUp" data-delay=".3s">selamat datang di</span>
                            <h1 data-animation="fadeInUp" data-delay=".7s">jurusan teknik elektro dan teknik informatika</h1>
                            {{-- <div class="banner__two-content-button" data-animation="fadeInUp" data-delay="1s">
                                <a class="btn-five" href="project-three.html">Let's Recent Works<i class="far fa-chevron-double-right"></i></a>
                            </div> --}}
                            <img class="banner__two-image-shape-one" src="frontend/assets/img/shape/banner-1.png" data-animation="rollIn" data-delay="2s" alt="">
                        </div>
                        <img class="banner__two-image-shape-two" src="frontend/assets/img/shape/banner-2.png" data-animation="fadeInRightBig" data-delay="1.1s" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner__two-arrow">
        <div class="banner__two-arrow-prev swiper-button-prev"><i class="fal fa-long-arrow-left"></i></div>
        <div class="banner__two-arrow-next swiper-button-next"><i class="fal fa-long-arrow-right"></i></div>
    </div>		
</div>
<!-- Banner Area End --> 
<!-- Consulting Area Start -->
<div class="consulting__area section-padding" style="padding-top: 50px; padding-bottom: 50px;">
    <img class="consulting__area-shape dark-n" src="frontend/assets/img/shape/consulting.png" alt="">
    <img class="consulting__area-shape light-n" src="frontend/assets/img/shape/consulting-dark.png" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 lg-mb-30">
                <div class="consulting__area-image dark__image">
                    <img src="frontend/assets/img/beranda/logo-ti1.png" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="consulting__area-right">
                    <div class="consulting__area-right-title">
                        <span class="subtitle-two">Program Studi</span>
                        <h2>D3 Teknologi Informasi</h2>
                        <p>Lulusan program studi Teknologi Informasi Politeknik Negeri Ketapang dibekali dengan pengetahuan teoritis dan pengalaman praktek sehingga siap masuk ke dunia kerja. Lulusan dikategorikan sebagai Informatic-workers yaitu profesional yang bekerja dibidang informatika atau bidang lain yang berbasis teknologi informatika sebagai operator, programmer, atau analis dan designer.</p>
                    </div>
                    <div class="banner__one-content-button" data-animation="fadeInUp" data-delay="1s">
                        <div class="consulting__area-right-list">
                            <span><i class="far fa-check"></i>Jenjang Diploma Tiga</span>
                            <span><i class="far fa-check"></i>Gelar : A.Md.Kom</span>
                        </div>
                        <div class="banner__one-content-video-icon" style="margin-left: 30px;margin-top: 7px;">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=PVEsqGrSa4E"><i class="fas fa-play"></i></a>										
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 10px; ">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="consulting__area-right">
                    <div class="consulting__area-right-title">
                        <span class="subtitle-two">Program Studi</span>
                        <h2>D3 Teknologi Listrik</h2>
                        <p>Lulusan program studi Teknologi Listrik Politeknik Negeri Ketapang dibekali dengan pengetahuan teoritis dan pengalaman praktik yang mendalam sehingga siap terjun ke dunia kerja. Lulusan dikategorikan sebagai Electrical Technicians, yaitu profesional yang bekerja di bidang kelistrikan atau bidang lain yang berbasis teknologi listrik sebagai teknisi, pengawas instalasi listrik, atau perancang sistem kelistrikan.</p>
                    </div>
								<div class="banner__one-content-button" data-animation="fadeInUp" data-delay="1s">
                                    <div class="consulting__area-right-list">
                                        <span><i class="far fa-check"></i>Jenjang Diploma Tiga</span>
                                        <span><i class="far fa-check"></i>Gelar : A.Md.Kom</span>
                                    </div>
									<div class="banner__one-content-video-icon" style="margin-left: 30px;margin-top: 7px;">
										<a class="video-popup" href="https://www.youtube.com/watch?v=85lFM80NKys"><i class="fas fa-play"></i></a>										
									</div> 
								</div>
                    {{-- <a class="btn-six" href="contact.html">Contact Us<i class="far fa-chevron-double-right"></i></a> --}}
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 lg-mb-30">
                <div class="consulting__area-image dark__image">
                    <img src="frontend/assets/img/beranda/foto-te.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Consulting Area End -->
<!-- Portfolio Area Start -->
<div class="portfolio__area dark__image section-padding pb-0" style="padding-top: 0;">
    <div class="container-fluid p-0">
        <div class="row mb-60">
            <div class="col-xl-12">
                <div class="portfolio__area-title t-center">
                    <span class="subtitle-one">Kegiatan Mahasiswa</span>
                    <h2>Jurusan Teknik Elektro dan Teknik Informatika</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="swiper portfolio__area-slider">
                    <div class="swiper-wrapper">
                        <div class="portfolio__area-item swiper-slide">
                            <img src="frontend/assets/img/portfolio/portfolio-1.jpg" alt="">
                            <div class="portfolio__area-item-content">
                                <div class="portfolio__area-item-content-title">
                                    <h4><a href="project-single.html">Business strategy</a></h4>
                                    <span class="text-eight">Conbix Agency</span>
                                </div>
                                <div class="portfolio__area-item-content-icon">
                                    <a href="project-single.html"><img src="frontend/assets/img/icon/up-arrow.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__area-item swiper-slide">
                            <img src="frontend/assets/img/portfolio/portfolio-2.jpg" alt="">
                            <div class="portfolio__area-item-content">
                                <div class="portfolio__area-item-content-title">
                                    <h4><a href="project-single.html">Digital Consulting</a></h4>
                                    <span class="text-eight">Conbix Agency</span>
                                </div>
                                <div class="portfolio__area-item-content-icon">
                                    <a href="project-single.html"><img src="frontend/assets/img/icon/up-arrow.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__area-item swiper-slide">
                            <img src="frontend/assets/img/portfolio/portfolio-3.jpg" alt="">
                            <div class="portfolio__area-item-content">
                                <div class="portfolio__area-item-content-title">
                                    <h4><a href="project-single.html">Human Resource</a></h4>
                                    <span class="text-eight">Conbix Agency</span>
                                </div>
                                <div class="portfolio__area-item-content-icon">
                                    <a href="project-single.html"><img src="frontend/assets/img/icon/up-arrow.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__area-item swiper-slide">
                            <img src="frontend/assets/img/portfolio/portfolio-4.jpg" alt="">
                            <div class="portfolio__area-item-content">
                                <div class="portfolio__area-item-content-title">
                                    <h4><a href="project-single.html">Business Consulting</a></h4>
                                    <span class="text-eight">Conbix Agency</span>
                                </div>
                                <div class="portfolio__area-item-content-icon">
                                    <a href="project-single.html"><img src="frontend/assets/img/icon/up-arrow.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Area End -->
<!-- Blog Area Start -->
<div class="blog__one dark__image section-padding">
    <div class="container">
        <div class="row align-items-end mb-70">
            <div class="col-xl-7 col-lg-8 lg-mb-30">
                <div class="blog__one-title lg-t-center">
                    <span class="subtitle-one">Berita</span>
                    <h2>Jurusan Teknik Elektro dan Teknik Informatika</h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4 t-right lg-t-center">
                <a class="btn-two" href="berita">selengkapnya<i class="far fa-chevron-double-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 xl-mb-30">
                <div class="blog__one-item">
                    <div class="blog__one-item-image">
                        <a href="detail_berita"><img src="frontend/assets/img/blog/blog-1.jpg" alt=""></a>
                        <div class="blog__one-item-image-date">
                            <span class="text-three">23</span>
                            <span class="text-five">Dec</span>
                        </div>
                    </div>
                    <div class="blog__one-item-content">
                        <h4><a href="detail_berita">When a small business is just starting out,</a></h4>
                        <p>Experts say some good first steps in starting business are researching</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 lg-mb-30">
                <div class="blog__one-item">
                    <div class="blog__one-item-image">
                        <a href="detail_berita"><img src="frontend/assets/img/blog/blog-2.jpg" alt=""></a>
                        <div class="blog__one-item-image-date">
                            <span class="text-three">20</span>
                            <span class="text-five">Dec</span>
                        </div>
                    </div>
                    <div class="blog__one-item-content">
                        <h4><a href="detail_berita">Finances and accounting are one of the hardest</a></h4>
                        <p>Experts say some good first steps in starting business are researching</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="blog__one-item">
                    <div class="blog__one-item-image">
                        <a href="detail_berita"><img src="frontend/assets/img/blog/blog-3.jpg" alt=""></a>
                        <div class="blog__one-item-image-date">
                            <span class="text-three">17</span>
                            <span class="text-five">Dec</span>
                        </div>
                    </div>
                    <div class="blog__one-item-content">
                        <h4><a href="detail_berita">Despite the benefits of variety & opportunities,</a></h4>
                        <p>Experts say some good first steps in starting business are researching</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection