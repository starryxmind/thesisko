<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grass Garden Resort and Villas</title>
        <!--css-->
        <link rel="stylesheet" href="assets/css/css.css" type="text/css">
        <link rel="stylesheet" href="assets/css/datepicker.css" type="text/css">
        <!--bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Pontano+Sans|Satisfy" rel="stylesheet">
        <style>
            .container-fluid { width: 80%; }
        </style>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </head>

    <body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div align="center">
                    <img class="img-reponsive logo" src="assets/images/logo.png">
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php" id="color-menu">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/amenities.php" id="color-menu">Amenitites</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="pages/rates.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rates
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="pages/function.php">Function hall</a>
                            <a class="dropdown-item" href="pages/pavillion.php">Pavillion</a>
                            <a class="dropdown-item" href="pages/cottages.php">Cottages</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/gallery.php" id="color-menu">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/services.php" id="color-menu">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/services.php" id="color-menu">Contact Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search Reservation" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <div class="container-fluid cover">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <img src="images/img-header.jpg" class="img-responsive img-header">
            </div>
        </div>
    </div>

    <div class="container-fluid" id="reservation">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <div class="page-header">
                    <h1>Welcome to Grass Garden Resort and Villas</h1>
                </div>
                <div class="page-content">
                    <p class="text-justify">Come and experience the pristine waters, beautifully landscaped environment. A place for relaxation while enjoying the green ambience of nature. It is ideal for outings, functions and recreational activities. This place is perfect for everyone.</p>
                    <p class="text-justify">The Grass Garden Resort and Villas is located in the barrio of Sipat, Plaridel, Bulacan. It has the facilities and services to fill your needs.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 book-panel">
                <h3 class="text-center">Book a room</h3>
                <form action="pages/DateAction.php" method="post" role="form" autocomplete="off">
                    <div class="form-group">
                        <label for="checkin">Check-in:</label>
                        <div class="input-group date">
                            <input type="text" class="form-control" name="checkin" id="checkin" required>
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                        <small id="checkin" class="form-text text-muted">Enter your desired check-in date.</small>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-out:</label>
                        <div class="input-group date">
                            <input type="text" class="form-control" name="checkout" id="checkout" required>
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                        <small id="checkout" class="form-text text-muted">Enter your desired check-out date.</small>
                    </div>
                    <div class="form-group row">
                        <label for="guest" class="col-5 col-form-label">Number of Guest:</label>
                        <div class="col-7">
                            <input  class="form-control" type="number" id="guest" value="1" min="1" max="12" name="guest">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Reserve date</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--nav for slow internet hahaha-->
    <div class="container-fluid" id="slow-net">
        <div class="row">
            <div class="col-xs-12 col-sm-12" id="section-header">
                <h1 class="text-center">Connect with us</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <h4 class="text-center">Navigation links</h4>
                <ul class="list-group list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Amenities</a></li>
                    <li><a href="#">Rates</a>
                        <ul class="">
                            <li><a href="#">Function Hall</a></li>
                            <li><a href="#">Pavillion</a></li>
                            <li><a href="#">Cottages</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h4 class="text-center">Like us on Facebook</h4>
                <div class="fb-page" data-href="https://www.facebook.com/thegrassgardenresort/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thegrassgardenresort/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thegrassgardenresort/">The Grass Garden Resort and Villas</a></blockquote></div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h4 class="text-center">Location Map</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3855.72807441464!2d120.83205091479468!3d14.896476173750973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396546b8bd4c883%3A0xe503da8adb6d4838!2sGrass+Garden+Resort!5e0!3m2!1sen!2sph!4v1511203092971" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!--disclaimer-->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <p class="pull-left">UE CCSS CAPSTONE PROJECT PLANNING A &copy 2017-2018</p>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- moment js -->
    <script src="plugins/daterangepicker/moment.js"></script>
    <!-- Date picker min js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $(function () {
            var dateToday = new Date();
            $('#checkin').datepicker({
                startDate: new Date(),
                autoclose: true,
                minDate: dateToday,
                orientation: "auto bottom",
                selectYears: true,
                selectMonths: true,
                todayHighlight: true

            });
            $('#checkout').datepicker({
                useCurrent: false,
                startDate: new Date(),
                autoclose: true,
                minDate: $('#checkin').val,
                orientation: "auto bottom",
                selectYears: true,
                selectMonths: true
            });
            $("#checkin").on("dp.change", function (e) {
                $('#checkout').data("datepicker").minDate(e.date);
            });
            $("#checkin").on("dp.change", function (e) {
                $('#checkout').data("datepicker").maxDate(e.date);
            });
        });
    </script>
    </body>
</html>
