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
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="index.html">
                <i class="iconly-Home icli"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="javascript:void(0)">
                <i class="iconly-Category icli js-link"></i>
                <span>Category</span>
            </a>
        </li>

        <li>
            <a href="search.html" class="search-box">
                <i class="iconly-Search icli"></i>
                <span>Search</span>
            </a>
        </li>

        <li>
            <a href="wishlist.html" class="notifi-wishlist">
                <i class="iconly-Heart icli"></i>
                <span>My Wish</span>
            </a>
        </li>

        <li>
            <a href="cart.html">
                <i class="iconly-Bag-2 icli fly-cate"></i>
                <span>Cart</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->

<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Shop Left Sidebar</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Left Sidebar</li>
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
                            <img src="../assets/images/shop/1.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div
                                class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Healthy, nutritious & Tasty Fruits & Veggies</h2>
                                    <h3>Save upto 50%</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="../assets/images/shop/1.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div
                                class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Healthy, nutritious & Tasty Fruits & Veggies</h2>
                                    <h3>Save upto 50%</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="../assets/images/shop/1.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div
                                class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Healthy, nutritious & Tasty Fruits & Veggies</h2>
                                    <h3>Save upto 50%</h3>
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
                            <h3><i class="fa-solid fa-arrow-left"></i> Back</h3>
                        </div>

                        <div class="filter-category">
                            <div class="filter-title">
                                <h2>Filters</h2>
                                <a href="javascript:void(0)">Clear All</a>
                            </div>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Vegetable</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Fruit</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Fresh</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Milk</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Meat</a>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion custome-accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        <span>Categories</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne">
                                    <div class="accordion-body">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="search" class="form-control" id="search"
                                                   placeholder="Search ..">
                                            <label for="search">Search</label>
                                        </div>

                                        <ul class="category-list custom-padding custom-height">
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="fruit">
                                                    <label class="form-check-label" for="fruit">
                                                        <span class="name">Fruits & Vegetables</span>
                                                        <span class="number">(15)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="cake">
                                                    <label class="form-check-label" for="cake">
                                                        <span class="name">Bakery, Cake & Dairy</span>
                                                        <span class="number">(12)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="behe">
                                                    <label class="form-check-label" for="behe">
                                                        <span class="name">Beverages</span>
                                                        <span class="number">(20)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="snacks">
                                                    <label class="form-check-label" for="snacks">
                                                        <span class="name">Snacks & Branded Foods</span>
                                                        <span class="number">(05)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="beauty">
                                                    <label class="form-check-label" for="beauty">
                                                        <span class="name">Beauty & Household</span>
                                                        <span class="number">(30)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="pets">
                                                    <label class="form-check-label" for="pets">
                                                        <span class="name">Kitchen, Garden & Pets</span>
                                                        <span class="number">(50)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="egg">
                                                    <label class="form-check-label" for="egg">
                                                        <span class="name">Eggs, Meat & Fish</span>
                                                        <span class="number">(19)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="food">
                                                    <label class="form-check-label" for="food">
                                                        <span class="name">Gourment & World Food</span>
                                                        <span class="number">(30)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="care">
                                                    <label class="form-check-label" for="care">
                                                        <span class="name">Baby Care</span>
                                                        <span class="number">(20)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="fish">
                                                    <label class="form-check-label" for="fish">
                                                        <span class="name">Fish & Seafood</span>
                                                        <span class="number">(10)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="marinades">
                                                    <label class="form-check-label" for="marinades">
                                                        <span class="name">Marinades</span>
                                                        <span class="number">(05)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="lamb">
                                                    <label class="form-check-label" for="lamb">
                                                        <span class="name">Mutton & Lamb</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="other">
                                                    <label class="form-check-label" for="other">
                                                        <span class="name">Port & other Meats</span>
                                                        <span class="number">(06)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="pour">
                                                    <label class="form-check-label" for="pour">
                                                        <span class="name">Pourltry</span>
                                                        <span class="number">(01)</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="salami">
                                                    <label class="form-check-label" for="salami">
                                                        <span class="name">Sausages, bacon & Salami</span>
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
                                        <span>Food Preference</span>
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
                                                        <span class="name">Vegetarian</span>
                                                        <span class="number">(08)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" id="non">
                                                    <label class="form-check-label" for="non">
                                                        <span class="name">Non Vegetarian</span>
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
                                        <span>Price</span>
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
                                        <span>Rating</span>
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
                                                        <span class="text-content">(5 Star)</span>
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
                                                        <span class="text-content">(4 Star)</span>
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
                                                        <span class="text-content">(3 Star)</span>
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
                                                        <span class="text-content">(2 Star)</span>
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
                                                        <span class="text-content">(1 Star)</span>
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
                                        <span>Discount</span>
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
                                                        <span class="name">upto 5%</span>
                                                        <span class="number">(06)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault1">
                                                    <label class="form-check-label" for="flexCheckDefault1">
                                                        <span class="name">5% - 10%</span>
                                                        <span class="number">(08)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault2">
                                                    <label class="form-check-label" for="flexCheckDefault2">
                                                        <span class="name">10% - 15%</span>
                                                        <span class="number">(10)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault3">
                                                    <label class="form-check-label" for="flexCheckDefault3">
                                                        <span class="name">15% - 25%</span>
                                                        <span class="number">(14)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault4">
                                                    <label class="form-check-label" for="flexCheckDefault4">
                                                        <span class="name">More than 25%</span>
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
                                        <span>Pack Size</span>
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
                                                        <span class="name">400 to 500 g</span>
                                                        <span class="number">(05)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault6">
                                                    <label class="form-check-label" for="flexCheckDefault6">
                                                        <span class="name">500 to 700 g</span>
                                                        <span class="number">(02)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault7">
                                                    <label class="form-check-label" for="flexCheckDefault7">
                                                        <span class="name">700 to 1 kg</span>
                                                        <span class="number">(04)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault8">
                                                    <label class="form-check-label" for="flexCheckDefault8">
                                                        <span class="name">120 - 150 g each Vacuum 2 pcs</span>
                                                        <span class="number">(06)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault9">
                                                    <label class="form-check-label" for="flexCheckDefault9">
                                                        <span class="name">1 pc</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault10">
                                                    <label class="form-check-label" for="flexCheckDefault10">
                                                        <span class="name">1 to 1.2 kg</span>
                                                        <span class="number">(06)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault11">
                                                    <label class="form-check-label" for="flexCheckDefault11">
                                                        <span class="name">2 x 24 pcs Multipack</span>
                                                        <span class="number">(03)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault12">
                                                    <label class="form-check-label" for="flexCheckDefault12">
                                                        <span class="name">2x6 pcs Multipack</span>
                                                        <span class="number">(04)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault13">
                                                    <label class="form-check-label" for="flexCheckDefault13">
                                                        <span class="name">4x6 pcs Multipack</span>
                                                        <span class="number">(05)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault14">
                                                    <label class="form-check-label" for="flexCheckDefault14">
                                                        <span class="name">5x6 pcs Multipack</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault15">
                                                    <label class="form-check-label" for="flexCheckDefault15">
                                                        <span class="name">Combo 2 Items</span>
                                                        <span class="number">(10)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault16">
                                                    <label class="form-check-label" for="flexCheckDefault16">
                                                        <span class="name">Combo 3 Items</span>
                                                        <span class="number">(14)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault17">
                                                    <label class="form-check-label" for="flexCheckDefault17">
                                                        <span class="name">2 pcs</span>
                                                        <span class="number">(19)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault18">
                                                    <label class="form-check-label" for="flexCheckDefault18">
                                                        <span class="name">3 pcs</span>
                                                        <span class="number">(14)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault19">
                                                    <label class="form-check-label" for="flexCheckDefault19">
                                                            <span class="name">2 pcs Vacuum (140 g to 180 g each
                                                                )</span>
                                                        <span class="number">(13)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault20">
                                                    <label class="form-check-label" for="flexCheckDefault20">
                                                        <span class="name">4 pcs</span>
                                                        <span class="number">(18)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault21">
                                                    <label class="form-check-label" for="flexCheckDefault21">
                                                            <span class="name">4 pcs Vacuum (140 g to 180 g each
                                                                )</span>
                                                        <span class="number">(07)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault22">
                                                    <label class="form-check-label" for="flexCheckDefault22">
                                                        <span class="name">6 pcs</span>
                                                        <span class="number">(09)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault23">
                                                    <label class="form-check-label" for="flexCheckDefault23">
                                                        <span class="name">6 pcs carton</span>
                                                        <span class="number">(11)</span>
                                                    </label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox"
                                                           id="flexCheckDefault24">
                                                    <label class="form-check-label" for="flexCheckDefault24">
                                                        <span class="name">6 pcs Pouch</span>
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
<div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="../assets/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                 alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="right-sidebar-modal">
                            <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
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
                                <span class="ms-2">8 Reviews</span>
                                <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                            </div>

                            <div class="product-detail">
                                <h4>Product Details :</h4>
                                <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                    Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                    Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                    muffin I love carrot cake sugar plum dessert bonbon.</p>
                            </div>

                            <ul class="brand-list">
                                <li>
                                    <div class="brand-box">
                                        <h5>Brand Name:</h5>
                                        <h6>Black Forest</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>Product Code:</h5>
                                        <h6>W0690034</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>Product Type:</h5>
                                        <h6>White Cream Cake</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="select-size">
                                <h4>Cake Size :</h4>
                                <select class="form-select select-form-size">
                                    <option selected>Select Size</option>
                                    <option value="1.2">1/2 KG</option>
                                    <option value="0">1 KG</option>
                                    <option value="1.5">1/5 KG</option>
                                    <option value="red">Red Roses</option>
                                    <option value="pink">With Pink Roses</option>
                                </select>
                            </div>

                            <div class="modal-button">
                                <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">Add
                                    To Cart</button>
                                <button onclick="location.href = 'product-left.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                    View More Details</button>
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
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="Search Your Area">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>Select a Location</h6>
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
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
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
        <img src="../assets/images/cake/pro/1.jpg" class="img-fluid blur-up lazyload" alt="">
    </div>

    <div class="add-contain">
        <h6>Added to Cart</h6>
    </div>
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
