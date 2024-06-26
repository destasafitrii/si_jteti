<div class="header__area header__sticky">
    <div class="container custom__container">
        <div class="header__area-menubar">
            <div class="header__area-menubar-left">
                <div class="header__area-menubar-left-logo">
                    <a href="/index.html"><img class="dark-n" src="{{ asset('frontend/assets/img/logo-poltek1.png')}}" alt=""><img class="light-n" src="{{ asset('frontend/assets/img/logo-2.png')}}" alt=""></a>
                </div>
            </div>
            <div class="header__area-menubar-center">
                <div class="header__area-menubar-center-menu menu-responsive">						
                    <ul id="mobilemenu">
                        <li class="menu-item-has-children"><a href="/beranda">Beranda</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="/index.html">Home 01</a></li>
                                <li><a href="/index-two.html">Home 02</a></li>								
                                <li><a href="/index-three.html">Home 03</a></li>								
                            </ul> --}}
                        </li>
                        <li class="menu-item-has-children"><a href="/#">Profil</a>
                            <ul class="sub-menu">
                                <li><a href="/pimpinan">Pimpinan</a></li>
                                <li class="menu-item-has-children"><a href="/#">Visi dan Misi</a>
                                    <ul class="sub-menu">
                                        <li><a href="/visi-misi-ti">Prodi Teknologi Informasi</a></li>
                                        <li><a href="/visi-misi-te">Prodi Teknologi Listrik</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="/#">Dosen</a>
                                    <ul class="sub-menu">
                                        <li><a href="/dosen-teknologi-informasi">Prodi Teknologi Informasi</a></li>
                                        <li><a href="/dosen-teknologi-listrik">Prodi Teknologi Listrik</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="/#">Teknisi</a>
                                    <ul class="sub-menu">
                                        <li><a href="/teknisi-teknologi-informasi">Prodi Teknologi Informasi</a></li>
                                        <li><a href="/teknisi-teknologi-listrik">Prodi Teknologi Listrik</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="/#">Fasilitas</a>
                            <ul class="sub-menu">
                                <li><a href="/laboratorium">laboratorium</a></li>
                                </li>
                                <li><a href="/ruang-kelas">Ruang Kelas</a></li>
                                </li>
                                <li><a href="/ruang-manajemen">Ruang Manajemen</a></li>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="/#">Akademik</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="/#">Akreditasi</a>
                                    <ul class="sub-menu">
                                        <li><a href="/akreditasi-teknologi-informasi">Prodi Teknologi Informasi</a></li>
                                        <li><a href="/akreditasi-teknologi-listrik">Prodi Teknologi Listrik</a></li>
                                    </ul>
                                    <li class="menu-item-has-children"><a href="/#">Kurikulum</a>
                                        <ul class="sub-menu">
                                            <li><a href="/kurikulum_ti">Prodi Teknologi Informasi</a></li>
                                            <li><a href="/#">Prodi Teknologi Listrik</a></li>
                                        </ul>
                                    </li>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="menu-item-has-children"><a href="/berita">Kurikulum</a>
                        </li> --}}
                        <li class="menu-item-has-children"><a href="/berita">Berita</a>
                            <ul class="sub-menu">
                                <li><a href="/berita-jurusan">Berita Jurusan</a></li>
                                </li>
                                <li><a href="/berita-penelitian">Berita Penelitian</a></li>
                                </li>
                                <li><a href="/berita-pengabdian">Berita Pengabdian</a></li>
                                </li>
                                <li><a href="/berita-pbl">Berita PBL</a></li>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="/kontak">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
                    {{-- <div class="header__area-menubar-right-box-search">
                        <div class="search">	
                            <span class="header__area-menubar-right-box-search-icon open"><i class="fal fa-search"></i></span>
                        </div>
                        <div class="header__area-menubar-right-box-search-box">
                            <form>
                                <input type="search" placeholder="Search Here.....">
                                <button type="submit"><i class="fal fa-search"></i>
                                </button>
                            </form> <span class="header__area-menubar-right-box-search-box-icon"><i class="fal fa-times"></i></span>
                        </div>
                    </div> --}}
                    <div class="header__area-menubar-right-sidebar">
                        <div class="header__area-menubar-right-sidebar-popup-icon"><img src="{{ asset('frontend/assets/img/icon/menu-1.png')}}" alt=""></div>
                    </div>
                    <div class="header__area-menubar-right-box-btn">
                        {{-- <a class="btn-one" href="/request-quote.html">Request quote<i class="far fa-chevron-double-right"></i></a> --}}
                    </div>
                    <!-- sidebar Menu Start -->
                    <div class="header__area-menubar-right-sidebar-popup">
                        <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                        <div class="header__area-menubar-right-sidebar-popup-logo">
                            <a href="/index.html"> <img src="{{ asset('frontend/assets/img/logo-poltek2.png')}}" alt=""> </a>
                        </div>
                        <p>Jurusan Teknik Elektro dan Teknik Informatika Politeknik Negeri Ketapang</p>
                        <div class="header__area-menubar-right-box-sidebar-popup-contact">
                            <h4 class="mb-30">Hubungi Kami</h4>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-phone-alt icon-animation"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Telp</span>
                                    <h6><a href="/tel:+125(895)658568">+125 (895) 658 568</a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Email</span>
                                    <h6><a href="/mailto:info.help@gmail.com">info.help@gmail.com</a></h6>
                                </div>
                            </div>
                            {{-- <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Office Address</span>
                                    <h6><a href="/#">PV3M+X68 Welshpool United Kingdom</a></h6>
                                </div>
                            </div> --}}
                        </div>
                        <div class="header__area-menubar-right-box-sidebar-popup-social">
                            <ul>
                                <li><a href="/#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="/#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="/#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="/#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>							
                        </div>
                    </div>
                    <div class="sidebar-overlay"></div>
                    <!-- sidebar Menu Start -->
                </div>
                <div class="responsive-menu"></div>
            </div>
        </div>
    </div>
</div>    