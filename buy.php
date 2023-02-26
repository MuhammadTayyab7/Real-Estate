<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pixelgeeklab.com/html/realestast/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Sep 2018 16:01:11 GMT -->

<head>
    <meta charset="utf-8">
    < <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RealEstast - HTML5 Template</title>

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libs CSS -->
        <link href="css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
        <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
        <link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen">
        <link rel="stylesheet" href="vendor/chosen/chosen.css" media="screen">

        <!-- Theme -->
        <link href="css/theme-animate.css" rel="stylesheet">
        <link href="css/theme-elements.css" rel="stylesheet">
        <link href="css/theme-blog.css" rel="stylesheet">
        <link href="css/theme-map.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">

        <!-- Style Switcher-->
        <link rel="stylesheet" href="style-switcher/css/style-switcher.css">
        <link href="css/colors/red/style.html" rel="stylesheet" id="layoutstyle">

        <!-- Theme Responsive-->
        <link href="css/theme-responsive.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <style>
            #bg-color {
                background-color: #f8f9fa;
            }

            box-2 {
                max-width: 450px;
                padding: 10px 40px;
            }

            .box-2 .box-inner-2 input.form-control {
                font-size: 12px;
                font-weight: 600;
            }

            .box-2 .box-inner-2 .inputWithIcon {
                position: relative;
            }

            .box-2 .box-inner-2 .inputWithIcon span {
                position: absolute;
                left: 15px;
                top: 8px;
            }

            .box-2 .box-inner-2 .inputWithcheck {
                position: relative;
            }

            .box-2 .box-inner-2 .inputWithcheck span {
                position: absolute;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                background-color: green;
                font-size: 12px;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                right: 15px;
                top: 6px;
            }

            .form-control:focus,
            .form-select:focus {
                box-shadow: none;
                outline: none;
                border: 1px solid #7700ff;
            }

            .border:focus-within {
                border: 1px solid #7700ff !important;
            }

            .box-2 .card-atm .form-control {
                border: none;
                box-shadow: none;
            }

            .form-select {
                border-radius: 0;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }

            .address .form-control.zip {
                border-radius: 0;
                border-bottom-left-radius: 10px;
            }

            .address .form-control.state {
                border-radius: 0;
                border-bottom-right-radius: 10px;
            }

            .box-2 .box-inner-2 .btn.btn-outline-primary {
                width: 120px;
                padding: 10px;
                font-size: 11px;
                padding: 0% !important;
                display: flex;
                align-items: center;
                border: none;
                border-radius: 0;
                background-color: whitesmoke;
                color: black;
                font-weight: 600;
            }

            .box-2 .box-inner-2 .btn.btn-primary {
                background-color: #7700ff;
                color: whitesmoke;
                font-size: 14px;
                display: flex;
                align-items: center;
                font-weight: 600;
                justify-content: center;
                border: none;
                padding: 10px;
            }

            .box-2 .box-inner-2 .btn.btn-primary:hover {
                background-color: #7a34ca;
            }

            .box-2 .box-inner-2 .btn.btn-primary .fas {
                font-size: 13px !important;
                color: whitesmoke;
            }

            .carousel-indicators [data-bs-target] {
                width: 10px;
                height: 10px;
                border-radius: 50%;
            }

            .carousel-inner {
                width: 100%;
                height: 250px;
            }

            .carousel-item img {
                object-fit: cover;
                height: 100%;
            }

            .carousel-control-prev {
                transform: translateX(-50%);
                opacity: 1;
            }

            .carousel-control-prev:hover .fas.fa-arrow-left {
                transform: translateX(-5px);
            }

            .carousel-control-next {
                transform: translateX(50%);
                opacity: 1;
            }

            .carousel-control-next:hover .fas.fa-arrow-right {
                transform: translateX(5px);
            }

            .fas.fa-arrow-left,
            .fas.fa-arrow-right {
                font-size: 0.8rem;
                transition: all 0.2s ease;
            }

            .icon {
                width: 30px;
                height: 30px;
                background-color: #f8f9fa;
                color: black;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transform-origin: center;
                opacity: 1;
            }

            .fas,
            .fab {
                color: #6d6c6d;
            }

            ::placeholder {
                font-size: 12px;
            }

            @media (max-width: 768px) {
                .container {
                    max-width: 700px;
                    margin: 10px auto;
                }

                .box-1,
                .box-2 {
                    max-width: 600px;
                    padding: 20px 90px;
                    margin: 20px auto;
                }
            }

            @media (max-width: 426px) {

                .box-1,
                .box-2 {
                    max-width: 400px;
                    padding: 20px 10px;
                }

                ::placeholder {
                    font-size: 9px;
                }
            }
        </style>
</head>

<body>

    < id="page">
        <header>
            <div id="top">
                <div class="container">
                    <p class="pull-left text-note hidden-xs"><i class="fa fa-phone"></i> Need Support? 1-800-666-8888
                    </p>
                    <ul class="nav nav-pills nav-top navbar-right">


                        <button class="btn btn-primary disabledbtn"
                            style="padding: 2px;border-color:black !important; background-color:black !important; "><a
                                href="inde.html">
                                <i class="fa fa-user"></i></a></button>

                        <button class="btn btn-primary disabledbtn"
                            style="padding: 2px;border:border-color:black !important; background-color:black !important;"><a
                                href="lout.php">
                                <i class="fa fa-sign-out"></i></a></button>







                        <li><a href="#" title="" data-placement="bottom" data-toggle="tooltip"
                                data-original-title="Email"><i class="fa fa-envelope-o"></i></a></li>
                        <li><a href="#" title="" data-placement="bottom" data-toggle="tooltip"
                                data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="" data-placement="bottom" data-toggle="tooltip"
                                data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="" data-placement="bottom" data-toggle="tooltip"
                                data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-default pgl-navbar-main" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.php"><img src="images/logo.png" alt="Flatize"></a>
                    </div>

                    <div class="navbar-collapse collapse width">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown active"><a href="index.php" data-target="#" class="dropdown-toggle"
                                    data-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu">

                                    <li class="active"><a href="index.php">Home Slider</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle"
                                    data-toggle="dropdown">Properties</a>
                                <ul class="dropdown-menu">

                                    <li><a href="grid-fullwidth-4-column.php">Properties</a></li>


                                </ul>
                            </li>

                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More
                                    Info</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-us.php">About Us</a></li>

                                </ul>
                            </li>

                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </header>









        <section>

            <!doctype html>
            <html lang="en">


            <?php
            // session_start();
            echo $_SESSION['id'];
            ?><br><br>
            <?php
            include 'database.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM property where id='$id'";
            $result = $conn->query($sql);
            $sr_num = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <h1 align="center">Property you choose</h1>
                    <p align="center">
                        <strong>
                            <?php echo $row['name'] ?><strong>
                    </p><br>
                    <div id="bg-color" style="width:70%;display:block;margin:auto;">
                        <div class="container-fluid">
                            <div class="row" style="">
                                <div class="col-lg-6" style="margin-top:30px;">
                                    <input
                                        style="
                                                                                                                                        object-fit: contain;
                                                                                                                                        display:block;
                                                                                                                                        margin:auto;
                                                                                                                                        object-fit:contain;
                                                                                                                                        width: 250px;"
                                        type="image" src="<?php echo $row['property_pic'] ?>">
                                    <p align="center"><strong>
                                            <?php echo $row['address'] ?><strong>

                                    </p>

                                </div>

                                <div class="col-lg-6" style="">
                                    <!-- <h5 align="center" style="margin-top:30px">
                                                                                                                                <?php echo $row['address'] ?>
                                                                                                                           </h5> -->
                                    <form action="buy-property.php" method="POST" enctype="multipart/form-data" class="row g-3"
                                        style="padding:30px">
                                        <div class="col-md-6" style="width:50%">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6" style="width:50%">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="inputPassword4">
                                        </div>

                                        <div class="col-md-6" style="width:50%">
                                            <label for="cardNumber" class="form-label">Card Number</label>
                                            <input type="text" name="cn" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-6" style="width:50%">
                                            <label for="cardNumber" class="form-label"></label>
                                            <input type="hidden" name="pid" class="form-control" value="<?php echo $row['id'] ?>"
                                                id="inputPassword4">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Check out
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" align="center" style="margin-top:40px;">
                                            <button type="submit" class="btn btn-primary">Pay $
                                                <?php echo $row['price'] ?>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>




        </section>
        <!-- End Main -->

        <!-- Begin footer -->
        <footer class="pgl-footer">
            <div class="container">
                <div class="pgl-upper-foot">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Contact detail</h2>
                            <!-- <p>Pellentesque nec erat. Aenean semper, neque non faucis. Malesuada, dui felis tempor
                            felis, vel varius ante diam ut mauris.</p> -->
                            <address>
                                <i class="fa fa-map-marker"></i> Office : 1-900-222-6666<br>
                                <i class="fa fa-phone"></i> Mobile : 0800-222-2222<br>
                                <i class="fa fa-fax"></i> Fax : 1-000-666-8888<br>
                                <i class="fa fa-envelope-o"></i> Mail: <a
                                    href="mailto:demo@gmail.com">demo@gmail.com</a>
                            </address>
                        </div>
                        <div class="col-sm-2">
                            <h2>Useful links</h2>
                            <ul class="list-unstyled">

                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Community Guidelines</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <h2>Contct</h2>
                            <ul class="list-unstyled">

                                <li><a href="contact.php">Contact Us</a></li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="pgl-copyrights">
                    <p>Copyright © 2023 RealEstast. Designed by Abdullah & Tayyab</p>
                </div>
            </div>
        </footer>
        <!-- End footer -->

        </div>




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="vendor/jquery.min.js"></script>
        <!-- Including all compiled plugins (below) -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/owl-carousel/owl.carousel.js"></script>
        <script src="vendor/flexslider/jquery.flexslider-min.js"></script>
        <script src="vendor/chosen/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
        <script src="vendor/gmap/gmap3.infobox.min.js"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js"></script>
        <script src="vendor/masonry/masonry.pkgd.min.js"></script>

        <!-- Theme Initializer -->
        <script src="js/theme.plugins.js"></script>
        <script src="js/theme.js"></script>



</body>

<!-- Mirrored from pixelgeeklab.com/html/realestast/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Sep 2018 16:02:19 GMT -->

</html>