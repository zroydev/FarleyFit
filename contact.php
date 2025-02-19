<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From: ".$name."<".$email.">\r\n";

    $recipient = "zack@farleyfit.com";

    mail($recipient, $subject, $message, $mailheader)
    or die('Error!');

    echo '<!DOCTYPE html>
    <html lang="en-US" class="no-js">
    
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    
        <title>FAQ - FarleyFit</title>
    
        <script src="https://kit.fontawesome.com/05a4fe5c8d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../js/plugins/goodlayers-core/plugins/fontawesome/font-awesome.css" type="text/css"
            media="all" />
        <link rel="stylesheet" href="../js/plugins/goodlayers-core/plugins/fa5/fa5.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../js/plugins/goodlayers-core/plugins/elegant/elegant-font.css" type="text/css"
            media="all" />
        <link rel="stylesheet" href="../js/plugins/goodlayers-core/plugins/ionicons/ionicons.css" type="text/css"
            media="all" />
        <link rel="stylesheet" href="../js/plugins/goodlayers-core/plugins/simpleline/simpleline.css" type="text/css"
            media="all" />
        <link rel="stylesheet" href="../js/plugins/goodlayers-core/plugins/gdlr-custom-icon/gdlr-custom-icon.css"
            type="text/css" media="all" />
        <link rel="stylesheet" href="../js/plugins/goodlayers-core/plugins/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../js/plugins/goodlayers-core/include/css/page-builder.css" type="text/css"
            media="all" />
        <link rel="stylesheet" href="../js/plugins/mp-timetable/media/css/style.css?ver=2.4.2" type="text/css"
            media="all" />
        <link rel="stylesheet" href="../css/style-core.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/zyth-style-custom.css" type="text/css" media="all" />
        <link rel="stylesheet" href="../js/plugins/revslider/public/assets/css/rs6.css?ver=6.5.8" type="text/css"
            media="all" />
    
    
        <link rel="icon" href="../favicon-32x32.png" sizes="32x32" />
        <link rel="icon" href="../favicon-192x192.png" sizes="192x192" />
    
    </head>
    
    <body
        class="home page-template-default page page-id-14670 theme-zyth gdlr-core-body woocommerce-no-js zyth-body zyth-body-front zyth-full zyth-with-sticky-navigation zyth-blockquote-style-3 gdlr-core-link-to-lightbox"
        data-home-url="#">
        <div class="zyth-mobile-header-wrap">
            <div class="zyth-mobile-header zyth-header-background zyth-style-slide zyth-sticky-mobile-navigation"
                id="zyth-mobile-header">
                <div class="zyth-mobile-header-container zyth-container clearfix">
                    <div class="zyth-logo zyth-item-pdlr">
                        <div class="zyth-logo-inner">
                            <a class="zyth-fixed-nav-logo" href="#">
                                <img src="../images/logo-g-light.png" alt="11" width="218" title="logo-fixed" />
                            </a>
                            <a class="zyth-orig-logo" href="#"><img src="../images/logo-g-light.png" alt="11" width="363"
                                    height="100" title="logo-fixedx2" /></a>
                        </div>
                    </div>
                    <div class="zyth-mobile-menu-right">
    
    
                        <!-- MOBILE MENU -->
    
                        <div class="zyth-modern-menu zyth-mobile-menu" id="zyth-mobile-menu" data-back-text="Back">
                            <a class="zyth-modern-menu-icon zyth-mobile-menu-button zyth-mobile-button-hamburger"
                                href="#"><span></span></a>
                            <div class="zyth-modern-menu-nav-base">
                                <ul id="menu-main-navigation" class="menu">
                        <li class="menu-item"><a href="/">Home</a></li>
                        <li class="menu-item current-menu-item menu-item-has-children">
                                        <a href="/about">About</a>
                                        <!-- <ul class="sub-menu">
                                            <li class="menu-item"><a href="/faq">FAQ</a></li>
                                        </ul> -->
                                    </li>
                        <li class="menu-item"><a href="/plans">Plans</a></li>
                        <li class="menu-item"><a href="/reviews">Reviews</a></li>
                        <li class="menu-item"><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="zyth-modern-menu-content zyth-navigation-font">
                        <div class="zyth-modern-menu-display">
                        <div class="zyth-modern-menu-close"></div>
                         <div class="zyth-modern-menu-nav"></div>
                    </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="zyth-body-outer-wrapper">
    
            <!-- <div class="zyth-float-social" id="zyth-float-social">
                <span class="zyth-head">Follow Us On</span><span class="zyth-divider"></span><a href="#" target="_blank"
                    class="zyth-float-social-icon" title="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" target="_blank" class="zyth-float-social-icon" title="pinterest"><i
                        class="fa fa-pinterest-p"></i></a><a href="#" target="_blank" class="zyth-float-social-icon"
                    title="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" target="_blank" class="zyth-float-social-icon" title="instagram"><i
                        class="fa fa-instagram"></i></a>
            </div> -->
    
            <!-- MAIN NAV -->
    
            <div class="zyth-body-wrapper clearfix zyth-with-transparent-header zyth-with-frame">
                <div class="zyth-header-background-transparent">
                    <div class="zyth-top-bar zyth-inner">
                        <div class="zyth-top-bar-background"></div>
                        <div class="zyth-top-bar-container zyth-top-bar-full">
                            <div class="zyth-top-bar-container-inner clearfix">
                                <!-- <div class="zyth-top-bar-right-button">
                                    <a class="zyth-top-bar-button zyth-button-1" href="join-us.html" target="_self">
                                        <span>Join Us<i class="gdlr-icon-muscle"></i></span>
                                    </a>
                                    <a class="zyth-top-bar-button zyth-button-2" href="contact.html" target="_self">
                                        <span>Download App<i class="fa-brands fa-app-store-ios">&nbsp;<i
                                                    class="fa-brands fa-google-play"></i></i></span>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <header
                        class="zyth-header-wrap zyth-header-style-plain zyth-style-menu-right zyth-sticky-navigation zyth-style-slide"
                        data-navigation-offset="75">
                        <div class="zyth-header-background"></div>
                        <div class="zyth-header-container zyth-header-full">
                            <div class="zyth-header-container-inner clearfix">
                                <div class="zyth-logo zyth-item-pdlr">
                                    <div class="zyth-logo-inner">
                                        <a class="zyth-fixed-nav-logo" href="#">
                                            <img src="../images/logo-g-light.png" alt="11" width="218" title="logo-fixed" />
                                        </a>
                                        <a class="zyth-orig-logo" href="#">
                                            <img src="../images/logo-g-light.png" alt="11" width="363" height="100"
                                                title="logox1" />
                                        </a>
                                    </div>
                                </div>
                                <div class="zyth-navigation zyth-item-pdlr clearfix">
                                    <div class="zyth-main-menu" id="zyth-main-menu">
                                        <ul id="menu-main-navigation-1" class="sf-menu">
                                            <li class="menu-item menu-item-has-children zyth-normal-menu">
                                                <a href="/" class="sf-with-ul-pre">Home</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children zyth-normal-menu">
                                                <a href="/about" class="sf-with-ul-pre">About</a>
                                                <!-- <ul class="sub-menu">
                                                    <li class="menu-item"><a href="/faq">FAQ</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item menu-item-has-children zyth-normal-menu">
                                                <a href="/plans" class="sf-with-ul-pre">Plans</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children zyth-normal-menu">
                                                <a href="/reviews" class="sf-with-ul-pre">Reviews</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children current-menu-item zyth-normal-menu">
                                                <a href="/contact" class="sf-with-ul-pre">Contact</a>
                                            </li>
                                        </ul>
                                        <div class="zyth-navigation-slide-bar zyth-navigation-slide-bar-style-2 zyth-left"
                                            data-size-offset="0" data-width="34px" id="zyth-navigation-slide-bar"></div>
                                    </div>
                                    <div class="zyth-main-menu-right-wrap clearfix">
                                        <div class="zyth-side-content-menu-button"><span></span></div>
                                    </div>
                                </div>
                                <!-- zyth-navigation -->
                            </div>
                            <!-- zyth-header-inner -->
                        </div>
                        <!-- zyth-header-container -->
                    </header>
                    <!-- header -->
                </div>
    
                <div class="zyth-page-wrapper contact-title" id="zyth-page-wrapper">
                    <div class="gdlr-core-page-builder-body">
                        <div class="gdlr-core-pbf-wrapper" style="padding: 320px 0px 180px 0px;" data-skin="white" id="gdlr-core-wrapper-1">
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #0a0a0a;">
                                <div
                                    class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                    style="opacity: 0.4; background-image: url(upload/image-from-rawpixel-id-2107452-jpeg.jpg); background-size: cover; background-position: center;"
                                    data-parallax-speed="0.3"
                                ></div>
                            </div>
                            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                            <div class="gdlr-core-title-item-title-wrap">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 86px; font-weight: 700; letter-spacing: 0px; text-transform: none; color: #ffffff;">
                                                    Contact Us<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                            <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 28px; font-style: normal; letter-spacing: 0px; color: #ffffff; margin-top: 15px;">
                                                Get Intouch
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="gdlr-core-pbf-wrapper" style="padding: 90px 0px 50px 0px;">
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #2ea9f0;"></div>
                            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" data-skin="Plan Form" id="gdlr-core-column-73559">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js" style="max-width: 760px;">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px;">
                                                        <div class="gdlr-core-title-item-title-wrap">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 39px; font-weight: 600; letter-spacing: 0px; text-transform: none; color: #ffffff;">
                                                                Thank you! <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                            </h3>
                                                        </div>
                                                        <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 19px; font-style: normal; letter-spacing: 0px; color: #dbdbdb;">
                                                            We have recevied your email and will reach out to you shortly!
                                                        </span>
                                                        <br><br>
                                                        <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align" style="padding-bottom: 0px;"><a class="gdlr-core-button gdlr-core-button-gradient gdlr-core-left-align gdlr-core-button-no-border" href="/" style="
                                                                    transform: skewX(-15deg);
                                                                    -webkit-transform: skewX(-15deg);
                                                                    font-size: 17px;
                                                                    font-style: italic;
                                                                    font-weight: 700;
                                                                    color: #ffffff;
                                                                    padding: 16px 37px 16px 37px;
                                                                    text-transform: capitalize;
                                                                    border-radius: 0px;
                                                                    -moz-border-radius: 0px;
                                                                    -webkit-border-radius: 0px;
                                                                    background: rgb(217,32,202);
                                                                   ">
                                                                        <span class="gdlr-core-content" style="transform: skewX(15deg); -webkit-transform: skewX(15deg);">Return to home</span></a>
                                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    
                <footer>
    
    <div class="zyth-copyright-wrapper">
        <div class="zyth-copyright-container zyth-container">
            <div class="zyth-copyright-text zyth-item-pdlr">Copyright &copy;
                <?php echo date("Y"); ?> FarleryFit. All Rights
                Reserved.<br>Design by <a href="#">Reactive Studios</a>
            </div>
        </div>
    </div>
    
    </footer>
    
    </div>
    </div>
    
    <div id="zyth-side-content-menu">
    
    <i class="zyth-side-content-menu-close ion-android-close"></i>
    
    <div id="text-7" class="widget widget_text zyth-widget">
    <div class="textwidget">
    <p><img class="alignnone size-full wp-image-14683" src="../images/logo-g-light.png" alt=""
            width="218" />
    </p>
    <p>
        <span class="gdlr-core-space-shortcode" style="margin-top: 40px;"></span>
    <h1 style="color: #fff">About Chris</h1>
    <p>Chirs is a personal fitness trainer with over 15 years of experience, through teaching classes, to
        one
        on one training sessions, and helping with nutrition. Chris works with people of all ages by helping
        them reach
        their goals to better their health.</p>
    <p>"I have worked with some of the most amazing people, and have had the pleasure of seeing people
        change their health and wellbeing over the years when they thought they couldn\'t!" <br>&mdash; Chris
        Farley</p>
    <span class="gdlr-core-space-shortcode" style="margin-top: -10px;"></span>
    </p>
    </div>
    </div>
    <div id="text-8" class="widget widget_text zyth-widget">
    <div class="textwidget">
    <p>
        <span class="gdlr-core-space-shortcode" style="margin-top: -35px;"></span><br />
        <span style="color: #ffffff;">
            <strong>
                198 WESTERN AVENUE<br />
                AUGUSTA, MAINE<br /><br />
                186 ROUTE 133<br />
                WINTHROP, MAINE<br /><br />
                ONLINE
            </strong>
        </span>
    </p>
    </div>
    </div>
    
    <div id="text-9" class="widget widget_text zyth-widget">
    <div class="textwidget">
    <p>
        <span class="gdlr-core-space-shortcode" style="margin-top: -40px;"></span><br />
        <span style="color: #9e9e9e;">T.</span> <a href="tel:207-458-1995" style="color:#fff;"
            class="__cf_email__">(207) 458-1995</a><span class="gdlr-core-space-shortcode"
            style="margin-top: 20px;"></span>
        <span style="color: #9e9e9e;">E. <a href="mailto:chris@farleyfit.com" style="color:#fff;"
                class="__cf_email__">chris@farleyfit.com</a></span>
        <span class="gdlr-core-space-shortcode" style="margin-top: -5px;"></span>
    </p>
    </div>
    </div>
    
    <!-- <div id="text-10" class="widget widget_text zyth-widget">
    <div class="textwidget">
        <div class="gdlr-core-social-network-item gdlr-core-item-pdb gdlr-core-none-align gdlr-direction-horizontal"
            style="padding-bottom: 0px;" id="gdlr-core-social-network-40404">
            <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="facebook"
                style="color: #eeeeee; margin-right: 30px;" rel="noopener"><i class="fa fa-facebook"></i></a>
            <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="pinterest"
                style="color: #eeeeee; margin-right: 30px;" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
            <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter"
                style="color: #eeeeee; margin-right: 30px;" rel="noopener"><i class="fa fa-twitter"></i></a>
            <a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="instagram"
                style="color: #eeeeee; margin-right: 30px;" rel="noopener"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    </div> -->
    
    </div>
    
    
    <script type="text/javascript" src="../js/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
    <script type="text/javascript" src="../js/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="../js/plugins/goodlayers-core/plugins/script.js"
    id="gdlr-core-plugin-js"></script>
    <script type="text/javascript" id="gdlr-core-page-builder-js-extra">
    /* <![CDATA[ */
    var gdlr_core_pbf = { admin: "", video: { width: "640", height: "360" }, ajax_url: "https:\/\/demo.goodlayers.com\/zyth\/gym\/wp-admin\/admin-ajax.php" };
    /* ]]> */
    </script>
    <script type="text/javascript" src="../js/plugins/goodlayers-core/include/js/page-builder.js?ver=1.3.9"
    id="gdlr-core-page-builder-js"></script>
    <script type="text/javascript" src="../js/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.8" defer=""
    async="" id="tp-tools-js"></script>
    <script type="text/javascript" src="../js/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.8" defer="" async=""
    id="revmin-js"></script>
    <script type="text/javascript" src="../js/plugins/ui/effect.min.js?ver=1.12.1" id="jquery-effects-core-js"></script>
    <script type="text/javascript" src="../js/plugins/jquery.mmenu.js?ver=1.0.0" id="jquery-mmenu-js"></script>
    <script type="text/javascript" src="../js/plugins/jquery.superfish.js?ver=1.0.0" id="jquery-superfish-js"></script>
    <script type="text/javascript" src="../js/plugins/script-core.js?ver=1.0.0" id="zyth-script-core-js"></script>
    <script type="text/javascript" src="../js/plugins/mp-timetable/media/js/mptt-functions.min.js?ver=2.4.2"
    id="mptt-functions-js"></script>
    <script type="text/javascript" id="mptt-event-object-js-extra">
    /* <![CDATA[ */
    var MPTT = { table_class: "mptt-shortcode-table" };
    /* ]]> */
    </script>
    </body>
    
    </html>';

?>