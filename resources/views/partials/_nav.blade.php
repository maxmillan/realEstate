<div class="header__top">
    <div class="container">
        <ul class="top-nav">
            <li class="dropdown top-nav__guest">
                <a data-toggle="dropdown" href="#">Register</a>

                <form class="dropdown-menu stop-propagate">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                        <i class="form-group__bar"></i>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                        <i class="form-group__bar"></i>
                    </div>

                    <p><small>By Signing up with Landline, you're agreeing to our <a href="#">terms and conditions</a>.</small></p>

                    <button class="btn btn-primary btn-block m-t-10 m-b-10">Register</button>

                    <div class="text-center"><small><a href="#">Are you an Agent?</a></small></div>

                    <div class="top-nav__auth">
                        <span>or</span>

                        <div>Sign in using</div>

                        <a href="#" class="mdc-bg-blue-500">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>

                        <a href="#" class="mdc-bg-cyan-500">
                            <i class="zmdi zmdi-twitter"></i>
                        </a>

                        <a href="#" class="mdc-bg-red-400">
                            <i class="zmdi zmdi-google"></i>
                        </a>
                    </div>

                </form>
            </li>

            <li class="dropdown top-nav__guest">
                <a data-toggle="dropdown" href="#" data-rmd-action="switch-login">Login</a>

                <div class="dropdown-menu">
                    <div class="tab-content">
                        <form class="tab-pane active in fade" id="top-nav-login">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                                <i class="form-group__bar"></i>
                            </div>

                            <button class="btn btn-primary btn-block m-t-10 m-b-10">Login</button>

                            <div class="text-center">
                                <a href="#top-nav-forgot-password" data-toggle="tab"><small>Forgot email/password?</small></a>
                            </div>

                            <div class="top-nav__auth">
                                <span>or</span>

                                <div>Sign in using</div>

                                <a href="#" class="mdc-bg-blue-500">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>

                                <a href="#" class="mdc-bg-cyan-500">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>

                                <a href="#" class="mdc-bg-red-400">
                                    <i class="zmdi zmdi-google"></i>
                                </a>
                            </div>
                        </form>

                        <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                            <a href="#top-nav-login" class="top-nav__back" data-toggle="tab"></a>

                            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Emaill Address">
                                <i class="form-group__bar"></i>
                            </div>

                            <button class="btn btn-warning btn-block">Reset Password</button>
                        </form>
                    </div>
                </div>
            </li>

            <li class="pull-right top-nav__icon">
                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
            </li>
            <li class="pull-right top-nav__icon">
                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
            </li>
            <li class="pull-right top-nav__icon">
                <a href="#"><i class="zmdi zmdi-google"></i></a>
            </li>

            <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-email"></i>francisnjunge05@gmail.com</span></li>
            <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-phone"></i>0721-212159</span></li>
        </ul>
    </div>
</div>
<div class="header__main">
    <div class="container">
        <a class="logo" href="{{url('/')}}">
            <img src="img/logo.png" alt="">
            <div class="logo__text">
                <span>Landline Property Consultant</span>
                <span>Real Estate $ Property Consultant</span>
            </div>
        </a>

        <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
            <i class="zmdi zmdi-menu"></i>
        </div>

        <ul class="navigation">
            <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>

            <li class="navigation__dropdown">
                <a href="{{url('/')}}">Home</a>

            </li>

            <li class="navigation__dropdown">
                <a href="{{url('property')}}">Listing</a>

            </li>



            <li class="navigation__dropdown">
                <a href="{{url('#')}}">Mortgages</a>
            </li>

            <li class="navigation__dropdown">
                <a href="{{url('#')}}">Agents</a>

            </li>

            <li><a href="{{url('contact')}}">Contact</a></li>

            <li class="navigation__dropdown">
                <a href="#" class="prevent-default">More</a>

            </li>
        </ul>
    </div>
</div>
