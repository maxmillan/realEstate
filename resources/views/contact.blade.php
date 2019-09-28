<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->

<!-- Mirrored from bootstrapsale.com/projects/roost/v1-1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 07:47:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landline - Contacts</title>

    <!-- Vendors -->

    <!-- Material design colors -->
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- CSS animations -->
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

    <!-- Site -->
    <link rel="stylesheet" href="css/app_1.min.css">
    <link rel="stylesheet" href="css/app_2.min.css">

    <!-- Page Loader JS -->
    <script src="js/page-loader.min.js" async></script>
    <script src='http://bootstrapsale.com/google_analytics_auto.js'></script></head>

<body>
<!-- Start page loader -->
<div id="page-loader">
    <div class="page-loader__spinner"></div>
</div>
<!-- End page loader -->

<header id="header">
   @include('partials._nav')
</header>

<section class="section">
    <div class="container">

        <div class="contact">
            <div class="contact__inner clearfix">
                <div class="col-sm-6">
                    <div class="contact__info">
                        <ul class="rmd-contact-list">
                            <li class="rmd-contact-list__title"><i class="zmdi zmdi-home"></i>Francis Njunge Office</li>
                            <li><i class="zmdi zmdi-pin"></i>Kikuyu Town Near Muguku</li>
                            <li><i class="zmdi zmdi-phone"></i>0721212159</li>
                            <li><i class="zmdi zmdi-phone"></i>0731246050</li>
                            <li><i class="zmdi zmdi-email"></i>francisnjunge05@gmail.com</li>
                        </ul>

                        <div class="contact__social">
                            <a href="#" class="zmdi zmdi-facebook mdc-bg-indigo-300"></a>
                            <a href="#" class="zmdi zmdi-twitter mdc-bg-cyan-300"></a>
                            <a href="#" class="zmdi zmdi-google mdc-bg-red-300"></a>
                            <a href="#" class="zmdi zmdi-instagram mdc-bg-blue-grey-400"></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <form class="contact__form">
                        <div class="form-group form-group--light form-group--float">
                            <input type="text" class="form-control">
                            <label>Name</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group form-group--light form-group--float">
                            <input type="text" class="form-control">
                            <label>Email Address</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group form-group--light form-group--float">
                            <input type="text" class="form-control">
                            <label>Contact Number</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group form-group--light form-group--float">
                            <textarea class="form-control textarea-autoheight"></textarea>
                            <label>Message</label>
                            <i class="form-group__bar"></i>
                        </div>

                        <small class="mdc-text-white-darker">By sending us your information, you agree to Roost’s Terms of Use & Privacy Policy.</small>

                        <div class="m-t-30">
                            <button type="submit" class="btn brn-sm btn-default btn-static">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials._contacts')
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="ie-warning__inner">
        <ul class="ie-warning__download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<!-- Javascript -->

<!-- jQuery -->
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Waves button ripple effects -->
<script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

<!-- Autosize - Autohright textarea -->
<script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

<!-- IE9 Placeholder -->
<!--[if IE 9 ]>
<script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<!-- Site functions and actions -->
<script src="js/app.min.js"></script>

<!-- Demo only -->
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap&amp;key=AIzaSyD_nanUpVqytOmHHfuW4htZsiLH7YUzJ1A" async></script>
<script src="js/demo/demo.js"></script>
<script src="js/demo/maps/listing-detail-location-map.js"></script>
</body>

<!-- Mirrored from bootstrapsale.com/projects/roost/v1-1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 07:47:59 GMT -->
</html>
