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
        <div class="col-xs-12 col-sm-4">
            <h1>Reservation Details</h1>
            <div class="reservation-details">
                <p>Reservation length: <span><?= $_SESSION['dateLength'] ?></span></p>
                <p>Check-in Date: <span><?= $_SESSION['checkin'] ?></span></p>
                <p>Check-out Date: <span><?= $_SESSION['checkout'] ?></span></p>
                <p>No. of Guests: <span><?= $_SESSION['guest'] ?></span></p>
                <p>Number of rooms reserve:</p>
                <p>Type of room reserve:</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8">
           <h1>Customer Details</h1>
            <form action="customerAction.php" method="post" class="form-inline submit-customer-info">
                <div class="table">
                    <table class="table table-responsive">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="firstname">Fist name: </label>
                                    <input type="text" class="form-control" name="firstname" id="firstname">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="lastname">last name: </label>
                                    <input type="text" class="form-control" name="lastname" id="lastname">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="address">Address: </label>
                                    <input type="text" class="form-control" name="address" id="address">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="contactnumber">contact: </label>
                                    <input type="text" class="form-control" name="contactnumber" id="contactnumber" onkeypress='validate(event)' maxlength="11">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="preemail">E-mail Address: </label>
                                    <input type="email" class="form-control" name="preemail" id="preemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="emailaddress">Confirm e-mail Address: </label>
                                    <input type="email" class="form-control" name="emailaddress" id="emailaddress" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label>For extra request:</label>
                                    <textarea rows="6" cols="90" class="textar form-control" name="roomrequest" id="roomrequest"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <input type="checkbox" value="terms" name="termsandconditions" class=" from-control terms" required>
                                    <label id="terms">I Agree with the <a href="#" data-toggle="modal" data-target="#myModal">TERMS AND CONDITION</a> of Grass Garden Resort and Villas</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Submit" name ="submit_btn" class="btn btn-default">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Terms and Conditions of Grass Garden Resort and Villas</h4>
                        </div>
                        <div class="modal-body">
                            <ul style="list-style: none;">
                                <li>Due to Barangay Ordinance use of Videoke is strictly only before 12-midnight.</li>
                                <li>Videoke microphones must not be used for other purposes than singing only.</li>
                                <li>Children must be accompanied by adults when swimming.</li>
                                <li>Eating or drinking in or near in the pool area is prohibited.</li>
                                <li>Guests are advice not to enter other undesignated area.</li>
                                <li>Pets are not allowed in the pool area.</li>
                                <li>Extra Bed/Beddings charge rate: 150.00/set; subject to availability.</li>
                                <li>Extra Stay in Guests charge: 150.00/excess person.</li>
                                <li>Room Occupants have free access to our garden, swimming pools and free parking. All rooms have air condition, TV & hot showers.</li>
                            </ul>
                            <p><strong>For Check-In Guests:</strong></p>
                            <ul style="list-style: none;">
                                <li>Payment must be made before checking out.</li>
                                <li>Check-in Time: 2pm. Check-Out time: 12nn.</li>
                                <li>Guests will be liable for any loss or damage to the property of resort.</li>
                                <li>Turn over the key at front desk before checking-out and allow our housekeeping staff to check your room before leaving.</li>
                                <li>Please read our our House Rules posted in every room.</li>
                            </ul>
                            <p><strong>Rules and Regulation for Pool</strong></p>
                            <ul style="list-style: none;">
                                <li>Eating and Drinking in the pool area is Prohibited.</li>
                                <li>Always take a shower beofre you swim.</li>
                                <li>Observe Hygiene by washing your feet in a footbath before entering the pool.</li>
                                <li>Strictly no pushing, throwing, dunking of anyone into the pool for your safety.</li>
                                <li>Swimmers with open plastered wounds or skin disease shall not be allowed in the pool.</li>
                                <li>Only proper swimming attires are allowed in the pool. (Swimming Trunks for the men for Bathing Suit for the Women)</li>
                                <li>Diving from the terrace is strictly prohibited for your safety.</li>
                                <li>Please Observed Cleanliness.</li>
                            </ul>
                            <p><strong>Paying for your booking</strong></p>
                            <ul style="list-style:none;">
                                <li>The resort accepts Cash Remittance and Bank Deposit (from BPI) as guests mode of payment.</li>
                                <li>VAT is already included in the room rate.</li>
                                <li>Wait for an e-mail confirmation on how you will pay and how to avail the resort promos.</li>
                            </ul>
                            <p style="text-align: justify;">We cannot accept responsibility for unforeseen circumstances beyond our control. These include (but are not limited to) adverse weather conditions, fire, riot, war, terrorist activity (or threat of such activity), industrial dispute, natural disaster, or injuries and death of an individual(s) through accidental circumstances unconnected with the resort.
                                By making a booking you are accepting responsibility for any damage or loss caused by yourself or a member of your party. Full payment for any such damage or loss must be paid to the front desk on demand. If you fail to do so, you will be responsible for meeting any claims subsequently made (together with our own and the other party's full legal costs) as a result of your actions.
                                Complaints</p>
                            <p style="text-align: justify;">If you are dissatisfied with any aspect of your stay you should bring the problem or issue to the attention of the duty manager or senior member of staff at the resort as soon as possible so that all reasonable efforts can be made to rectify the situation. If, for any reason, the issue cannot be resolved to your satisfaction and you wish to make a complaint, you should put it in writing and send it to the owner at: Grass Garden Resort and Villa, Plaridel, Bullacan.
                                Cancellations</p>
                            <p style="text-align: justify"><strong>for cancellations, the resort provide 7 days upon requst of the guest/s whether he/she failed to show up or wishes to cancel their reservation</strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script>
    $(function () {
        $('.submit-customer-info').submit(function (e) {
            var preemail = $('#preemail').val();
            var emailaddress = $('#emailaddress').val();
            if (preemail != emailaddress) {
                alert('E-mail Address do not match!');
                return false;
            } else {
                //do nothing
            }
        });
    });
</script>
<script>
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
</body>
</html>
