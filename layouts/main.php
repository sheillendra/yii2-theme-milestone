<?php

use sheillendra\hillter\assets\HillterAsset;

$hillterAsset = HillterAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- TITLE -->
        <title>Hillter</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <?php $this->head() ?>

        <!-- GOOGLE FONT -->
        
        <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>
        
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
       
    </head>

    <!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
    <!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
    <!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--><body> <!--<![endif]-->

        <?php $this->beginBody() ?>
        
        <!-- PRELOADER -->
        <div id="preloader">
            <span class="preloader-dot"></span>
        </div>
        <!-- END / PRELOADER -->

        <!-- PAGE WRAP -->
        <div id="page-wrap">

            <!-- HEADER -->
            <header id="header">

                <!-- HEADER TOP -->
                <div class="header_top">
                    <div class="container">
                        <div class="header_left float-left">
                            <span class="login-register">
                                <a href="login.html">Login</a>
                                <a href="register.html">register</a>
                            </span>
                        </div>
                        <div class="header_right float-right">

                            <div id="google_translate_element"></div>
                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                }
                            </script>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>                    

                        </div>
                    </div>
                </div>
                <!-- END / HEADER TOP -->

                <!-- HEADER LOGO & MENU -->
                <div class="header_content" id="header_content">

                    <div class="container">
                        <!-- HEADER LOGO -->
                        <div class="header_logo">
                            <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/logo-header.png" alt=""></a>
                        </div>
                        <!-- END / HEADER LOGO -->

                        <!-- HEADER MENU -->
                        <nav class="header_menu">
                            <ul class="menu">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <a href="about.html">Services</a>
                                </li>
                                <li>
                                    <a href="about.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="about.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- END / HEADER MENU -->

                        <!-- MENU BAR -->
                        <span class="menu-bars">
                            <span></span>
                        </span>
                        <!-- END / MENU BAR -->

                    </div>
                </div>
                <!-- END / HEADER LOGO & MENU -->

            </header>
            <!-- END / HEADER -->

            <!-- BANNER SLIDER -->
            <section class="section-slider">

                <div class="banner-slider" id="banner-slider">

                    <!-- ITEM -->
                    <div class="slider-item text-center" data-image="<?php echo $hillterAsset->baseUrl?>/images/slider/img-1.jpg">
                        <div class="slider-text">
                            <span class="slider-caption-sub slider-caption-sub-1">NEW bakery</span>
                            <h2 class="slider-caption slider-caption-1">bakery SALLAD</h2>
                            <a href="#" class="awe-btn awe-btn-12 awe-btn-slider">VIEW NOW</a>
                        </div>
                    </div>
                    <!-- ITEM -->

                    <!-- ITEM -->
                    <div class="slider-item text-center" data-image="<?php echo $hillterAsset->baseUrl?>/images/slider/img-2.jpg">
                        <div class="slider-text">
                            <span class="slider-caption-sub slider-caption-sub-2">EARLY BOOKING BONUS SALE</span>
                            <h2 class="slider-caption slider-caption-2">SAVE <small>UP<br/>TO</small> 60%</h2>
                            <a href="#" class="awe-btn awe-btn-default awe-btn-slider">VIEW NOW</a>
                        </div>
                    </div>
                    <!-- ITEM -->

                    <!-- ITEM -->
                    <div class="slider-item text-center" data-image="<?php echo $hillterAsset->baseUrl?>/images/slider/img-3.jpg">
                        <div class="slider-text">
                            <span class="slider-icon"><img src="<?php echo $hillterAsset->baseUrl?>/images/icon-slider-1.png" alt=""></span><br>
                            <span class="slider-caption-sub slider-caption-sub-3"><img src="<?php echo $hillterAsset->baseUrl?>/images/icon-slider-4.png" alt=""> EACH HOTEL IS <img src="<?php echo $hillterAsset->baseUrl?>/images/icon-slider-3.png" alt=""></span>
                            <h2 class="slider-caption slider-caption-3">UNIQUE 60%</h2>
                            <span class="slider-caption-sub slider-caption-sub-3">JUST LIKE YOU</span>
                            <br>
                            <span class="slider-icon"><img src="<?php echo $hillterAsset->baseUrl?>/images/icon-slider-2.png" alt=""></span>
                        </div>
                    </div>
                    <!-- ITEM -->

                </div>

            </section>
            <!-- END / BANNER SLIDER -->

            <!-- CHECK AVAILABILITY -->
            <section class="section-check-availability">
                <div class="container">
                    <div class="check-availability">
                        <div class="row">
                            <div class="col-lg-3">
                                <h2>CHECK AVAILABILITY</h2>
                            </div>
                            <div class="col-lg-9">
                                <form id="ajax-form-search-room" action="search_step_2.php" method="post">
                                    <div class="availability-form">
                                        <input type="text" name="date" class="awe-calendar from" placeholder="Date of Visit">
                                        <input type="text" name="time" class="awe-calendar to" placeholder="Time of Visit">

                                        <select class="awe-select" name="adults">
                                            <option>Adults</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                        <select class="awe-select" name="children">
                                            <option>Children</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                        <div class="vailability-submit">
                                            <button class="awe-btn awe-btn-13">SEARCH NOW</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END / CHECK AVAILABILITY -->

            <!-- ACCOMD ODATIONS -->
            <section class="section-accomd awe-parallax bg-14">
                <div class="awe-overlay"></div>

                <div class="container">
                    <div class="accomd-modations">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="accomd-modations-header">
                                    <h2 class="heading">OUR SERVICES</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-1">
                                <div class="accomd-modations-content owl-single">

                                    <div class="row">

                                        <!-- ITEM -->
                                        <div class="col-xs-6">
                                            <div class="accomd-modations-room">
                                                <div class="img">
                                                    <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/room/img-1.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="#">Luxury Room</a></h2>
                                                    <p class="price">
                                                        <span class="amout">$320</span>/days
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                        <!-- ITEM -->
                                        <div class="col-xs-6">
                                            <div class="accomd-modations-room">
                                                <div class="img">
                                                    <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/room/img-2.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="#">Family Room</a></h2>
                                                    <p class="price">
                                                        <span class="amout">$320</span>/days
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                        <!-- ITEM -->
                                        <div class="col-xs-6">
                                            <div class="accomd-modations-room">
                                                <div class="img">
                                                    <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/room/img-3.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="#">Couple Room</a></h2>
                                                    <p class="price">
                                                        <span class="amout">$320</span>/days
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                        <!-- ITEM -->
                                        <div class="col-xs-6">
                                            <div class="accomd-modations-room">
                                                <div class="img">
                                                    <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/room/img-4.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="#">Standard</a></h2>
                                                    <p class="price">
                                                        <span class="amout">$320</span>/day
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                    </div>

                                    <div class="row">

                                        <!-- ITEM -->
                                        <div class="col-xs-6">
                                            <div class="accomd-modations-room">
                                                <div class="img">
                                                    <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/room/img-1.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="#">Luxury Room</a></h2>
                                                    <p class="price">
                                                        <span class="amout">$320</span>/days
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                        <!-- ITEM -->
                                        <div class="col-xs-6">
                                            <div class="accomd-modations-room">
                                                <div class="img">
                                                    <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/room/img-2.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="#">Family Room</a></h2>
                                                    <p class="price">
                                                        <span class="amout">$320</span>/days
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                        <!-- ITEM -->
                                        <div class="col-xs-6">
                                            <div class="accomd-modations-room">
                                                <div class="img">
                                                    <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/room/img-3.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="#">Couple Room</a></h2>
                                                    <p class="price">
                                                        <span class="amout">$320</span>/days
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                        <!-- ITEM -->
                                        <div class="col-xs-6">
                                            <div class="accomd-modations-room">
                                                <div class="img">
                                                    <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/room/img-4.jpg" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="#">Standard</a></h2>
                                                    <p class="price">
                                                        <span class="amout">$320</span>/day
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- END / ACCOMD ODATIONS -->

            <!-- ABOUT -->
            <section class="section-home-about bg-white">
                <div class="container">
                    <div class="home-about">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img">
                                    <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/home/about/img-1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text">
                                    <h2 class="heading">ABOUT US</h2>
                                    <span>Lorem Ipsum is simply dummy text</span>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                    <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END / ABOUT -->

            <!-- OUR BEST -->
            <section class="section-our-best bg-white">
                <div class="container">

                    <div class="our-best">
                        <div class="row">

                            <div class="col-md-6 col-md-push-6">
                                <div class="img">
                                    <img src="<?php echo $hillterAsset->baseUrl?>/images/home/ourbest/img-1.jpg" alt="">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-pull-6 ">
                                <div class="text">
                                    <h2 class="heading">Why Us ?</h2>
                                    <p>One of Catalina Island's best-loved hotels, Hotel Vista Del Mar is recognized as one of Avalon's leading hotels with gracious island hospitality, thoughtful amenities and distinctive .</p>
                                    <ul>
                                        <li>Coffee maker</li>
                                        <li>25 inch or larger TV</li>
                                        <li>Cable/satellite TV channels</li>
                                        <li>AM/FM clock radio</li>
                                        <li>Voicemail</li>
                                        <li>Private concierge</li>
                                        <li>Oversized work desk</li>
                                        <li>Hairdryer</li>
                                        <li>Iron/ironing board upon request</li>
                                        <li>Dataport</li>
                                        <li>Phone access fees waived</li>
                                        <li>24-hour Concierge service</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            <!-- END / OUR BEST -->

            <!-- HOME GUEST BOOK -->
            <section class="section-home-guestbook awe-parallax bg-13">

                <div class="awe-overlay"></div>

                <div class="container">
                    <div class="home-guestbook">

                        <div class="row">
                            <div class="col-md-3 col-lg-2 col-lg-offset-1 col-lg-push-9 col-md-push-9">
                                <div class="guestbook-header">
                                    <h2 class="heading">GUEST BOOK</h2>
                                    <p>Your feedback means the world to us.</p>
                                    <a href="#" class="awe-btn awe-btn-default">VIEW MORE</a>
                                </div>
                            </div>

                            <div class="col-md-9 col-lg-9 col-lg-pull-3 col-md-pull-3">
                                <div class="guestbook-content owl-single">

                                    <!-- ITEM -->
                                    <div class="guestbook-item">
                                        <div class="img">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/avatar/img-5.jpg" alt="">
                                        </div>

                                        <div class="text">
                                            <p>This is the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your ocean view window and then to top it all off...</p>
                                            <span><strong>Seelentag</strong>From Los Angeles, California</span>
                                        </div> 
                                    </div>
                                    <!-- ITEM -->

                                    <!-- ITEM -->
                                    <div class="guestbook-item">
                                        <div class="img">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/avatar/img-5.jpg" alt="">
                                        </div>

                                        <div class="text">
                                            <p>This is the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your ocean view window and then to top it all off...</p>
                                            <span><strong>Seelentag</strong>From Los Angeles, California</span>
                                        </div> 
                                    </div>
                                    <!-- ITEM -->

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <!-- END / HOME GUEST BOOK -->

            <!-- GALLERY -->
            <section class="section-gallery bg-white">

                <div class="gallery  no-padding">
                    <h2 class="heading text-center">GALLERY</h2>

                    <!-- FILTER -->
                    <div class="gallery-cat text-center">
                        <ul class="list-inline">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                            <li><a href="#" data-filter=".suite">ROOM/SUITE </a></li>
                            <li><a href="#" data-filter=".bathroom">BATHROOM</a></li>
                            <li><a href="#" data-filter=".dining">DINING</a></li>
                        </ul>
                    </div>
                    <!-- END / FILTER -->

                    <!-- GALLERY CONTENT -->
                    <div class="gallery-content">
                        <div class="row">
                            <div class="gallery-isotope col-6 pd-0">

                                <!-- ITEM SIZE -->
                                <div class="item-size"></div>
                                <!-- END / ITEM SIZE -->
                                <!-- ITEM -->

                                <div class="item-isotope suite dining ">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground bathroom suite">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom dining">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope suite dining">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-4.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope  ground suite dining">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-5.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom dining">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-6.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground suite dining">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-7.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope bathroom suite dining">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-8.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope bathroom suite dining">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-9.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-10.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom suite ">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-11.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="item-isotope ground bathroom">
                                    <div class="gallery_item">
                                        <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                            <img src="<?php echo $hillterAsset->baseUrl?>/images/gallery/img-12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>
                        </div>

                        <div class="our-gallery text-center">
                            <a href="#" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>
                        </div>

                    </div>
                    <!-- GALLERY CONTENT -->

                </div>
            </section>
            <!-- END / GALLERY -->

            <!-- FOOTER -->
            <footer id="footer">

                <!-- FOOTER TOP -->
                <div class="footer_top">
                    <div class="container">
                        <div class="row">

                            <!-- WIDGET MAILCHIMP -->
                            <div class="col-lg-8">
                                <div class="mailchimp">
                                    <h4>News &amp; Offers</h4>
                                    <div class="mailchimp-form">
                                        <form action="#" method="POST">
                                            <input type="text" name="email" placeholder="Your email address" class="input-text">
                                            <button class="awe-btn">SIGN UP</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END / WIDGET MAILCHIMP -->

                            <!-- WIDGET SOCIAL -->
                            <div class="col-lg-3 col-lg-offset-1">
                                <div class="social">
                                    <div class="social-content">
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / WIDGET SOCIAL -->

                        </div>
                    </div>
                </div>
                <!-- END / FOOTER TOP -->

                <!-- FOOTER CENTER -->
                <div class="footer_center">
                    <div class="container">
                        <div class="row">

                            <div class="col-xs-12 col-lg-5">
                                <div class="widget widget_logo">
                                    <div class="widget-logo">
                                        <div class="img">
                                            <a href="#"><img src="<?php echo $hillterAsset->baseUrl?>/images/logo-footer.png" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <p><i class="hillter-icon-location"></i> 225 Beach Street, Australian</p>
                                            <p><i class="hillter-icon-phone"></i> 1-548-854-8898</p>
                                            <p><i class="fa fa-envelope-o"></i> <a href="mailto:hillterhotel@gmail.com">hillterhotel@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4 col-lg-2">
                                <div class="widget">
                                    <h4 class="widget-title">Services</h4>
                                    <ul>
                                        <li><a href="#">Guest Book</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Event</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xs-4 col-lg-2">
                                <div class="widget">
                                    <h4 class="widget-title">ABOUT</h4>
                                    <ul>
                                        <li><a href="">About</a></li>
                                        <li><a href="">Blog</a></li>
                                        <li><a href="">Contact Us</a></li>
                                        <li><a href="">Comming Soon</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xs-4 col-lg-3">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END / FOOTER CENTER -->

                <!-- FOOTER BOTTOM -->
                <div class="footer_bottom">
                    <div class="container">
                        <p>&copy; 2015 Hillter Hotel All rights reserved.</p>
                    </div>
                </div>
                <!-- END / FOOTER BOTTOM -->

            </footer>
            <!-- END / FOOTER -->

        </div>
        <!-- END / PAGE WRAP -->


        <!-- LOAD JQUERY -->
        
        <?php $this->endBody() ?>
        
        <!--
        <script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
        <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
        <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
        <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
        <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
        
        <script type="text/javascript" src="js/lib/jquery.form.min.js"></script>
        <script type="text/javascript" src="js/lib/jquery.validate.min.js"></script>
        
        <script type="text/javascript" src="js/scripts.js"></script>
        -->
        
    </body>
</html>
<?php $this->endPage() ?>