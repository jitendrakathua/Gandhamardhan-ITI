<!DOCTYPE html>
<html>
    <head>
        <title>Gandhamardan Industrial Training Institute, Bolangir</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">

        <link href="fonts/fonts.css" type="text/css" rel="stylesheet" />
        <link href="css/slider-top.css" type="text/css" rel="stylesheet" />
        <link href="css/style.css" type="text/css" rel="stylesheet" />

        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

        <!-- bxSlider Javascript file -->
        <script src="js/bxslider/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="js/bxslider/jquery.bxslider.css" rel="stylesheet" />

        <script type="text/javascript">
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: 'fade',
                    controlsContainer: '.flexslider'
                });

                $('.bxslider').bxSlider({
                    minSlides: 3,
                    maxSlides: 4,
                    slideWidth: 170,
                    slideMargin: 10
                });

            });
        </script>

    </head>
    <body>
        <?php include './header.php'; ?>

        <!--Content Section Start here-->
        <div id="content">
            <div class="container">

                <?php include './left-nav.php'; ?>

                <!--Right Content start here-->
                <div id="right-content" class="pull-right">

                    <!--Slider-->
                    <div class="flex-container" style="margin-bottom: 20px;">
                        <div class="flexslider">
                            <ul class="slides">	
                                <li>
                                    <img src="images/banner-img-1.jpg" alt="img-1" />

                                </li>

                                <li>
                                    <img src="images/banner-img-2.jpg" alt="img-2" />

                                </li>

                                <li>
                                    <img src="images/banner-img-3.jpg" alt="img-3" />

                                </li>
                                <li>
                                    <img src="images/banner-img-4.jpg" alt="img-4" />
                                </li>
                                <li>
                                    <img src="images/banner-img-5.jpg" alt="img-5" />
                                </li>
                            </ul>
                        </div>

                        <!--shadow start--> 
                        <div id="shadow"></div>
                        <!--shadow start--> 
                    </div>
                    <!--Slider-->

                    <!--inner Content Start-->

                    <!--Heading-->
                    <h1>Welcome to Our Website</h1>
                    <img src="images/line.jpg" alt="line" style="margin-bottom: 15px;"/>
                    <!--Heading-->

                    <div id="welcome-txt">
                        <img src="images/img-1.jpg" alt="img-1" class="pull-left"/>
                        <p>
                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum 
                            auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                            Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in
                            elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. litora torquent
                            per conubia nostra, per inceptos himenaeos. 
                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                            nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. 
                        </p>
                    </div>

                    <!--Notice Board--> 

                    <div class="rounded-box pull-left">
                        <div class="notice-board"></div>
                        <marquee direction="up" scrollamount="3">
                            <ul>
                                <li>
                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                </li>

                                <li>
                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                </li>

                                <li>
                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                </li>

                                <li>
                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                </li>
                            </ul>
                        </marquee>
                    </div>

                    <!--Notice Board--> 

                    <!--Tenders-->
                    <div class="rounded-box pull-right">
                        <div class="tenders"></div>

                        <marquee direction="up" scrollamount="3">
                            <ul>
                                <li>
                                    <h2>26-08-2014</h2>
                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                </li>

                                <li>
                                    <h2>26-08-2014</h2>
                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                </li>
                                <li>
                                    <h2>26-08-2014</h2>
                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                </li>
                                <li>
                                    <h2>26-08-2014</h2>
                                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                </li>
                            </ul>
                        </marquee>
                    </div>
                    <!--Tenders-->


                    <!--Heading-->
                    <h1>Photo Gallery</h1>
                    <img src="images/line.jpg" alt="line" style="margin-bottom: 15px;"/>
                    <!--Heading-->

                    <ul class="bxslider">
                        <li><img src="images/banner-img-1.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-2.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-4.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-5.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-1.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-2.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-4.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-5.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-1.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-2.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-4.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-5.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-1.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-2.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-4.jpg" width="180" height="100" /></li>
                        <li><img src="images/banner-img-5.jpg" width="180" height="100" /></li>
                    </ul>

                    <!--inner Content End-->

                </div>
                <!--Right Content End here-->
                <div class="clear-fix"></div>
            </div>
        </div>
        <!--Content Section End here-->

        <!--Footer Start Here-->
        <div id="footer">
            &COPY; Copyright 2014 GITI, All Rights Reserved 
        </div>

        <!--Footer End Here-->



    </body>
</html>
