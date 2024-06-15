@extends('template.frontend')
@section('content')
<!-- Page Banner Area Start -->
<div class="page__banner" data-background="frontend/assets/img/pages/page-banner.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <span>Kontak</span>
                    <ul>
                        <li><a href="index.html">kontak</a><span>|</span></li>
                        <li>jurusan</li>
                    </ul>
                    <h1>Hubungi Kami</h1>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- Page Banner Area End -->
	<!-- Contact Details Start -->
	<div class="contact__four section-padding" style="margin-bottom: 54px;">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 lg-mb-30 wow fadeInUp" data-wow-delay=".4s">
					<div class="contact__four-info">
						<div class="contact__four-info-icon">
							<img src="frontend/assets/img/icon/locationss.png" alt="">
                        </div>
                        <h4>Alamat</h4>
                        {{-- <span>You are most welcome to visit office.</span> --}}
						<p>Jl. Rangge Sentap, Dalong, Sukaharja, Delta Pawan, Kabupaten Ketapang, Kalimantan Barat</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30 wow fadeInUp" data-wow-delay=".8s">
					<div class="contact__four-info">
						<div class="contact__four-info-icon">
							<img src="frontend/assets/img/icon/phone-call.png" alt="">
						</div>
                        <h4>Telp</h4>
                        {{-- <span>Keeping you always better connected.</span> --}}
                        <p><a href="tel:+125(895)658568">+125 (895) 658 568</a></p>
                        <p><a href="tel:+125(874)452645">+125 (874) 452 645</a></p>
                        <p><a href="tel:+125(874)452645">+125 (874) 452 645</a></p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
					<div class="contact__four-info">
						<div class="contact__four-info-icon">
							<img src="frontend/assets/img/icon/emails.png" alt="">
						</div>
                        <h4>Email</h4>
                        {{-- <span>Drop us a mail we will answer you asap.</span> --}}
                        <p><a href="mailto:conbix@gmail.com">conbix@gmail.com</a></p>
                        <p><a href="mailto:teknikelektro@politap.ac.id">teknikelektro@politap.ac.id</a></p>
                        <p><a href="mailto:teknikinformatika@politap.ac.id">teknikinformatika@politap.ac.id</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Details End -->
    <!-- Map Area Start -->
    <div class="contact__two-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.8125967862456!2d109.98605607350429!3d-1.8168321364330617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0518e6aef713bf%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1717567150474!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> 
    <!-- Map Area End -->    
@endsection