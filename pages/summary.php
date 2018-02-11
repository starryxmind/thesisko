<?=
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grass Garden Resort and Villas</title>
    <!--css-->
    <link rel="stylesheet" href="../assets/css/css.css" type="text/css">
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
                <img class="img-reponsive logo" src="../assets/images/logo.png">
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
                    <a class="nav-link" href="../index.php" id="color-menu">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="amenities.php" id="color-menu">Amenitites</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="rates.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rates
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="function.php">Function hall</a>
                        <a class="dropdown-item" href="pavillion.php">Pavillion</a>
                        <a class="dropdown-item" href="cottages.php">Cottages</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php" id="color-menu">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php" id="color-menu">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php" id="color-menu">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search Reservation" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>

<!--body content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-4" id="reservation-summary">
            <div class="page-header">
                <h2 class="text-center" id="reservation-summary-titles">Reminders</h2>
                <p>We are eagerly anticipating your arrival and would like to advise you of the following in order to help you with your trip planning.</p>
                <br>
                <p>Should there be a concern with your reservation, a customer service representative will contact you. Otherwise, consider your reservation confirmed.</p>
                <ul>
                    <li>You can pay for Downpayment or FullPay on Bank Deposit or in Cash.</li>
                    <li>No pets allowed.</li>
                    <li>Outside foods are allowed inside the guest house.</li>
                    <li>Check in time is 2pm and Check out time is 12am.</li>
                    <li>Guest arriving before 2 pm shall be accommodated if rooms are vacant and ready.</li>
                    <li>Room rates inclusive of government tax and service charge.</li>
                    <li>Rates are subject to change without prior notice.</li>
                    <li>We serve Breakfast, Lunch and Dinner upon request.</li>
                </ul>
                <p><strong>I have agreed that I will present the following documents upon check in:</strong></p>
                <ol>
                    <li>Copy of Remittance Payment.</li>
                    <li>Valid ID</li>
                    <li>Copy of Invoice</li>
                </ol>
                <p><strong>Note: You will recieve several e-mail confirmation based on number of rooms reserved</strong></p>
                <p>If you have any questions:</p>
                <ul>
                    <li>Email: grassgardenph@yahoo.com</li>
                    <li>Tel no. (044) 795 0124</li>
                    <li>Cellphone no. 0915 193 1489</li>
                </ul>
                <p>Thank you for choosing Grass Garden Resort and Villas </p>
                <p>Respectfully yours,</p>
                <br>
                <p>Grass Garden Resort and Villas</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8" id="reservation-summary">
            <form action="../action/reservation_sumary_action.php" method="post">
                <h2 class="text-center" id="reservation-summary-titles">Guest Information</h2>
                <p><strong>Name: </strong><?php echo $_SESSION['firstname']; ?>  <?= $_SESSION['lastname'] ?></p>
                <p><strong>E-mail Address: </strong><?= $_SESSION['emailaddress']; ?></p>
                <p><strong>Cellphone no.: </strong> <?= $_SESSION['contactnumber'] ?></p>
                <p><strong>Address: </strong><?= $_SESSION['address'] ?></p>
                <p><strong>Check-in date: </strong><?= $_SESSION['checkin'] ?></p>
                <p><strong>Check-out date: </strong><?= $_SESSION['checkout'] ?></p>
                <p><strong>Extra Request / Message: </strong><?= $_SESSION['roomrequest'] ?></p>
                <hr>
                <h2 class="text-center" id="reservation-summary-titles">Total Bill</h2>

                <p><strong>Type of Room: </strong> Regular </p>
                <p><strong>Number of Rooms:</strong>1</p>
                <p><strong>Cost: </strong>PHP 2500</p>
                <p><strong>Length of stay: </strong>1</p>
                <div class="row">
                    <div class="col-xs-6 col-sm-6">
                        <p><strong>Subtotal(per rooms picked)</strong></p>
                        <p><strong>Vatable</strong></p>
                        <p><strong>VAT 12%</strong></p>
                        <p><strong>Down payment</strong></p>
                        <p><strong>Remaining balance</strong></p>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                        <p>PHP 2500</p>
                        <p>PHP 2,232.14</p>
                        <p>PHP 267.86</p>
                        <p>PHP 1250</p>
                        <p><strong>PHP 1250</strong></p>
                    </div>
                </div>
                <div align="right">
                    <button type="button" name="submit" class="btn btn-primary confirm" data-toggle="modal" data-target="#myModal">Confirm Reservation</button>
                    <!--<a href="customer_info.php"><button class="btn btn-primary btn-hide" type="button" id="ihideito">Previous</button></a>-->
                    <!--<a href="invoice.php" target="_blank" class="btn btn-warning" disabled="">Print</a>-->
                </div>
                <!--modal-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Reservation Successful</h4>
                            </div>
                            <div class="modal-body">
                                <p><strong><i>To those who are already logged in, kindly ignore this message.</i></strong></p>
                                <hr>
                                <p>An account will be created at your email: <b>fasdfas@gmail.com</b></p>
                                <p>You can view and print your payment, and upload your payment proof so that the Hotel can confirm your reservation. You can also cancel your reservation using your account.</p>
                                <p><strong>Your Password is shown into the next page.</strong></p>
                                <!--                                    <p></p>-->
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary confirm">Proceed</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--modal-->
</div>
</div>

<!--end of-->
<!--nav for slow internet hahaha-->
<div class="container-fluid" id="slow-net   ">
    <div class="row">
        <div class="col-xs-12 col-sm-12" id="section-header">
            <h1 class="text-center">Connect with us</h1>
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
            <a class="pull-right" href="https://www.freepik.com/free-vector/nature-leaf-background_822458.htm">Designed by Freepik</a>
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
