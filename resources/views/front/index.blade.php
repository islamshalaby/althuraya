<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>preGame - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/front/assets/img/favicon.png" rel="icon">
    <link href="/front/assets/img/web-icon.png" rel="web-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- lib CSS Files -->
    <link href="/front/assets/lib/animate.css/animate.min.css" rel="stylesheet">
    <link href="/front/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/front/assets/lib/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/front/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/front/assets/lib/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/front/assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= sitebar Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="closeSidebars">
            <span class="close-box-collapse right-boxed bi bi-x"></span>
        </div>

        <div class="box-collapse-wrap form">
            <a href="#" class="LogoSidebars"><img src="/front/assets/img/logo.png"></a>
            <div class="flex-shrink-0 bg-white">
                <a href="{{route('front.home')}}" class="d-flex align-items-left pb-3 mb-3 link-dark text-decoration-none border-bottom">
                    <span class="fs-5 fw-semibold">Shopping by category</span>
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle btn-dropdown rounded" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                            Digital Stores
                        </button>
                        <div class="collapse show" id="home-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Drop Down 1</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 2</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 3</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 4</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 4</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 6</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="mb-1">
                        <button class="btn btn-toggle ">
                            Communication
                        </button>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle btn-dropdown rounded collapsed" data-bs-toggle="collapse" data-bs-target="#Platforms-collapse" aria-expanded="false">
                            Gaming Platforms
                        </button>
                        <div class="collapse" id="Platforms-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Drop Down 1</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 2</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 3</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 4</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle btn-dropdown rounded collapsed" data-bs-toggle="collapse" data-bs-target="#Game-collapse" aria-expanded="false">
                            Game cards
                        </button>
                        <div class="collapse" id="Game-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Drop Down 1</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 2</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 3</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 4</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle btn-dropdown rounded collapsed" data-bs-toggle="collapse" data-bs-target="#Shopping-collapse" aria-expanded="false">
                            Shopping Cards
                        </button>
                        <div class="collapse" id="Shopping-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Drop Down 1</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 2</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 3</a></li>
                                <li><a href="#" class="link-dark rounded">Drop Down 4</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle btn-dropdown rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                            Account
                        </button>
                        <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Profile</a></li>
                                <li><a href="#" class="link-dark rounded">Settings</a></li>
                                <li><a href="#" class="link-dark rounded">Sign out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End sitebar Section -->

    <!-- ======= Header/Navbar ======= -->
    <header>
        <!-- TopBar -->
        <div id="topbar" class="d-flex align-items-center">
            <div class="container d-flex justify-content-between">
                <div class="d-none d-sm-flex TopBarRight align-items-center">
                    <a href="#" class="twitter"><i class="fa fa-arrow"></i> Terms and Conditions</a>
                </div>
                <div class="contact-info d-flex TopBarLeft align-items-center">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="bi bi-currency-exchange"></i>Currency</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item " href="#">Kuwaiti Dinar (KWD)</a>
                                <a class="dropdown-item " href="#">Saudi Riyal (SAR)</a>
                                <a class="dropdown-item " href="#">Egyptian Pound (EGP)</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><img
                                        src="/front/assets/img/fg-usa.PNG" border="0" /> </span>Einglish</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item " href="#"><span><img src="/front/assets/img/fg-sa.PNG" border="0" />
                                    </span>Arabic</a>
                                <a class="dropdown-item " href="#"><span><img src="/front/assets/img/fg-fr.PNG" border="0" />
                                    </span>French</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="login.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-person-fill"></i>Sign
                                In</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item " href="my-requests.html">Previous Requests</a>
                                    <a class="dropdown-item " href="change-password.html">Change Password</a>
                                    <a class="dropdown-item " href="login.html">Sign out</a>
                                </div>
                        </li>

                    </ul>

                </div>

            </div>
        </div>
        <!-- End TopBar -->

        <!-- Header Logo & Search -->
        <div class="container">
            <div class="inner-header">
                <div class="row align-items-end align-items-md-center">
                    <div class="col-lg-2 col-md-2 col-5 order-md-1">
                        <div class="logo">
                            <a href="{{route('front.home')}}">
                                <img src="/front/assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3 col-7 order-md-3">
                        <div class="d-flex justify-content-end">
                            <ul class="nav-right">
                                <li class="heart-icon">
                                    <a href="favorite.html">
                                        <div> <i class="bi bi-heart"></i>
                                            <span>1</span>
                                        </div>
                                        <p>
                                            Favorite
                                        </p>
                                    </a>
                                </li>
                                <li class="cart-icon">
                                    <a href="#">
                                        <div>
                                            <i class="bi bi-bag"></i>
                                            <span>3</span>
                                        </div>
                                        <p>Cart</p>
                                    </a>
                                    <div class="cart-hover">
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    <tr class="cartSlide">
                                                        <td class="si-pic"><img src="/front/assets/img/1_02.jpg" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>$60.00 x 2</p>
                                                                <h6>FIFA 21 | Next Level Speed</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="bi bi-x"></i>
                                                        </td>
                                                    </tr>
                                                    <tr class="cartSlide">
                                                        <td class="si-pic"><img src="/front/assets/img/1_03.jpg" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>$60.00 x 1</p>
                                                                <h6>FIFA 21 | Next Level Speed</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="bi bi-x"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>$120.00</h5>
                                        </div>
                                        <div class="select-button">
                                            <a href="cart.html" class="primary-btn view-card">VIEW CARD</a>
                                            <a href="Payment.html" class="primary-btn checkout-btn">CHECK OUT</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 order-md-2">
                        <div class="input-group search_top select">
                            <select class="minimal" name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
                                <option>All Categories</option>
                                <option>item2</option>
                                <option>item3</option>
                            </select>
                            <span class="lineSearch"></span>
                            <input type="text" class="form-control" name="x" placeholder="Search term...">

                            <span class="input-group-btn">
                                <a href="#" class="btn btn-default hvr-icon-pop" type="button">Search</a>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Header Logo & Search -->

        <!-- Nav -->
        <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
            <div class="container navbarTop">

                <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                    <i class="bi bi-list"></i>
                </button>
                <div class="header-container d-flex align-items-center justify-content-between">
                    <div id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link  active" href="{{route('front.home')}}">Home</a></li>
                            <li class=""><a class="nav-link" href="{{route('front.about')}}">About Us</a></li>
                            <li class="dropdown scr Mob-d"><a href="{{route('front.categories')}}"><span> categories</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Drop Down 1</a></li>
                                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="#">Deep Drop Down 1</a></li>
                                            <li><a href="#">Deep Drop Down 2</a></li>
                                            <li><a href="#">Deep Drop Down 3</a></li>
                                            <li><a href="#">Deep Drop Down 4</a></li>
                                            <li><a href="#">Deep Drop Down 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Drop Down 2</a></li>
                                    <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link " href="{{route('front.products')}}">Offers<span class="Hot">Hot</span></a></li>
                            <li class=""><a class="nav-link" href="{{route('front.contact')}}">Contact</a></li>

                        </ul>
                    </div>
                    <!-- .navbar -->

                </div>


            </div>
        </nav>
        <!-- End nav -->
    </header>

    <!-- End Header/Navbar -->

    <!-- ======= slider Section ======= -->
    <div class="intro intro-carousel swiper-container container">

        <div class="swiper-wrapper">

            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">February offers (1)

                                        </p>
                                        <h1 class="intro-title mb-4 ">
                                            <span class="color-b">2021 </span> FIFA
                                            <br>Next Level Speed
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">Price | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">February offers (2)

                                        </p>
                                        <h1 class="intro-title mb-4 ">
                                            <span class="color-b">2021 </span> FIFA
                                            <br>Next Level Speed
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">Price | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">February offers (3)

                                        </p>
                                        <h1 class="intro-title mb-4 ">
                                            <span class="color-b">2021 </span> FIFA
                                            <br>Next Level Speed
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">Price | $ 12.000</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- End slider Section -->

    <main id="main">

        <!-- ======= Categories Section ======= -->
        <section class="section-services section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Categories</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="view view-sixth">
                            <img src="/front/assets/img/6.jpg">
                            <div class="mask">
                                <h2>Category (1)</h2>
                                <a href="products-list.html" class="info">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="view view-sixth">
                            <img src="/front/assets/img/5.jpg">
                            <div class="mask">
                                <h2>Category (1)</h2>
                                <a href="products-list.html" class="info">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="view view-sixth">
                            <img src="/front/assets/img/3.jpg">
                            <div class="mask">
                                <h2>Category (1)</h2>
                                <a href="products-list.html" class="info">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="view view-sixth">
                            <img src="/front/assets/img/4.jpg">
                            <div class="mask">
                                <h2>Category (1)</h2>
                                <a href="products-list.html" class="info">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="view view-sixth">
                            <img src="/front/assets/img/5.jpg">
                            <div class="mask">
                                <h2>Category (1)</h2>
                                <a href="products-list.html" class="info">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="view view-sixth">
                            <img src="/front/assets/img/4.jpg">
                            <div class="mask">
                                <h2>Category (1)</h2>
                                <a href="products-list.html" class="info">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="view view-sixth">
                            <img src="/front/assets/img/6.jpg">
                            <div class="mask">
                                <h2>Category (1)</h2>
                                <a href="products-list.html" class="info">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="view view-sixth">
                            <img src="/front/assets/img/3.jpg">
                            <div class="mask">
                                <h2>Category (1)</h2>
                                <a href="products-list.html" class="info">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Latest products Section ======= -->



        <section class="section-products section-t8">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Products</h2>
                            </div>
                            <div class="title-link">
                                <a href="#">All Products
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="products-carousel" class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-b swiper-slide">
                            <div class="card productList">
                                <div class="view view-sixth card-img-top">
                                    <a href="#" class="favorite-pr Active"><i></i></a>
                                    <img src="/front/assets/img/1_02.jpg">
                                    <div class="mask ">
                                        <div class="actionBut">
                                            <a href="#" class="AddCart info">Add To Cart</a>
                                            <a href="product-details.html" class="info viewProduct">View product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Buy an iTunes card 100 KWD and enter the draw to win a 1000 KWD iTunes card</p>
                                    <div class="PriceDiscount">
                                        <div class="PriceBox">
                                            <span>370 KWD</span> 300 KWD
                                        </div>
                                        <div class="DiscountBox">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card productList">
                                <div class="view view-sixth card-img-top">
                                    <a href="#" class="favorite-pr "><i></i></a>
                                    <img src="/front/assets/img/1_03.jpg">
                                    <div class="mask ">
                                        <div class="actionBut">
                                            <a href="#" class="AddCart info">Add To Cart</a>
                                            <a href="product-details.html" class="info viewProduct">View product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Buy an iTunes card 100 KWD and enter the draw to win a 1000 KWD iTunes card</p>
                                    <div class="PriceDiscount">
                                        <div class="PriceBox">
                                            <span>370 KWD</span> 300 KWD
                                        </div>
                                        <div class="DiscountBox">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card productList">
                                <div class="view view-sixth card-img-top">
                                    <a href="#" class="favorite-pr"><i></i></a>
                                    <img src="/front/assets/img/1_02.jpg">
                                    <div class="mask ">
                                        <div class="actionBut">
                                            <a href="#" class="AddCart info">Add To Cart</a>
                                            <a href="product-details.html" class="info viewProduct">View product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Buy an iTunes card 100 KWD and enter the draw to win a 1000 KWD iTunes card</p>
                                    <div class="PriceDiscount">
                                        <div class="PriceBox">
                                            <span>370 KWD</span> 300 KWD
                                        </div>
                                        <div class="DiscountBox">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-b swiper-slide">
                            <div class="card productList">
                                <div class="view view-sixth card-img-top">
                                    <a href="#" class="favorite-pr"><i></i></a>
                                    <img src="/front/assets/img/1_03.jpg">
                                    <div class="mask ">
                                        <div class="actionBut">
                                            <a href="#" class="AddCart info">Add To Cart</a>
                                            <a href="product-details.html" class="info viewProduct">View product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Buy an iTunes card 100 KWD and enter the draw to win a 1000 KWD iTunes card</p>
                                    <div class="PriceDiscount">
                                        <div class="PriceBox">
                                            <span>370 KWD</span> 300 KWD
                                        </div>
                                        <div class="DiscountBox">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->
                        <div class="carousel-item-b swiper-slide">
                            <div class="card productList">
                                <div class="view view-sixth card-img-top">
                                    <a href="#" class="favorite-pr"><i></i></a>
                                    <img src="/front/assets/img/1_02.jpg">
                                    <div class="mask ">
                                        <div class="actionBut">
                                            <a href="#" class="AddCart info">Add To Cart</a>
                                            <a href="product-details.html" class="info viewProduct">View product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Buy an iTunes card 100 KWD and enter the draw to win a 1000 KWD iTunes card</p>
                                    <div class="PriceDiscount">
                                        <div class="PriceBox">
                                            <span>370 KWD</span> 300 KWD
                                        </div>
                                        <div class="DiscountBox">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-carousel-pagination carousel-pagination"></div>

            </div>
        </section>
        <!-- End Latest products Section -->

        <!-- ======= Banner Section ======= -->
        <section class="section-agents section-t8">
            <div class="container">
                <div class="BannerHome"><img src="/front/assets/img/banner.jpg"></div>
            </div>
        </section>
        <!-- End Banner Section -->

        <!-- ======= Latest Offers Section ======= -->
        <section class="section-Offers section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Offers</h2>
                            </div>
                            <div class="title-link">
                                <a href="blog-grid.html">All News
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="offer-carousel" class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="carousel-item-c swiper-slide">
                            <div class="card productList">
                                <div class="view view-sixth card-img-top">
                                    <a href="#" class="favorite-pr"><i></i></a>
                                    <img src="/front/assets/img/1_03.jpg">
                                    <div class="mask ">
                                        <div class="actionBut">
                                            <a href="#" class="AddCart info">Add To Cart</a>
                                            <a href="product-details.html" class="info viewProduct">View product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Buy an iTunes card 100 KWD and enter the draw to win a 1000 KWD iTunes card</p>
                                    <div class="PriceDiscount">
                                        <div class="PriceBox">
                                            <span>370 KWD</span> 300 KWD
                                        </div>
                                        <div class="DiscountBox">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-c swiper-slide">
                            <div class="card productList">
                                <div class="view view-sixth card-img-top">
                                    <a href="#" class="favorite-pr"><i></i></a>
                                    <img src="/front/assets/img/1_02.jpg">
                                    <div class="mask ">
                                        <div class="actionBut">
                                            <a href="#" class="AddCart info">Add To Cart</a>
                                            <a href="product-details.html" class="info viewProduct">View product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Buy an iTunes card 100 KWD and enter the draw to win a 1000 KWD iTunes card</p>
                                    <div class="PriceDiscount">
                                        <div class="PriceBox">
                                            <span>370 KWD</span> 300 KWD
                                        </div>
                                        <div class="DiscountBox">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-c swiper-slide">
                            <div class="card productList">
                                <div class="view view-sixth card-img-top">
                                    <a href="#" class="favorite-pr"><i></i></a>
                                    <img src="/front/assets/img/1_03.jpg">
                                    <div class="mask ">
                                        <div class="actionBut">
                                            <a href="#" class="AddCart info">Add To Cart</a>
                                            <a href="product-details.html" class="info viewProduct">View product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Buy an iTunes card 100 KWD and enter the draw to win a 1000 KWD iTunes card</p>
                                    <div class="PriceDiscount">
                                        <div class="PriceBox">
                                            <span>370 KWD</span> 300 KWD
                                        </div>
                                        <div class="DiscountBox">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                        <div class="carousel-item-c swiper-slide">
                            <div class="card productList">
                                <div class="view view-sixth card-img-top">
                                    <a href="#" class="favorite-pr"><i></i></a>
                                    <img src="/front/assets/img/1_02.jpg">
                                    <div class="mask ">
                                        <div class="actionBut">
                                            <a href="#" class="AddCart info">Add To Cart</a>
                                            <a href="product-details.html" class="info viewProduct">View product</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Buy an iTunes card 100 KWD and enter the draw to win a 1000 KWD iTunes card</p>
                                    <div class="PriceDiscount">
                                        <div class="PriceBox">
                                            <span>370 KWD</span> 300 KWD
                                        </div>
                                        <div class="DiscountBox">
                                            20%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End carousel item -->

                    </div>
                </div>

                <div class="offer-carousel-pagination carousel-pagination"></div>
            </div>
        </section>
        <!-- End Latest Offers Section -->


    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 ">
                        <h4>Contact Us</h4>
                        <div class="footer-MailLinks">
                            <p>
                                <i class="fa fa-phone"></i> +1 5589 55488 55 </p>
                            <a href="#"> <i class="fa fa-envelope-open"></i> info@example.com</a>
                        </div>

                        <h5>Our Social Networks</h5>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>informations</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">FAQs</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Main Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Offers</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>يمكنك تحميل التطبيق من خلال :<span>.</span></h4>
                        <div class="d-flex dowFooter">
                            <a href="#"><img src="/front/assets/img/dow2.png" alt="" /></a>
                            <a href="https://play.google.com/store/apps/details?id=com.usmart.com.althuraya"><img src="/front/assets/img/dow.png" alt="" /></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-footer">
            <div class="container">
                <p class="copyright color-text-a">
                    © Copyright
                    <span class="color-a"> PreGame</span> All Rights Reserved.
                </p>
                <div class="credits">

                    Designed by <a href="#">company name</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/front/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/front/assets/lib/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="/front/assets/js/main.js"></script>

</body>

</html>
