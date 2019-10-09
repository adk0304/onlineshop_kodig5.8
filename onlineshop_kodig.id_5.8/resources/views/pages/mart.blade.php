@extends('layouts.frontend.master')
@section('content')

    <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
            <div class="c-navbar">
                <div class="container">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="index.html" class="c-logo">
                                <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo">
                                <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo-inverse">
                                <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-mobile-logo"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button class="c-search-toggler" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="c-cart-toggler" type="button">
                                <i class="icon-handbag"></i>
                                <span class="c-cart-number c-theme-bg">2</span>
                            </button>
                        </div>
                        <!-- END: BRAND -->
                        <!-- BEGIN: QUICK SEARCH -->
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                        <!-- END: QUICK SEARCH -->
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li class="c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Home
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                                <li class="c-menu-type-classic">
                                    <a href="javascript:;" class="c-link dropdown-toggle">Mart
                                        <span class="c-arrow c-toggler"></span>
                                    </a>

                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">Event
                                        <span class="c-arrow c-toggler"></span>
                                    </a>

                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">News
                                        <span class="c-arrow c-toggler"></span>
                                    </a>

                                </li>
                                <li>
                                    <a href="javascript:;" class="c-link dropdown-toggle">About us
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
    

                                    <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                                    <!-- BEGIN: MOBILE VERSION OF THE TAB MEGA MENU -->
                                    <ul class="dropdown-menu c-menu-type-mega c-visible-mobile">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Jango Components
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabbed-contents.html">Tabbed Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-1.html">Parallax Blocks 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-parallax-2.html">Parallax Blocks 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features.html">Feature Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-features-2.html">Feature Blocks 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-latest-works.html">Latest Works</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-latest-items.html">Latest Items</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tiles.html">Tiles</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-services.html">Services</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blog-elements.html">Blog Elements</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-counters.html">Counters</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-bars.html">Engage Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope.html">Isotope Gallery</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-isotope-grid.html">Isotope Grid</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-pricing-tables-1.html">Pricing Tables 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-pricing-tables-2.html">Pricing Tables 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials.html">Testimonials</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-testimonials-2.html">Testimonials 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-clients.html">Clients</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-abouts.html">About Blocks</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-dividers.html">Dividers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-steps.html">Steps</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-app-showcase.html">App Showcase</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-team.html">Team</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-headings.html">Headings</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-accordions.html">Accordion Contents</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars-2.html">Animated Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-subscribe-form-1.html">Subscribe Form Bars</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Base Components
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-lists.html">Lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-blockquotes.html">Blockquotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-navs.html">Navigations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-fontawesome-icons.html">Fontawesome Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-simpleline-icons.html">Simple Line Icons</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-glyphicons-icons.html">Glyphicons Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-custom-icons.html">Custom Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-social-icons.html">Social Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-media-embeds.html">Media Embeds</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-labels-badges.html">Labels & Badges</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-colors.html">UI Colors</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-buttons.html">Buttons</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-form-controls.html">Form Controls</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-tables.html">Tables</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-modals.html">Modals</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="dropdown-menu c-menu-type-inline">
                                                            <li>
                                                                <a href="component-tabs.html">Tabs</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-paginations.html">Paginations</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-panels.html">Panels</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-progress-bars.html">Progress Bars</a>
                                                            </li>
                                                            <li>
                                                                <a href="component-alerts.html">Alerts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->
                                </li>
                                <li class="c-search-toggler-wrapper">
                                    <a href="#" class="c-btn-icon c-search-toggler">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li class="c-cart-toggler-wrapper">
                                    <a href="#" class="c-btn-icon c-cart-toggler">
                                        <i class="icon-handbag c-cart-icon"></i>
                                        <span class="c-cart-number c-theme-bg">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                        <i class="icon-user"></i> Sign In</a>
                                </li>
                                
                            </ul>
                        </nav>
                        <!-- END: MEGA MENU -->
                        <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->
                    </div>
                    <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                    <!-- BEGIN: CART MENU -->
                    <div class="c-cart-menu">
                        <div class="c-cart-menu-title">
                            <p class="c-cart-menu-float-l c-font-sbold">2 item(s)</p>
                            <p class="c-cart-menu-float-r c-theme-font c-font-sbold">$79.00</p>
                        </div>
                        <ul class="c-cart-menu-items">
                            <li>
                                <div class="c-cart-menu-close">
                                    <a href="#" class="c-theme-link">×</a>
                                </div>
                                <img src="assets/base/img/content/shop2/24.jpg" />
                                <div class="c-cart-menu-content">
                                    <p>1 x
                                        <span class="c-item-price c-theme-font">$30</span>
                                    </p>
                                    <a href="shop-product-details-2.html" class="c-item-name c-font-sbold">Winter Coat</a>
                                </div>
                            </li>
                            <li>
                                <div class="c-cart-menu-close">
                                    <a href="#" class="c-theme-link">×</a>
                                </div>
                                <img src="assets/base/img/content/shop2/12.jpg" />
                                <div class="c-cart-menu-content">
                                    <p>1 x
                                        <span class="c-item-price c-theme-font">$30</span>
                                    </p>
                                    <a href="shop-product-details.html" class="c-item-name c-font-sbold">Sports Wear</a>
                                </div>
                            </li>
                        </ul>
                        <div class="c-cart-menu-footer">
                            <a href="shop-cart.html" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
                            <a href="shop-checkout.html" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
                        </div>
                    </div>
                    <!-- END: CART MENU -->
                    <!-- END: LAYOUT/HEADERS/QUICK-CART -->
                </div>
            </div>
        </header>
        <!-- END: HEADER -->
        <!-- END: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                        <p>To recover your password please fill in your email address</p>
                        <form>
                            <div class="form-group">
                                <label for="forget-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
        <div class="modal fade c-content-login-form" id="signup-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                        <p>Please fill in below form to create an account with us</p>
                        <form>
                            <div class="form-group">
                                <label for="signup-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <label for="signup-username" class="hide">Username</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="Username"> </div>
                            <div class="form-group">
                                <label for="signup-fullname" class="hide">Fullname</label>
                                <input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="Fullname"> </div>
                            <div class="form-group">
                                <label for="signup-country" class="hide">Country</label>
                                <select class="form-control input-lg c-square" id="signup-country">
                                    <option value="1">Country</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/SIGNUP-FORM -->
        <!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
        <div class="modal fade c-content-login-form" id="login-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                        <p>Let's make today a great day!</p>
                        <form>
                            <div class="form-group">
                                <label for="login-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <label for="login-password" class="hide">Password</label>
                                <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password"> </div>
                            <div class="form-group">
                                <div class="c-checkbox">
                                    <input type="checkbox" id="login-rememberme" class="c-check">
                                    <label for="login-rememberme" class="c-font-thin c-font-17">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Remember Me </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                                <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                            </div>
                            <div class="clearfix">
                                <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                                    <span>or signup with</span>
                                </div>
                                <ul class="c-content-list-adjusted">
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                            <i class="fa fa-twitter"></i> Twitter </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                            <i class="fa fa-facebook"></i> Facebook </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-google">
                                            <i class="fa fa-google"></i> Google </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/LOGIN-FORM -->
        <!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
        <nav class="c-layout-quick-sidebar">
            <div class="c-header">
                <button type="button" class="c-link c-close">
                    <i class="icon-login"></i>
                </button>
            </div>
            <div class="c-content">
                <div class="c-section">
                    <h3>Theme Colors</h3>
                    <div class="c-settings">
                        <span class="c-color c-default c-active" data-color="default"></span>
                        <span class="c-color c-green1" data-color="green1"></span>
                        <span class="c-color c-green2" data-color="green2"></span>
                        <span class="c-color c-green3" data-color="green3"></span>
                        <span class="c-color c-yellow1" data-color="yellow1"></span>
                        <span class="c-color c-yellow2" data-color="yellow2"></span>
                        <span class="c-color c-yellow3" data-color="yellow3"></span>
                        <span class="c-color c-red1" data-color="red1"></span>
                        <span class="c-color c-red2" data-color="red2"></span>
                        <span class="c-color c-red3" data-color="red3"></span>
                        <span class="c-color c-purple1" data-color="purple1"></span>
                        <span class="c-color c-purple2" data-color="purple2"></span>
                        <span class="c-color c-purple3" data-color="purple3"></span>
                        <span class="c-color c-blue1" data-color="blue1"></span>
                        <span class="c-color c-blue2" data-color="blue2"></span>
                        <span class="c-color c-blue3" data-color="blue3"></span>
                        <span class="c-color c-brown1" data-color="brown1"></span>
                        <span class="c-color c-brown2" data-color="brown2"></span>
                        <span class="c-color c-brown3" data-color="brown3"></span>
                        <span class="c-color c-dark1" data-color="dark1"></span>
                        <span class="c-color c-dark2" data-color="dark2"></span>
                        <span class="c-color c-dark3" data-color="dark3"></span>
                    </div>
                </div>
                <div class="c-section">
                    <h3>Header Type</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="boxed" value="boxed" />
                        <input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="fluid" value="fluid" /> </div>
                </div>
                <div class="c-section">
                    <h3>Header Mode</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed" />
                        <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static" /> </div>
                </div>
                <div class="c-section">
                    <h3>Mega Menu Style</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="dark" value="dark" />
                        <input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
                </div>
                <div class="c-section">
                    <h3>Font Style</h3>
                    <div class="c-settings">
                        <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="default" value="default" />
                        <input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light" /> </div>
                </div>
                <div class="c-section">
                    <h3>Reading Style</h3>
                    <div class="c-settings">
                        <a href="http://www.themehats.com/themes/jango/" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active">LTR</a>
                        <a href="http://www.themehats.com/themes/jango/rtl/" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase ">RTL</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Product Grid</h3>
                        <h4 class="">Page Sub Title Goes Here</h4>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="shop-product-grid.html">Product Grid</a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active">Jango Components</li>
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="container">
                <div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </a>
                    </div>
                    <ul class="c-shop-filter-search-1 list-unstyled">
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Category</label>
                            <select class="form-control c-square c-theme">
                                <option value="0">All Categories</option>
                                <option value="1">Art</option>
                                <option value="2">Baby</option>
                                <option value="3">Books</option>
                                <option value="4">Business &amp; Industrial</option>
                                <option value="5">Cameras &amp; Photo</option>
                                <option value="6">Cell Phones &amp; Accessories</option>
                                <option value="7">Clothing, Shoes &amp; Accessories</option>
                                <option value="8">Coins &amp; Paper Money</option>
                                <option value="9">Collectibles</option>
                                <option value="10">Computers/Tablets &amp; Networking</option>
                            </select>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Availability</label>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-3-1" class="c-check">
                                <label for="checkbox-sidebar-3-1">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p>Not Available (3)</p>
                                </label>
                            </div>
                            <div class="c-checkbox c-checkbox-height">
                                <input type="checkbox" id="checkbox-sidebar-3-2" class="c-check">
                                <label for="checkbox-sidebar-3-2">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p>In Stock (23)</p>
                                </label>
                            </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Range</label>
                            <div class="c-price-range-box input-group">
                                <div class="c-price input-group col-md-6 pull-left">
                                    <span class="input-group-addon c-square c-theme">$</span>
                                    <input type="text" class="form-control c-square c-theme" placeholder="from"> </div>
                                <div class="c-price input-group col-md-6 pull-left">
                                    <span class="input-group-addon c-square c-theme">$</span>
                                    <input type="text" class="form-control c-square c-theme" placeholder="to"> </div>
                            </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Range Slider Color</label>
                            <p>Price Range: $1 - $ 500</p>
                            <div class="c-price-range-slider c-theme-1 input-group">
                                <input type="text" class="c-price-slider" value="" data-slider-min="1" data-slider-max="500" data-slider-step="1" data-slider-value="[100,250]"> </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Range Slider Color</label>
                            <p>Price Range: $1 - $ 500</p>
                            <div class="c-price-range-slider c-theme-2 input-group">
                                <input type="text" class="c-price-slider" value="" data-slider-handle="square" data-slider-min="1" data-slider-max="500" data-slider-step="1" data-slider-value="[100,250]"> </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Group</label>
                            <div class="input-group">
                                <div class="c-checkbox">
                                    <input type="checkbox" id="checkbox-sidebar-1-1" class="c-check">
                                    <label for="checkbox-sidebar-1-1">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $0 - $10 (15) </label>
                                </div>
                                <div class="c-checkbox">
                                    <input type="checkbox" id="checkbox-sidebar-1-2" class="c-check">
                                    <label for="checkbox-sidebar-1-2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $11 - $20 (17) </label>
                                </div>
                                <div class="c-checkbox">
                                    <input type="checkbox" id="checkbox-sidebar-1-3" class="c-check">
                                    <label for="checkbox-sidebar-1-3">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $21 - $30 (23) </label>
                                </div>
                                <div class="c-checkbox c-checkbox-height">
                                    <input type="checkbox" id="checkbox-sidebar-1-4" class="c-check">
                                    <label for="checkbox-sidebar-1-4">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $31 - $40 (19) </label>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
                    <div class="c-shop-result-filter-1 clearfix form-inline">
                        <div class="c-filter">
                            <label class="control-label c-font-16">Show:</label>
                            <select class="form-control c-square c-theme c-input">
                                <option value="#?limit=24" selected="selected">24</option>
                                <option value="#?limit=25">25</option>
                                <option value="#?limit=50">50</option>
                                <option value="#?limit=75">75</option>
                                <option value="#?limit=100" selected>100</option>
                            </select>
                        </div>
                        <div class="c-filter">
                            <label class="control-label c-font-16">Sort&nbsp;By:</label>
                            <select class="form-control c-square c-theme c-input">
                                <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                <option value="#?sort=p.price&amp;order=DESC" selected>Price (High &gt; Low)</option>
                                <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
                    <div class="c-margin-t-20"></div>
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-7 -->
                    <div class="c-bs-grid-small-space">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/100.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Smartphone & Handset</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/83.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Camera Lens</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/95.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Shoes & Tie</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/98.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Smartphone & Handset</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/101.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/93.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Exclusive Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/96.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/53.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">iMac, iPad & iPhone</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/93.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/101.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Exclusive Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/100.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/102.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">iMac, iPad & iPhone</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-2-7 -->
                    <div class="c-margin-t-20"></div>
                    <ul class="c-content-pagination c-square c-theme pull-right">
                        <li class="c-prev">
                            <a href="#">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="c-active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li class="c-next">
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
