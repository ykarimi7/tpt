<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">


    <link rel="icon" href="{{url('assets1/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('assets1/images/favicon.png')}}" type="image/x-icon">
    <title>Fastkart - Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{url('assets1/css/linearicon.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/vendors/font-awesome.css')}}">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/vendors/themify.css')}}">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/ratio.css')}}">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/remixicon.css')}}">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/vendors/feather-icon.css')}}">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/vendors/animate.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/vendors/bootstrap.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/vector-map.css')}}">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{url('assets1/css/vendors/slick.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets1/css/style.css')}}">
</head>

<body>
<!-- tap on top start -->
<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<!-- tap on tap end -->

<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper m-0">
            <div class="header-logo-wrapper p-0">
                <div class="logo-wrapper">
                    <a href="{{url('admin/')}}">
                        <img class="img-fluid main-logo" src="{{url('assets1/images/logo/1.png')}}" alt="logo">
                        <img class="img-fluid white-logo" src="{{url('assets1/images/logo/1-white.png')}}" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    <a href="{{url('admin/')}}">
                        <img src="{{url('assets1/images/logo/1.png')}}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>

            <form class="form-inline search-full" action="javascript:void(0)" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                   placeholder="Search Fastkart .." name="q" title="" autofocus>
                            <i class="close-search" data-feather="x"></i>
                            <div class="spinner-border Typeahead-spinner" role="status">
                                <span class="sr-only">Yükleniyor...</span>
                            </div>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <span class="header-search">
                            <i class="ri-search-line"></i>
                        </span>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="notification-box">
                            <i class="ri-notification-line"></i>
                            <span class="badge rounded-pill badge-theme">4</span>
                        </div>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>
                                <i class="ri-notification-line"></i>
                                <h6 class="f-18 mb-0">Bildirimler</h6>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-primary"></i>Teslimat işlemi <span
                                        class="pull-right">10 dakika</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-success"></i>Sipariş Tamamlandı<span
                                        class="pull-right">1 saat</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-info"></i>Biletler Oluşturuldu<span
                                        class="pull-right">3 saat</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-danger"></i>Teslimat Tamamlandı<span
                                        class="pull-right">6 saat</span>
                                </p>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="javascript:void(0)">Tüm bildirimleri kontrol et</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="mode">
                            <i class="ri-moon-line"></i>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                        <div class="media profile-media">
                            <img class="user-profile rounded-circle" src="{{url('assets1/images/users/4.jpg')}}" alt="">
                            <div class="user-name-hide media-body">
                                <span>Emay Walter</span>
                                <p class="mb-0 font-roboto">Yönetici<i class="middle ri-arrow-down-s-line"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a href="{{url('admin/')}}">
                                    <i data-feather="users"></i>
                                    <span>Kullanıcılar</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/')}}">
                                    <i data-feather="archive"></i>
                                    <span>Siparişler</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/')}}">
                                    <i data-feather="phone"></i>
                                    <span>Destek Talepleri</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/')}}">
                                    <i data-feather="settings"></i>
                                    <span>Ayarlar</span>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                href="javascript:void(0)">
                                    <i data-feather="log-out"></i>
                                    <span>Çıkış Yap</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div id="sidebarEffect"></div>
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="{{url('admin/')}}" data-bs-original-title="" title="">
                        <img class="img-fluid for-white" src="{{url('assets1/images/logo/full-white.png')}}" alt="logo">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="{{url('admin/')}}">
                        <img class="img-fluid main-logo main-white" src="{{url('assets1/images/logo/logo.png')}}" alt="logo">
                        <img class="img-fluid main-logo main-dark" src="{{url('assets1/images/logo/logo-white.png')}}"
                             alt="logo">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>

                    <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn"></li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{url('admin/')}}">
                                <i class="ri-home-line"></i>
                                <span>Genel Bakış</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-store-3-line"></i>
                                <span>Ürünler</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{url('admin/products')}}">Ürünler</a>
                                </li>

                                <li>
                                    <a href="{{url('admin/newprodinsert')}}">Yeni Ürün Ekle</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-list-check-2"></i>
                                <span>Kategori</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{url('admin/categorylist')}}">Kategori Listesi</a>
                                </li>

                                <li>
                                    <a href="{{url('admin/newcatinsert')}}">Yeni Kategori Ekle</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-list-settings-line"></i>
                                <span>Özellikler</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{url('admin/attribute')}}">Özellikler</a>
                                </li>

                                <li>
                                    <a href="{{url('admin/addattribute')}}">Özellik Ekle</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-user-3-line"></i>
                                <span>Kullanıcılar</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{url('admin/allusers')}}">Tüm Kullanıcılar</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/addnewuser')}}">Yeni Kullanıcı Ekle</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-user-3-line"></i>
                                <span>Roller</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{url('admin/allrol')}}">Tüm Roller</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/addrol')}}">Rol Oluştur</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{url('admin/media')}}">
                                <i class="ri-price-tag-3-line"></i>
                                <span>Medya</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-archive-line"></i>
                                <span>Siparişler</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{url('admin/orderlist')}}">Sipariş Listesi</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/orderdetail')}}">Sipariş Detayı</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/orderfollow')}}">Sipariş Takibi</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-focus-3-line"></i>
                                <span>Yerelleştirme</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{url('admin/translation')}}">Çeviri</a>
                                </li>

                                <li>
                                    <a href="{{url('admin/currencyrate')}}">Döviz Kurları</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-price-tag-3-line"></i>
                                <span>Kuponlar</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{url('admin/couponlist')}}">Kupon Listesi</a>
                                </li>

                                <li>
                                    <a href="{{url('admin/addcoupon')}}">Kupon Oluştur</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{url('admin/tax')}}">
                                <i class="ri-price-tag-3-line"></i>
                                <span>Vergiler</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{url('admin/productreview')}}">
                                <i class="ri-star-line"></i>
                                <span>Ürün İncelemeleri</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{url('admin/suportticket')}}">
                                <i class="ri-phone-line"></i>
                                <span>Destek Talepleri</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-settings-line"></i>
                                <span>Ayarlar</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{url('admin/profilesetting')}}">Profil Ayarları</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{url('admin/raports')}}">
                                <i class="ri-file-chart-line"></i>
                                <span>Raporlar</span>
                            </a>
                        </li>


                    </ul>

                    </div>

                    <div class="right-arrow" id="right-arrow">
                        <i data-feather="arrow-right"></i>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- index body start -->
            @yield('main')

        <!-- index body end -->

    </div>
    <!-- Page Body End -->
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">Çıkış Yapılıyor</h5>
                <p>Çıkış yapmak istediğinize emin misiniz?</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                <div class="button-box">
                    <button type="button" class="btn btn--no" data-bs-dismiss="modal">Hayır</button>
                    <button type="button" class="btn btn--yes btn-primary">Evet</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- latest js -->
<script src="{{url('assets1/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{url('assets1/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

<!-- feather icon js -->
<script src="{{url('assets1/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{url('assets1/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- scrollbar simplebar js -->
<script src="{{url('assets1/js/scrollbar/simplebar.js')}}"></script>
<script src="{{url('assets1/js/scrollbar/custom.js')}}"></script>

<!-- Sidebar jquery -->
<script src="{{url('assets1/js/config.js')}}"></script>

<!-- tooltip init js -->
<script src="{{url('assets1/js/tooltip-init.js')}}"></script>

<!-- Plugins JS -->
<script src="{{url('assets1/js/sidebar-menu.js')}}"></script>
<script src="{{url('assets1/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{url('assets1/js/notify/index.js')}}"></script>

<!-- Apexchar js -->
<script src="{{url('assets1/js/chart/apex-chart/apex-chart1.js')}}"></script>
<script src="{{url('assets1/js/chart/apex-chart/moment.min.js')}}"></script>
<script src="{{url('assets1/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{url('assets1/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{url('assets1/js/chart/apex-chart/chart-custom1.js')}}"></script>


<!-- slick slider js -->
<script src="{{url('assets1/js/slick.min.js')}}"></script>
<script src="{{url('assets1/js/custom-slick.js')}}"></script>

<!-- customizer js -->
<script src="{{url('assets1/js/customizer.js')}}"></script>

<!-- ratio js -->
<script src="{{url('assets1/js/ratio.js')}}"></script>

<!-- sidebar effect -->
<script src="{{url('assets1/js/sidebareffect.js')}}"></script>

<!-- Theme js -->
<script src="{{url('assets1/js/script.js')}}"></script>
</body>

</html>
