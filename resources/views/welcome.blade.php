<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->

<!-- Mirrored from bootstrapsale.com/projects/roost/v1-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 07:41:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landline - Real Estate $ Property Managers</title>

    <!-- Vendors -->

    <!-- Material design colors -->
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- CSS animations -->
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

    <!-- Select2 - Custom Selects -->
    <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="vendors/bower_components/slick-carousel/slick/slick.css">

    <!-- NoUiSlider - Input Slider -->
    <link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">

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
    <div class="header__search container">
        <form>
            <div class="search">
                <div class="search__type dropdown">
                    <a href="#" data-toggle="dropdown">Rent</a>

                    <div class="dropdown-menu">
                        <div>
                            <input type="radio" name="property-type" value="rent">
                            <span>Rent</span>
                        </div>
                        <div>
                            <input type="radio" name="property-type" value="buy">
                            <span>Buy</span>
                        </div>
                    </div>
                </div>

                <div class="search__body">
                    <input type="text" class="search__input" placeholder="Enter any Neighorhood, Feature, Zip Code" data-rmd-action="advanced-search-open">

                    <div class="search__advanced">
                        <div class="col-sm-6">
                            <div class="form-group form-group--float">
                                <input type="text" class="form-control" value="New York, NY">
                                <label>Location</label>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Ownership Type</label>

                                <select class="select2">
                                    <option value="">Single Family Home</option>
                                    <option value="">Condo</option>
                                    <option value="">Townhome</option>
                                    <option value="">Apartment Community</option>
                                    <option value="">Room</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-group--range">
                                <label>Price Range</label>
                                <div class="input-slider-values clearfix">
                                    <div class="pull-left"><span>$</span><span id="property-price-upper"></span></div>
                                    <div class="pull-right"><span>$</span><span id="property-price-lower"></span></div>
                                </div>
                                <div id="property-price-range"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group form-group--range">
                                <label>Area Size (sqft)</label>
                                <div class="input-slider-values clearfix">
                                    <div class="pull-left" id="property-area-upper"></div>
                                    <div class="pull-right" id="property-area-lower"></div>
                                </div>
                                <div id="property-area-range"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Bedrooms</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="checkbox" name="advanced-search-beds" id="bed1">1
                                    </label>
                                    <label class="btn active">
                                        <input type="checkbox" name="advanced-search-beds" id="bed2" checked>2
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="advanced-search-beds" id="bed3">3
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="advanced-search-beds" id="bed4">4
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="advanced-search-beds" id="bed5">4+
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Bathrooms</label>
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="checkbox" name="advanced-search-baths" id="bath1" checked>1
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="advanced-search-baths" id="bath2">2
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="advanced-search-baths" id="bath3">3
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="advanced-search-baths" id="bath4">4
                                    </label>
                                    <label class="btn">
                                        <input type="checkbox" name="advanced-search-baths" id="bath5">4+
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 m-t-10">
                            <button class="btn btn-primary">Search</button>
                            <button class="btn btn-link" data-rmd-action="advanced-search-close">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="header__recommended">
        <div class="my-location">
            <div class="my-location__title">Properties nearby your location</div>
            <div class="dropdown my-location__location hidden-xs">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-pin"></i> Kikuyu</a>

                <div class="dropdown-menu pull-right stop-propagate">
                    <strong>Change Location</strong>
                    <small>Set your location to get list of properties nearby you</small>

                    <form>
                        <div class="form-group form-group--float">
                            <input type="email" class="form-control" placeholder="Enter City, State, Zip">
                            <i class="form-group__bar"></i>
                        </div>

                        <div class="my-location__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84147.43307199534!2d-74.15863267618451!3d40.71380993356828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2slk!4v1465216708326" style="border:0; width: 100%; height: 250px;" allowfullscreen></iframe>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="listings-grid">
            <div class="listings-grid__item">
                <a href="{{url('listing-details')}}">
                    <div class="listings-grid__main">
                        <img src="img/demo/listing/thumbs/1.jpg" alt="">
                        <div class="listings-grid__price">Ksh7.5M</div>
                    </div>

                    <div class="listings-grid__body">
                        <small>Kikuyu Muguku Flats</small>
                        <h5>Residential</h5>
                    </div>

                    <ul class="listings-grid__attrs">
                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                    </ul>
                </a>

                <div class="actions listings-grid__favorite">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>
                </div>
            </div>

            <div class="listings-grid__item">
                <a href="listing-detail.html">
                    <div class="listings-grid__main">
                        <img src="img/demo/listing/thumbs/2.jpg" alt="">
                        <div class="listings-grid__price">$1,200,000</div>
                    </div>

                    <div class="listings-grid__body">
                        <small>Beverly Hills, CA 90210</small>
                        <h5>Duis sollicitudin ante bibendum</h5>
                    </div>

                    <ul class="listings-grid__attrs">
                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                    </ul>
                </a>

                <div class="actions listings-grid__favorite">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>
                </div>
            </div>

            <div class="listings-grid__item">
                <a href="listing-detail.html">
                    <div class="listings-grid__main">
                        <img src="img/demo/listing/thumbs/3.jpg" alt="">
                        <div class="listings-grid__price">$910,000</div>
                    </div>

                    <div class="listings-grid__body">
                        <small>132 04th St, San Francisco</small>
                        <h5>Fusce quis libero nonorcious</h5>
                    </div>

                    <ul class="listings-grid__attrs">
                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 02</li>
                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 01</li>
                    </ul>
                </a>

                <div class="actions listings-grid__favorite">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>
                </div>
            </div>

            <div class="listings-grid__item">
                <a href="listing-detail.html">
                    <div class="listings-grid__main">
                        <img src="img/demo/listing/thumbs/4.jpg" alt="">
                        <div class="listings-grid__price">$2,542,000</div>
                    </div>

                    <div class="listings-grid__body">
                        <small>132 Lockslee, San Francisco</small>
                        <h5>Pellentesque habitant</h5>
                    </div>

                    <ul class="listings-grid__attrs">
                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 05</li>
                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 03</li>
                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 03</li>
                    </ul>
                </a>

                <div class="actions listings-grid__favorite">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>
                </div>
            </div>

            <div class="listings-grid__item">
                <a href="listing-detail.html">
                    <div class="listings-grid__main">
                        <img src="img/demo/listing/thumbs/5.jpg" alt="">
                        <div class="listings-grid__price">$823,000</div>
                    </div>

                    <div class="listings-grid__body">
                        <small>San Francisco, CA 900212 </small>
                        <h5>Maecenas sed purus lorem aliquet cursus</h5>
                    </div>

                    <ul class="listings-grid__attrs">
                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 01</li>
                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 01</li>
                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 0</li>
                    </ul>
                </a>

                <div class="actions listings-grid__favorite">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>
                </div>
            </div>

            <div class="listings-grid__item">
                <a href="listing-detail.html">
                    <div class="listings-grid__main">
                        <img src="img/demo/listing/thumbs/6.jpg" alt="">
                        <div class="listings-grid__price">$1,120,000</div>
                    </div>

                    <div class="listings-grid__body">
                        <small>21120 Broadway St, San Fransisco</small>
                        <h5>Maecenas sed purus at lorem</h5>
                    </div>

                    <ul class="listings-grid__attrs">
                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                    </ul>
                </a>

                <div class="actions listings-grid__favorite">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>
                </div>
            </div>

            <div class="listings-grid__item">
                <a href="listing-detail.html">
                    <div class="listings-grid__main">
                        <img src="img/demo/listing/thumbs/7.jpg" alt="">
                        <div class="listings-grid__price">$3,000,000</div>
                    </div>

                    <div class="listings-grid__body">
                        <small>San Francisco, CA 937202</small>
                        <h5>Nullam finibus libero at hendrerit</h5>
                    </div>

                    <ul class="listings-grid__attrs">
                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 06</li>
                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 05</li>
                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                    </ul>
                </a>

                <div class="actions listings-grid__favorite">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>
                </div>
            </div>

            <div class="listings-grid__item">
                <a href="listing-detail.html">
                    <div class="listings-grid__main">
                        <img src="img/demo/listing/thumbs/8.jpg" alt="">
                        <div class="listings-grid__price">$1,175,000</div>
                    </div>

                    <div class="listings-grid__body">
                        <small>4313 Beverly Hills, CA 90210</small>
                        <h5>1358 Ligula Street, Unit 12</h5>
                    </div>

                    <ul class="listings-grid__attrs">
                        <li><i class="listings-grid__icon listings-grid__icon--bed"></i> 03</li>
                        <li><i class="listings-grid__icon listings-grid__icon--bath"></i> 02</li>
                        <li><i class="listings-grid__icon listings-grid__icon--parking"></i> 02</li>
                    </ul>
                </a>

                <div class="listings-grid__favorite">
                    <div class="actions__toggle">
                        <input type="checkbox">
                        <i class="zmdi zmdi-favorite-outline"></i>
                        <i class="zmdi zmdi-favorite"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="section">
    <div class="container">
        <header class="section__title">
            <h2>Properties for Sale, Rent & Real Estate</h2>
            <small>Villas, Apartments, Office Spaces and Commercial Builsings</small>
        </header>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card__header card__header--minimal">
                        <h2>Recent Properties for Sale</h2>
                        <small>Nunc urnami tempor eget ipsum eurutrum gravida tellus</small>
                    </div>

                    <div class="grid-widget grid-widget--listings">
                        <div class="col-xs-6">
                            <a class="grid-widget__item" href="listing-detail.html">
                                <img src="img/demo/listing/thumbs/9.jpg" alt="">

                                <div class="grid-widget__info">
                                    <h3>$3,452,000</h3>
                                    <small>4313 Beverly Hills, CA 90210</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="grid-widget__item" href="listing-detail.html">
                                <img src="img/demo/listing/thumbs/10.jpg" alt="">

                                <div class="grid-widget__info">
                                    <h3>$990,000</h3>
                                    <small>San Francisco, CA 937202</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="grid-widget__item" href="listing-detail.html">
                                <img src="img/demo/listing/thumbs/11.jpg" alt="">

                                <div class="grid-widget__info">
                                    <h3>1,500,000</h3>
                                    <small>21 Shop St, San Francisco</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="grid-widget__item" href="listing-detail.html">
                                <img src="img/demo/listing/thumbs/12.jpg" alt="">

                                <div class="grid-widget__info">
                                    <h3>$1,650,690</h3>
                                    <small>13 Beverly Hills, CA 01210</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <a class="view-more" href="{{url('property')}}">
                        View all properties for sale <i class="zmdi zmdi-long-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card__header card__header--minimal">
                        <h2>Recent Properties for Rent</h2>
                        <small>Suspendisse quis massa fringilla sagittis velit utultrices tellus</small>
                    </div>

                    <div class="grid-widget grid-widget--listings">
                        <div class="col-xs-6">
                            <a class="grid-widget__item" href="listing-detail.html">
                                <img src="img/demo/listing/thumbs/13.jpg" class="img-responsive" alt="">
                                <div class="grid-widget__info">
                                    <h3>$1,810,000</h3>
                                    <small>4313 Beverly Hills, CA 90210</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="grid-widget__item" href="listing-detail.html">
                                <img src="img/demo/listing/thumbs/14.jpg" alt="">
                                <div class="grid-widget__info">
                                    <h3>$1,782,890</h3>
                                    <small>700 Folcon St, San Fransisco, CA</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="grid-widget__item" href="listing-detail.html">
                                <img src="img/demo/listing/thumbs/15.jpg" alt="">
                                <div class="grid-widget__info">
                                    <h3>$823,000</h3>
                                    <small>1100 Sea avn, San Fransisco, CA</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="grid-widget__item" href="listing-detail.html">
                                <img src="img/demo/listing/thumbs/16.jpg" alt="">
                                <div class="grid-widget__info">
                                    <h3>$2,543,000</h3>
                                    <small>132 04th St, San Francisco</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <a class="view-more" href="{{url('property')}}">
                        View all properties for rent <i class="zmdi zmdi-long-arrow-right"></i>
                    </a>
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

<!-- Select 2 - Custom Selects -->
<script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- Slick Carousel - Custom Alerts -->
<script src="vendors/bower_components/slick-carousel/slick/slick.min.js"></script>

<!-- NoUiSlider -->
<script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

<!-- IE9 Placeholder -->
<!--[if IE 9 ]>
<script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<!-- Site functions and actions -->
<script src="js/app.min.js"></script>

<!-- Demo only -->
<script src="js/demo/demo.js"></script>
</body>

<!-- Mirrored from bootstrapsale.com/projects/roost/v1-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 07:43:55 GMT -->
</html>
