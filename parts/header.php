<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sharpex</title>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>


<?php
    if (stripos($_SERVER['REQUEST_URI'], 'main.php') || $_SERVER['REQUEST_URI'] === '/')
        $class = 'main-page' ;
    else if (stripos($_SERVER['REQUEST_URI'], 'catalog.php'))
        $class = 'page-catalog';
    else
        $class = 'not-main';
?>

<body class="<?php echo $class; ?>">
<header>
    <div class="top-head">
        <div class="container ">
            <div class="row">

                <div class="col-xs-6 country-tel ">
                        <p class="inline v-al-center hidden-xs">Ukraine</p>
                        <span class="pol inline  v-al-center  hidden-xs"></span>
                        <a href="tel:+3801231212" class="inline v-al-center"> +3 80 123 12 12</a>
                </div>

                <div class="col-xs-6">
                    <ul class="list-unstyled">
                        <li class="pull-right">
                            <button href="#" class="enter-shop">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                Sign in
                            </button>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


    <div class="middle-head">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-4">
                    <a href="/" class="main-logo"><img src="img/logo.svg" alt=""></a>
                </div>
                <div class="col-md-7 hidden-sm hidden-xs">
                    <form action="" class="top-search">
                        <div class="pull-right">
                            <div class="input-group">
                                <input type="text" value="" name="search" class="form-control input-lg" placeholder="Search...">

                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-lg">
                                    <i class="fa fa-search"></i></button>
                                </span>

                            </div>
                        </div>
                    </form>                    
                </div>
                <div class="col-md-3 col-xs-8">
                    <div class="pull-right">
                        <a href="#" class="main-cart">
                            <span class="cart-image inline v-al-center"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <span class="cart-text inline v-al-center">
                            <span class="cart-name">Shopping Bag</span>
                            <span class="cart-value">
                                2 items - 2548 UAH
                            </span>
                        </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bottom-head">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hidden-md hidden-lg">
                        <div class="pull-right">
                            <button class=" btn btn-lg mobile-bar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="" id="main-menu">
                        <ul class="flex-row list-unstyled flex-j-between flex-a-center ">
                            <li class="m-cat hidden-md hidden-lg text-right orange-block">
                                <button class="btn mobile-close-menu"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="/">Main</a>
                          </li>
                          <li>
                              <span class="pol">|</span>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="about-company.php">About</a>
                          </li>
                          <li>
                              <span class="pol">|</span>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="delivery.php">Payment and delivery</a>
                          </li>
                          <li>
                              <span class="pol">|</span>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link disabled" href="question-answer.php">Question-answer
                              </a>
                          </li>
                          <li>
                              <span class="pol">|</span>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link disabled" href="news.php">News
                              </a>
                          </li>
                          <li>
                              <span class="pol">|</span>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link disabled" href="contacts.php">Contacts
                              </a>
                          </li>
                           <li class="m-cat hidden-md hidden-lg">
                               <a href="catalog.php">Sharpeners</a>
                           </li>
                            <li class="m-cat hidden-md hidden-lg">
                                <a href="catalog.php">Sharpening</a>
                            </li>
                            <li class="m-cat hidden-md hidden-lg">
                                <a href="catalog.php">Polishing</a>
                            </li>
                            <li class="m-cat hidden-md hidden-lg">
                                <a href="catalog.php">Accessories</a>
                            </li>
                            <li class="m-cat hidden-md hidden-lg">
                                <a href="catalog.php">Knives</a>
                            </li>
                            <li class="m-cat hidden-md hidden-lg">
                                <a href="catalog.php">Additional category</a>
                            </li>
                            <li class="m-cat hidden-md hidden-lg">
                                <a href="catalog.php">New category</a>
                            </li>
                            <li class="m-cat hidden-md hidden-lg">
                                <a href="catalog.php">Outlet items</a>
                            </li>
                            <li class="m-cat hidden-md hidden-lg">
                                <form action="" class="top-search">

                                        <div class="input-group">
                                            <input type="text" value="" name="search" class="form-control input-lg" placeholder="Search...">

                                            <span class="input-group-btn">
                                    <button class="btn btn-default btn-lg">
                                    <i class="fa fa-search"></i></button>
                                </span>

                                        </div>

                                </form>
                            </li>

                        </ul>
                    </div>

                </div>




                </div>

            </div>
        </div>
    </div>





</header>

<div class="container" id="category-slider">
    <div class="row">
        <div class="col-md-3" id="wrapper-categories">
            <div class="cat-menu">
                <div class="cat-head flex-row flex-a-center">
                    <button class="btn btn-lg"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    <span>categories</span>
                </div>
                <ul class="list-unstyled categories">
                    <li>
                        <a href="#">Sharpeners</a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Hapstone V6</a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">Hapstone V6</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Hapstone Rotate Kit</a>
                            </li>
                            <li>
                                <a href="#">Hapstone Kitchen Kit</a>
                            </li>
                            <li>
                                <a href="#">Hapstone Kit Opti 1</a>
                            </li>
                            <li>
                                <a href="#">Hapstone Kit Opti 2</a>
                            </li>
                            <li>
                                <a href="#">Hapstone Kit Maxi </a>
                            </li>
                            <li>
                                <a href="#">Hapstone Kit Luxe </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Sharpening</a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Lorem</a>
                            </li>
                            <li>
                                <a href="#">Lorem 1</a>
                            </li>
                        </ul></li>
                    <li>
                        <a href="#">Polishing</a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Lorem 2</a>
                            </li>
                            <li>
                                <a href="#">Lorem 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Accessories</a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Lorem 4</a>
                            </li>
                            <li>
                                <a href="#">Lorem 5</a>
                            </li>
                            <li>
                                <a href="#">Lorem 6</a>
                            </li>
                            <li>
                                <a href="#">Lorem 7</a>
                            </li>
                            <li>
                                <a href="#">Lorem 8</a>
                            </li>
                            <li>
                                <a href="#">Lorem 9</a>
                            </li>
                            <li>
                                <a href="#">Lorem 10</a>
                            </li>
                            <li>
                                <a href="#">Lorem 11</a>
                            </li>
                            <li>
                                <a href="#">Lorem 12</a>
                            </li>
                            <li>
                                <a href="#">Lorem 13</a>
                            </li>
                            <li>
                                <a href="#">Lorem 14</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Knives</a></li>
                    <li><a href="#">Additional category</a></li>
                    <li><a href="#">New category</a></li>
                    <li><a href="#">Outlet items</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9" id="slider">
            <div class="owl-carousel" id="top-slides">
                <div class="item">
                    <div class="block-image">
                        <img src="img/slide-1.jpg" alt="slide1">
                    </div>
                    <h2>
                        Rotating mechanism HAPSTONE
                    </h2>
                    <p>
                        Rotating mechanism HAPSTONE designed for installation on sharpening system HAPSTONE PRO is used for knife coup
                    </p>
                    <a href="#" class="learn-more">learn more</a>

                    <div class="wr-price">
                        <span class="old-price"><span class="val">3850</span> <span class="currency">UAH</span></span>
                        <span class="price"><span class="val">3213</span> <span class="currency">UAH</span></span>
                    </div>

                    <button class="btn btn-lg btn-buy buy-lg"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to card</button>
                </div>
                <div class="item">
                    <div class="block-image">
                        <img src="img/slide-1.jpg" alt="slide1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





