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
            <a href="{{url('/')}}">
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
            <a href="{{url('/')}}" class="search-box">
                <i class="iconly-Search icli"></i>
                <span>Search</span>
            </a>
        </li>

        <li>
            <a href="{{url('/')}}" class="notifi-wishlist">
                <i class="iconly-Heart icli"></i>
                <span>My Wish</span>
            </a>
        </li>

        <li>
            <a href="{{url('/')}}">
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
                    <h2>Blog List</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('/')}}">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Start -->
<section class="blog-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-4">
            <div class="col-xxl-9 col-xl-8 col-lg-7 order-lg-2">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="blog-box blog-list wow fadeInUp">
                            <div class="blog-image">
                                <img src="../assets/images/inner-page/blog/1.jpg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="blog-contain blog-contain-2">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                </div>
                                <a href="{{url('/')}}">
                                    <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                </a>
                                <p>Monterey jack cheese slices cream cheese cream cheese hard cheese roquefort
                                    emmental lancashire. Who moved my cheese dolcelatte st. agur blue cheese fromage
                                    mozzarella say cheese mascarpone blue castello.</p>
                                <button onclick="location.href = 'blog-detail.html';" class="blog-button">Read
                                    More <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog-box blog-list wow fadeInUp" data-wow-delay="0.05s">
                            <div class="blog-image">
                                <img src="../assets/images/inner-page/blog/2.jpg" class="blur-up lazyload" alt="">
                            </div>

                            <div class="blog-contain blog-contain-2">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>rebeus
                                                hagrid</span></span>
                                </div>
                                <a href="{{url('/')}}">
                                    <h3>Crispy Frozen Vegetable is the on the Tempura.</h3>
                                </a>
                                <p>Manchego cauliflower cheese st. agur blue cheese red leicester monterey jack
                                    cheesecake the big cheese edam. Gouda monterey jack roquefort hard cheese feta
                                    croque monsieur cheeseburger manchego.</p>
                                <button onclick="location.href = 'blog-detail.html';" class="blog-button">Read
                                    More <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog-box blog-list wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-image">
                                <a href="{{url('/')}}">
                                    <img src="../assets/images/inner-page/blog/3.jpg" class="blur-up lazyload"
                                         alt="">
                                </a>
                                <label><i class="fa-solid fa-bolt-lightning"></i> popular</label>
                            </div>

                            <div class="blog-contain blog-contain-2">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>Chris C.
                                                Hall</span></span>
                                </div>
                                <a href="{{url('/')}}">
                                    <h3>How to start regrowing green onions and other vegetables.</h3>
                                </a>
                                <p>Cheese triangles say cheese cheese and biscuits dolcelatte jarlsberg cream cheese
                                    taleggio fromage frais. Who moved my cheese cottage cheese cheese on toast
                                    rubber cheese melted cheese ricotta.</p>
                                <button onclick="location.href = 'blog-detail.html';" class="blog-button">Read
                                    More <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog-box blog-list wow fadeInUp" data-wow-delay="0.15s">
                            <a href="{{url('/')}}" class="blog-image">
                                <img src="../assets/images/inner-page/blog/4.jpg" class="blur-up lazyload" alt="">
                            </a>

                            <div class="blog-contain blog-contain-2">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>James M.
                                                Martin</span></span>
                                </div>
                                <a href="{{url('/')}}">
                                    <h3>Starting a vegetable garden: the basics.</h3>
                                </a>
                                <p>Jarlsberg swiss edam. Goat everyone loves cheese strings ricotta cheese and wine
                                    pepper jack dolcelatte halloumi. Cream cheese queso croque monsieur camembert de
                                    normandie cheddar cheesecake cheese slices croque monsieur.</p>
                                <button onclick="location.href = 'blog-detail.html';" class="blog-button">Read
                                    More <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog-box blog-list wow fadeInUp" data-wow-delay="0.2s">
                            <a href="{{url('/')}}" class="blog-image">
                                <img src="../assets/images/inner-page/blog/5.jpg" class="blur-up lazyload" alt="">
                            </a>

                            <div class="blog-contain blog-contain-2">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>Cecil M.
                                                Levis</span></span>
                                </div>
                                <a href="{{url('/')}}">
                                    <h3>Adapt this simple pasta salad to whatever vegetable.</h3>
                                </a>
                                <p>Cream cheese cheese slices chalk and cheese cottage cheese cheddar port-salut
                                    everyone loves dolcelatte. Cream cheese camembert de normandie cow chalk and
                                    cheese brie gouda cottage cheese cheesy grin.</p>
                                <button onclick="location.href = 'blog-detail.html';" class="blog-button">Read
                                    More <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog-box blog-list wow fadeInUp" data-wow-delay="0.25s">
                            <a href="{{url('/')}}" class="blog-image">
                                <img src="../assets/images/inner-page/blog/1.jpg" class="blur-up lazyload" alt="">
                            </a>

                            <div class="blog-contain blog-contain-2">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>Mary R.
                                                Hernandez</span></span>
                                </div>
                                <a href="{{url('/')}}">
                                    <h3>With chefs idle and vegetables rotting, China's virus-hit.</h3>
                                </a>
                                <p>Monterey jack chalk and cheese cheese and biscuits cream cheese fondue say cheese
                                    stilton halloumi. Gouda everyone loves chalk and cheese everyone loves stinking
                                    bishop manchego stilton.</p>
                                <button onclick="location.href = 'blog-detail.html';" class="blog-button">Read
                                    More <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog-box blog-list wow fadeInUp" data-wow-delay="0.3s">
                            <a href="{{url('/')}}" class="blog-image">
                                <img src="../assets/images/inner-page/blog/2.jpg" class="blur-up lazyload" alt="">
                            </a>

                            <div class="blog-contain blog-contain-2">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>Cheryl D.
                                                Moser</span></span>
                                </div>
                                <a href="{{url('/')}}">
                                    <h3>Turn that bowl of pasta into a supercharged veggie vehicle.</h3>
                                </a>
                                <p>The big cheese fondue st. agur blue cheese. Cheese on toast paneer lancashire
                                    cheese and biscuits rubber cheese macaroni cheese queso feta. Stinking bishop
                                    fromage brie edam cheesy feet smelly cheese fromage frais paneer.</p>
                                <button onclick="location.href = 'blog-detail.html';" class="blog-button">Read
                                    More <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog-box blog-list wow fadeInUp" data-wow-delay="0.35s">
                            <a href="{{url('/')}}" class="blog-image">
                                <img src="../assets/images/inner-page/blog/3.jpg" alt="" class="blur-up lazyload">
                            </a>

                            <div class="blog-contain blog-contain-2">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>Mina M.
                                                Short</span></span>
                                </div>
                                <a href="{{url('/')}}">
                                    <h3>Health, care and skin on the for your organic.</h3>
                                </a>
                                <p>Cheesy grin brie croque monsieur cheesy grin cottage cheese cheese strings
                                    dolcelatte cheeseburger. Cheesy feet queso red leicester fromage frais hard
                                    cheese cheeseburger fromage when the cheese comes out everybody's happy.</p>
                                <button onclick="location.href = 'blog-detail.html';" class="blog-button">Read
                                    More <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="blog-box blog-list wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{url('/')}}" class="blog-image">
                                <img src="../assets/images/inner-page/blog/4.jpg" alt="" class="blur-up lazyload">
                            </a>

                            <div class="blog-contain blog-contain-2">
                                <div class="blog-label">
                                    <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                    <span class="super"><i data-feather="user"></i> <span>Marie S.
                                                Santiago</span></span>
                                </div>
                                <a href="{{url('/')}}">
                                    <h3>Fresh organicsm, brand, fresh and picnic place awesome.</h3>
                                </a>
                                <p>Macaroni cheese camembert de normandie airedale. Cheese triangles babybel cow
                                    blue castello cheddar cheese and biscuits jarlsberg melted cheese. Caerphilly
                                    fromage frais ricotta manchego edam boursin edam swiss.</p>
                                <button onclick="location.href = '{{url('/')}}';" class="blog-button">Read
                                    More <i class="fa-solid fa-right-long"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="custome-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                <i class="fa-solid fa-angles-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-xxl-3 col-xl-4 col-lg-5 order-lg-1">
                <div class="left-sidebar-box wow fadeInUp">
                    <div class="left-search-box">
                        <div class="search-box">
                            <input type="search" class="form-control" id="exampleFormControlInput1"
                                   placeholder="Search....">
                        </div>
                    </div>

                    <div class="accordion left-accordion-box" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                    Recent Post
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body pt-0">
                                    <div class="recent-post-box">
                                        <div class="recent-box">
                                            <a href="{{url('/')}}" class="recent-image">
                                                <img src="../assets/images/inner-page/blog/1.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="recent-detail">
                                                <a href="{{url('/')}}">
                                                    <h5 class="recent-name">Green onion knife and salad placed</h5>
                                                </a>
                                                <h6>25 Jan, 2022 <i data-feather="thumbs-up"></i></h6>
                                            </div>
                                        </div>

                                        <div class="recent-box">
                                            <a href="{{url('/')}}" class="recent-image">
                                                <img src="../assets/images/inner-page/blog/2.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="recent-detail">
                                                <a href="{{url('/')}}">
                                                    <h5 class="recent-name">Health and skin for your organic</h5>
                                                </a>
                                                <h6>25 Jan, 2022 <i data-feather="thumbs-up"></i></h6>
                                            </div>
                                        </div>

                                        <div class="recent-box">
                                            <a href="{{url('/')}}" class="recent-image">
                                                <img src="../assets/images/inner-page/blog/3.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="recent-detail">
                                                <a href="{{url('/')}}">
                                                    <h5 class="recent-name">Organics mix masala fresh & soft</h5>
                                                </a>
                                                <h6>25 Jan, 2022 <i data-feather="thumbs-up"></i></h6>
                                            </div>
                                        </div>

                                        <div class="recent-box">
                                            <a href="{{url('/')}}" class="recent-image">
                                                <img src="../assets/images/inner-page/blog/4.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="recent-detail">
                                                <a href="{{url('/')}}">
                                                    <h5 class="recent-name">Fresh organics brand and picnic</h5>
                                                </a>
                                                <h6>25 Jan, 2022 <i data-feather="thumbs-up"></i></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                    Category
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse collapse show"
                                 aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body p-0">
                                    <div class="category-list-box">
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}">
                                                    <div class="category-name">
                                                        <h5>Latest Recipes</h5>
                                                        <span>10</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{url('/')}}">
                                                    <div class="category-name">
                                                        <h5>Diet Food</h5>
                                                        <span>6</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{url('/')}}">
                                                    <div class="category-name">
                                                        <h5>Low calorie Items</h5>
                                                        <span>8</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{url('/')}}">
                                                    <div class="category-name">
                                                        <h5>Cooking Method</h5>
                                                        <span>9</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{url('/')}}">
                                                    <div class="category-name">
                                                        <h5>Dairy Free</h5>
                                                        <span>12</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{url('/')}}">
                                                    <div class="category-name">
                                                        <h5>Vegetarian Food</h5>
                                                        <span>10</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                    Product Tags
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse collapse show"
                                 aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body pt-0">
                                    <div class="product-tags-box">
                                        <ul>

                                            <li>
                                                <a href="javascript:void(0)">Fruit Cutting</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">Meat</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">organic</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">cake</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">pick fruit</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">backery</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">organix food</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)">Most Expensive Fruit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseFour">
                                    Trending Products
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse collapse show"
                                 aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body">
                                    <ul class="product-list product-list-2 border-0 p-0">
                                        <li>
                                            <div class="offer-product">
                                                <a href="{{url('/')}}" class="offer-image">
                                                    <img src="../assets/images/vegetable/product/23.png"
                                                         class="blur-up lazyload" alt="">
                                                </a>

                                                <div class="offer-detail">
                                                    <div>
                                                        <a href="{{url('/')}}">
                                                            <h6 class="name">Meatigo Premium Goat Curry</h6>
                                                        </a>
                                                        <span>450 G</span>
                                                        <h6 class="price theme-color">$ 70.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="offer-product">
                                                <a href="{{url('/')}}" class="offer-image">
                                                    <img src="../assets/images/vegetable/product/24.png"
                                                         class="blur-up lazyload" alt="">
                                                </a>

                                                <div class="offer-detail">
                                                    <div>
                                                        <a href="{{url('/')}}">
                                                            <h6 class="name">Dates Medjoul Premium Imported</h6>
                                                        </a>
                                                        <span>450 G</span>
                                                        <h6 class="price theme-color">$ 40.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mb-0">
                                            <div class="offer-product">
                                                <a href="{{url('/')}}" class="offer-image">
                                                    <img src="../assets/images/vegetable/product/26.png"
                                                         class="blur-up lazyload" alt="">
                                                </a>

                                                <div class="offer-detail">
                                                    <div>
                                                        <a href="{{url('/')}}">
                                                            <h6 class="name">Apple Red Premium Imported</h6>
                                                        </a>
                                                        <span>1 KG</span>
                                                        <h6 class="price theme-color">$ 80.00</h6>
                                                    </div>
                                                </div>
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
    </div>
</section>
<!-- Blog Section End -->

<!-- Footer Section Start -->
<footer class="section-t-space">
     @include('footer1')
</footer>
<!-- Footer Section End -->

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
                                <a href="{{url('/')}}" class="deal-image">
                                    <img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="{{url('/')}}" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="{{url('/')}}" class="deal-image">
                                    <img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="{{url('/')}}" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="{{url('/')}}" class="deal-image">
                                    <img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="{{url('/')}}" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="{{url('/')}}" class="deal-image">
                                    <img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="{{url('/')}}" class="deal-contain">
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
