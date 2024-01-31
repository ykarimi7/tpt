<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>

<!-- Loader Start -->
<div class="fullpage-loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
<!-- Loader End -->

<!-- Header Start -->
<header class="pb-md-4 pb-0">
    @include('header')
</header>
<!-- Header End -->

<!-- mobile fix menu start -->
<!-- mobile-menu fix start -->
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="{{url('/')}}">
                <i class="iconly-Home icli"></i>
                <span>Ana Sayfa</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="javascript:void(0)">
                <i class="iconly-Category icli js-link"></i>
                <span>Kategori</span>
            </a>
        </li>

        <li>
            <a href="{{url('/')}}" class="search-box">
                <i class="iconly-Search icli"></i>
                <span>Ara</span>
            </a>
        </li>

        <li>
            <a href="{{url('/')}}" class="notifi-wishlist">
                <i class="iconly-Heart icli"></i>
                <span>Dilek Listem</span>
            </a>
        </li>

        <li>
            <a href="{{url('/')}}">
                <i class="iconly-Bag-2 icli fly-cate"></i>
                <span>Sepetim</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile-menu fix end -->

<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Shop Sol Kenar Çubuğu</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Sol Kenar Çubuğu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Poster Section Start -->
<section>
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="slider-1 slider-animate product-wrapper no-arrow">
                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="assets/images/shop/1.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div
                                class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Sağlıklı, Besleyici ve Lezzetli Meyve ve Sebzeler</h2>
                                    <h3>%50'ye kadar tasarruf edin</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="assets/images/shop/1.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div
                                class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Sağlıklı, Besleyici ve Lezzetli Meyve ve Sebzeler</h2>
                                    <h3>%50'ye kadar tasarruf edin</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="assets/images/shop/1.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div
                                class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Sağlıklı, Besleyici ve Lezzetli Meyve ve Sebzeler</h2>
                                    <h3>%50'ye kadar tasarruf edin</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Poster Section End -->

<!-- Shop Section Start -->
<section class="section-b-space shop-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-custome-3">
                <div class="left-box wow fadeInUp">
                    <div class="shop-left-sidebar">
                        <div class="back-button">
                            <h3><i class="fa-solid fa-arrow-left"></i> Geri</h3>
                        </div>

                        <div class="filter-category">
                            <div class="filter-title">
                                <h2>Filtreler</h2>
                                <a href="javascript:void(0)">Hepsini Temizle</a>
                            </div>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Sebze</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Meyve</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Taze</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Süt</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Et</a>
                                </li>
                            </ul>
                        </div>


                        <div class="accordion custome-accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        <span>Kategoriler</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne">
                                    <div class="accordion-body">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="search" class="form-control" id="search"
                                                   placeholder="Ara ..">
                                            <label for="search">Ara</label>
                                        </div>

                                        <ul class="category-list custom-padding custom-height">
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="fruit">
                                                    <label class="form-check-label" for="fruit">
                                                        <span class="name">Meyve & Sebzeler</span>
                                                        <span class="number">(15)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="cake">
                                                    <label class="form-check-label" for="cake">
                                                        <span class="name">Fırın, Kek & Süt Ürünleri</span>
                                                        <span class="number">(12)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="behe">
                                                    <label class="form-check-label" for="behe">
                                                        <span class="name">İçecekler</span>
                                                        <span class="number">(20)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="snacks">
                                                    <label class="form-check-label" for="snacks">
                                                        <span class="name">Atıştırmalık & Markalı Ürünler</span>
                                                        <span class="number">(05)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="beauty">
                                                    <label class="form-check-label" for="beauty">
                                                        <span class="name">Güzellik & Ev Ürünleri</span>
                                                        <span class="number">(30)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="pets">
                                                    <label class="form-check-label" for="pets">
                                                        <span class="name">Mutfak, Bahçe & Evcil Hayvanlar</span>
                                                        <span class="number">(50)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="egg">
                                                    <label class="form-check-label" for="egg">
                                                        <span class="name">Yumurta, Et & Balık</span>
                                                        <span class="number">(19)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="food">
                                                    <label class="form-check-label" for="food">
                                                        <span class="name">Gurme & Dünya Mutfağı</span>
                                                        <span class="number">(30)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="care">
                                                    <label class="form-check-label" for="care">
                                                        <span class="name">Bebek Bakımı</span>
                                                        <span class="number">(20)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="fish">
                                                    <label class="form-check-label" for="fish">
                                                        <span class="name">Balık & Deniz Ürünleri</span>
                                                        <span class="number">(10)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="marinades">
                                                    <label class="form-check-label" for="marinades">
                                                        <span class="name">Marinatlar</span>
                                                        <span class="number">(05)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="lamb">
                                                    <label class="form-check-label" for="lamb">
                                                        <span class="name">Kuzu & Koyun Etleri</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="other">
                                                    <label class="form-check-label" for="other">
                                                        <span class="name">Dana & Diğer Etler</span>
                                                        <span class="number">(06)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="pour">
                                                    <label class="form-check-label" for="pour">
                                                        <span class="name">Tavuk Ürünleri</span>
                                                        <span class="number">(01)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="salami">
                                                    <label class="form-check-label" for="salami">
                                                        <span class="name">Sosis, Döner & Salam</span>
                                                        <span class="number">(03)</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                        <span>Yiyecek Tercihi</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                     aria-labelledby="headingTwo">
                                    <div class="accordion-body">
                                        <ul class="category-list custom-padding">
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="veget">
                                                    <label class="form-check-label" for="veget">
                                                        <span class="name">Vejetaryen</span>
                                                        <span class="number">(08)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="non">
                                                    <label class="form-check-label" for="non">
                                                        <span class="name">Vejetaryen Olmayan</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                        <span>Fiyat</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show"
                                     aria-labelledby="headingThree">
                                    <div class="accordion-body">
                                        <div class="range-slider">
                                            <input type="text" class="js-range-slider" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                        <span>Değerlendirme</span>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show"
                                     aria-labelledby="headingSix">
                                    <div class="accordion-body">
                                        <ul class="category-list custom-padding">
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox">
                                                    <div class="form-check-label">
                                                        <ul class="rating">
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="text-content">(5 Yıldız)</span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox">
                                                    <div class="form-check-label">
                                                        <ul class="rating">
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="text-content">(4 Yıldız)</span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox">
                                                    <div class="form-check-label">
                                                        <ul class="rating">
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="text-content">(3 Yıldız)</span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox">
                                                    <div class="form-check-label">
                                                        <ul class="rating">
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="text-content">(2 Yıldız)</span>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox">
                                                    <div class="form-check-label">
                                                        <ul class="rating">
                                                            <li>
                                                                <i data-feather="star" class="fill"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                            <li>
                                                                <i data-feather="star"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="text-content">(1 Yıldız)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                        <span>İndirim</span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                     aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <ul class="category-list custom-padding">
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        <span class="name">%5'e kadar</span>
                                                        <span class="number">(06)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault1">
                                                    <label class="form-check-label" for="flexCheckDefault1">
                                                        <span class="name">%5 - 10 arası</span>
                                                        <span class="number">(08)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault2">
                                                    <label class="form-check-label" for="flexCheckDefault2">
                                                        <span class="name">%10 - 15 arası</span>
                                                        <span class="number">(10)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault3">
                                                    <label class="form-check-label" for="flexCheckDefault3">
                                                        <span class="name">%15 - 25 arası</span>
                                                        <span class="number">(14)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault4">
                                                    <label class="form-check-label" for="flexCheckDefault4">
                                                        <span class="name">%25'ten fazla</span>
                                                        <span class="number">(13)</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                        <span>Paket Boyutu</span>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse show"
                                     aria-labelledby="headingFive">
                                    <div class="accordion-body">
                                        <ul class="category-list custom-padding custom-height">
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault5">
                                                    <label class="form-check-label" for="flexCheckDefault5">
                                                        <span class="name">400 ila 500 g</span>
                                                        <span class="number">(05)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault6">
                                                    <label class="form-check-label" for="flexCheckDefault6">
                                                        <span class="name">500 ila 700 g</span>
                                                        <span class="number">(02)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault7">
                                                    <label class="form-check-label" for="flexCheckDefault7">
                                                        <span class="name">700 ila 1 kg</span>
                                                        <span class="number">(04)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault8">
                                                    <label class="form-check-label" for="flexCheckDefault8">
                                                        <span class="name">Her biri 120 - 150 g vakumlu 2 adet</span>
                                                        <span class="number">(06)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault9">
                                                    <label class="form-check-label" for="flexCheckDefault9">
                                                        <span class="name">1 adet</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault10">
                                                    <label class="form-check-label" for="flexCheckDefault10">
                                                        <span class="name">1 ila 1.2 kg</span>
                                                        <span class="number">(06)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class"form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox"
                                                       id="flexCheckDefault11">
                                                <label class="form-check-label" for="flexCheckDefault11">
                                                    <span class="name">2 x 24 adet çoklu paket</span>
                                                    <span class="number">(03)</span>
                                                </label>
                                    </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault12">
                                            <label class="form-check-label" for="flexCheckDefault12">
                                                <span class="name">2x6 adet çoklu paket</span>
                                                <span class="number">(04)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault13">
                                            <label class="form-check-label" for="flexCheckDefault13">
                                                <span class="name">4x6 adet çoklu paket</span>
                                                <span class="number">(05)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault14">
                                            <label class="form-check-label" for="flexCheckDefault14">
                                                <span class="name">5x6 adet çoklu paket</span>
                                                <span class="number">(09)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault15">
                                            <label class="form-check-label" for="flexCheckDefault15">
                                                <span class="name">Combo 2 Ürün</span>
                                                <span class="number">(10)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault16">
                                            <label class="form-check-label" for="flexCheckDefault16">
                                                <span class="name">Combo 3 Ürün</span>
                                                <span class="number">(14)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault17">
                                            <label class="form-check-label" for="flexCheckDefault17">
                                                <span class="name">2 adet</span>
                                                <span class="number">(19)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault18">
                                            <label class="form-check-label" for="flexCheckDefault18">
                                                <span class="name">3 adet</span>
                                                <span class="number">(14)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault19">
                                            <label class="form-check-label" for="flexCheckDefault19">
                                                <span class="name">2 adet vakumlu (140 g ila 180 g her biri)</span>
                                                <span class="number">(13)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault20">
                                            <label class="form-check-label" for="flexCheckDefault20">
                                                <span class="name">4 adet</span>
                                                <span class="number">(18)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault21">
                                            <label class="form-check-label" for="flexCheckDefault21">
                                                <span class="name">4 adet vakumlu (140 g ila 180 g her biri)</span>
                                                <span class="number">(07)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault22">
                                            <label class="form-check-label" for="flexCheckDefault22">
                                                <span class="name">6 adet</span>
                                                <span class="number">(09)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault23">
                                            <label class="form-check-label" for="flexCheckDefault23">
                                                <span class="name">6 adet karton</span>
                                                <span class="number">(11)</span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-check ps-0 m-0 category-list-box">
                                            <input class="checkbox_animated" type="checkbox"
                                                   id="flexCheckDefault24">
                                            <label class="form-check-label" for="flexCheckDefault24">
                                                <span class="name">6 adet poşet</span>
                                                <span class="number">(16)</span>
                                            </label>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @yield('main')


    </div>
    </div>
</section>
<!-- Shop Section End -->

<!-- Footer Section Start -->
<footer class="section-t-space">
    @include('footer1')
</footer>
<!-- Footer Section End -->

<!-- Quick View Modal Box Start -->
<div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="assets/images/product/category/1.jpg" class="img-fluid blur-up lazyload" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-sidebar-modal">
                            <h4 class="title-name">Fıstık Ezmesi Bite Premium Tereyağlı Kurabiye 600 g</h4>
                            <h4 class="price">$36.99</h4>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <span class="ms-2">8 Değerlendirme</span>
                                <span class="ms-2 text-danger">Son 16 saatte 6 satıldı</span>
                            </div>
                            <div class="product-detail">
                                <h4>Ürün Detayları :</h4>
                                <p>Şeker kamışı şeker erik tart pamuk şeker lolipop şeker erik çikolata severim. Karameller marshmallow şekerleme tatlı şeker kamışı pamuk şeker soufflé şeker kamışı toffee severim. Marshmallow pastası tatlı tatlı rulo susam atıştırmalık tiramisu jöle ayı pençesi. Bonbon kek havuçlu kek şeker erik tatlı bonbon.</p>
                            </div>
                            <ul class="brand-list">
                                <li>
                                    <div class="brand-box">
                                        <h5>Marka Adı:</h5>
                                        <h6>Kara Orman</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="brand-box">
                                        <h5>Ürün Kodu:</h5>
                                        <h6>W0690034</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="brand-box">
                                        <h5>Ürün Türü:</h5>
                                        <h6>Beyaz Krema Kek</h6>
                                    </div>
                                </li>
                            </ul>
                            <div class="select-size">
                                <h4>Kek Boyutu :</h4>
                                <select class="form-select select-form-size">
                                    <option selected>Boyut Seçin</option>
                                    <option value="1.2">1/2 KG</option>
                                    <option value="0">1 KG</option>
                                    <option value="1.5">1/5 KG</option>
                                    <option value="red">Kırmızı Güllerle</option>
                                    <option value="pink">Pembe Güllerle</option>
                                </select>
                            </div>
                            <div class="modal-button">
                                <button onclick="location.href = '{{url('/')}}';" class="btn btn-md add-cart-button icon">Sepete Ekle</button>
                                <button onclick="location.href = '{{url('/')}}';" class="btn theme-bg-color view-button icon text-white fw-bold btn-md">Daha Fazla Detay Görüntüle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick View Modal Box End -->

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Teslimat Yeri Seçin</h5>
                <p class="mt-1 text-content">Adresinizi girin, bölgeniz için teklifi belirleyeceğiz.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="Bölgenizi Ara">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="disabled-box">
                        <h6>Bir Yer Seçin</h6>
                    </div>
                    <ul class="location-select custom-height">
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Alabama</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Arizona</h6>
                                <span>Min: $150</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h6>California</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Colorado</h6>
                                <span>Min: $140</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Florida</h6>
                                <span>Min: $160</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Georgia</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Kansas</h6>
                                <span>Min: $170</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Minnesota</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h6>New York</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Washington</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Location Modal End -->

<!-- Deal Box Modal Start -->
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                    <p class="mt-1 text-content">Recommended deals for you.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="deal-offer-box">
                    <ul class="deal-offer-list">
                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="{{url('/shopleft')}}" class="deal-image">
                                    <img src="assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="{{url('/shopleft')}}" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="{{url('/shopleft')}}" class="deal-image">
                                    <img src="assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="{{url('/shopleft')}}" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="{{url('/shopleft')}}" class="deal-image">
                                    <img src="assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="{{url('/shopleft')}}" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="{{url('/shopleft')}}" class="deal-image">
                                    <img src="assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="{{url('/shopleft')}}" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deal Box Modal End -->

<!-- Add to cart Modal Start -->
<div class="add-cart-box">
    <div class="add-iamge">
        <img src="assets/images/cake/pro/1.jpg" class="img-fluid blur-up lazyload" alt="">
    </div>
    <div class="add-contain">
        <h6>Sepete Eklendi</h6>
    </div>
</div>
<!-- Add to cart Modal Start -->
>
</div>

<!-- Add to cart Modal End -->

<!-- Tap to top start -->
<div class="theme-option">
    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->

<!-- latest jquery-->

@include('javas')


</body>

</html>
