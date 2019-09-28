<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->

<!-- Mirrored from bootstrapsale.com/projects/roost/v1-1/listing-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 07:47:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>100*100 Plot</title>

    <!-- Vendors -->

    <!-- Material design colors -->
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- CSS animations -->
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

    <!-- Select2 - Custom Selects -->
    <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

    <!-- NoUiSlider - Input Slider -->
    <link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">

    <!-- Light Gallery -->
    <link rel="stylesheet" href="vendors/bower_components/lightgallery/dist/css/lightgallery.min.css">

    <!-- rateYo - Ratings -->
    <link rel="stylesheet" href="vendors/bower_components/rateYo/src/jquery.rateyo.css">

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
        <header class="section__title section__title-alt">
            <h2>100*100 Plot</h2>
            <small>Kikuyu</small>

            <div class="actions actions--section">
                <div class="actions__toggle">
                    <input type="checkbox">
                    <i class="zmdi zmdi-favorite-outline"></i>
                    <i class="zmdi zmdi-favorite"></i>
                </div>
                <a href="#" data-rmd-action="print"><i class="zmdi zmdi-print"></i></a>
                <div class="dropdown actions__email">
                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>

                    <div class="dropdown-menu stop-propagate">
                        <form>
                            <p><strong>Customers Email/Name</strong></p>

                            <div class="clearfix"></div>

                            <div class="form-group form-group--float m-t-10">
                                <input type="text" class="form-control">
                                <label>Recipient Email Address</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <textarea class="form-control textarea-autoheight">I came across this listing from Roost and thought of sharing with you.</textarea>
                                <label>Message (optional)</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="clearfix"></div>

                            <div class="m-t-15">
                                <button class="btn btn-primary">Send</button>
                                <a href="email/listing-mail.html" target="_blank" class="btn btn-link">View Email</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-share"></i></a>

                    <div class="dropdown-menu pull-right rmd-share">
                        <div></div>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="detail-media">
                        <div class="tab-content">
                            <div class="tab-pane fade in active light-gallery" id="detail-media-images">
                                <a href="img/property03.jpeg">
                                    <img src="img/property03.jpeg" alt="">
                                </a>
                            </div>
                            <div class="tab-pane fade" id="detail-media-map">
                                <div id="listing-map"></div>
                            </div>
                        </div>

                        <ul class="detail-media__nav hidden-print">
                            <li class="active"><a href="#detail-media-images" data-toggle="tab"><i class="zmdi zmdi-collection-image"></i></a></li>
                            <li><a href="#detail-media-floorplan" data-toggle="tab"><i class="zmdi zmdi-view-dashboard"></i></a></li>
                            <li><a href="#detail-media-map" data-toggle="tab"><i class="zmdi zmdi-map"></i></a></li>
                        </ul>
                    </div>

                    <div class="detail-info">
                        <div class="detail-info__header clearfix">
                            <strong>Ksh 2,000,000</strong>

                            <span>For Sale</span>
                        </div>

                        <ul class="detail-info__list clearfix">

                            <li>
                                <span>Property Area</span>
                                <span>100 sqft</span>
                            </li>
                            <li>
                                <span>Broker Fee</span>
                                <span>No</span>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="card detail-amenities">
                    <div class="card__header">
                        <h2>Amenities</h2>
                    </div>

                    <div class="card__body">
                        <ul class="detail-amenities__list">
                            <li class="mdc-bg-red-300">N/A</li>
                            <li class="mdc-bg-purple-300">N/A</li>
                            <li class="mdc-bg-pink-300">N/A</li>
                            <li class="mdc-bg-light-blue-500">N/A</li>
                            <li class="mdc-bg-amber-400">N/A</li>
                            <li class="mdc-bg-teal-400">N/A</li>
                            <li class="mdc-bg-light-green-500"> N/A</li>
                            <li class="mdc-bg-brown-400">N/A</li>
                            <li class="mdc-bg-blue-grey-400">N/A</li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Property Overview</h2>
                    </div>
                    <div class="card__body">
                        <p>A 100*100ft  plot at Kikuyu, Kamangu town near Kamangu gardens at Gewa road just past Ndeiya farm only 400m from tarmac. Flat, red soil and rectangular in shape. Ideal for a home or speculation.</p>
                    </div>
                </div>

            </div>

            <div id="inquire" class="col-md-4 rmd-sidebar-mobile">
                <form class="card hidden-print">
                    <div class="card__header">
                        <h2>Inquire this Property</h2>
                        <small>Call us now or send us your information</small>
                    </div>

                    <div class="card__body">
                        <div class="inquire__number">
                            <i class="zmdi zmdi-phone"></i>
                            0721212159
                        </div>

                        <div class="form-group form-group--float">
                            <input type="text" class="form-control">
                            <label>Name</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group form-group--float">
                            <input type="text" class="form-control">
                            <label>Email Address</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group form-group--float">
                            <input type="text" class="form-control">
                            <label>Contact Number</label>
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group form-group--float">
                            <textarea class="form-control textarea-autoheight">Hi there, I am interested in 100*100ft Plot</textarea>
                            <label>Message</label>
                            <i class="form-group__bar"></i>
                        </div>

                        <small class="text-muted">By sending us your information, you agree to Roost’s Terms of Use & Privacy Policy.</small>
                    </div>

                    <div class="card__footer">
                        <button type="submit" class="btn btn-primary">Request Information</button>
                        <button class="btn btn-link hidden-lg hidden-md" data-rmd-action="block-close" data-rmd-target="#inquire">Cancel</button>
                    </div>
                </form>

                <div class="card hidden-xs hidden-sm hidden-print">
                    <div class="card__header">
                        <h2>Agents representing</h2>
                        <small>N/A</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Listing Search -->
<button class="btn btn--action btn--circle hidden-md hidden-lg" data-rmd-action="block-open" data-rmd-target="#inquire">
    <i class="zmdi zmdi-phone"></i>
</button>

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

<!-- Select 2 - Custom Selects -->
<script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- NoUiSlider -->
<script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

<!-- Light Gallery -->
<script src="vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>

<!-- rateYo - Ratings -->
<script src="vendors/bower_components/rateYo/src/jquery.rateyo.js"></script>

<!-- Autosize - Auto height textarea -->
<script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

<!-- jsSocials - Social link sharing -->
<script src="vendors/bower_components/jssocials/dist/jssocials.min.js"></script>

<!-- Flot Charts -->
<script src="vendors/bower_components/Flot/jquery.flot.js"></script>
<script src="vendors/bower_components/Flot/jquery.flot.resize.js"></script>
<script src="vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

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
<script src="js/demo/charts/line-chart.js"></script>
</body>

<!-- Mirrored from bootstrapsale.com/projects/roost/v1-1/listing-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 07:47:47 GMT -->
</html>
