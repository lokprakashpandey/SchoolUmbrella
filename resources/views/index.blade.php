<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SchoolUmbrella</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/bootstrap-responsive.min.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/main.css')!!}
    {!!Html::style('css/sl-slide.css')!!}
    <!-- yasari laravel ma css haru load garne
    -->

    {!!Html::script('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')!!}
   
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
    <body>
            
        <!--Header-->
        <header class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a id="logo" class="pull-left" href="{{url()}}"></a>
                        <div class="nav-collapse collapse pull-right">
                            <ul class="nav">
                                <li class="active"><a href="{{url()}}">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="career.html">Career</a></li>
                                        <li><a href="blog-item.html">Blog Single</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="{{url('register')}}">Registration</a></li>
                                        <li class="divider"></li>
                                        <li><a href="privacy.html">Privacy Policy</a></li>
                                        <li><a href="terms.html">Terms of Use</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a></li> 
                                <li><a href="#">Contact</a></li>
                                @if(Auth::check())
                                    <li class="login">
                                    <a data-toggle="modal" href="{{url('auth/logout')}}"><i class="icon-lock"></i></a>
                                    </li>
                                    @else
                                    <li class="login">
                                    <a data-toggle="modal" href="{{url('login')}}"><i class="icon-lock"></i></a>
                                    </li>
                                @endif
                                
                            </ul>        
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
        </header>
        <!-- /header -->

        @yield('content')
        
        <!--Bottom-->
        <section id="bottom" class="main">
            <!--Container-->
            <div class="container">

                <!--row-fluids-->
                <div class="row-fluid">

                    <!--Contact Form-->
                    <div class="span3">
                        <h4>ADDRESS</h4>
                        <ul class="unstyled address">
                            <li>
                                <i class="icon-home"></i><strong>Address:</strong> Baluwatar (Near Tundaldevi Temple), Kathmandu, Nepal
                            </li>
                            <li>
                                <i class="icon-envelope"></i>
                                <strong>Email: </strong> 
                                <a data-toggle="modal" data-target="#contactModal">
                                admin@schoolumbrella.com</a>
                            </li>
                            <li>
                                <i class="icon-globe"></i>
                                <strong>Website:</strong> www.schoolumbrella.com
                            </li>
                            <li>
                                <i class="icon-phone"></i>
                                <strong>Landline:</strong> +977-1-401000
                            </li>
                        </ul>
                    </div>
                    <!--End Contact Form-->
                    <!--Important Links-->
                    <div id="tweets" class="span3">
                        <h4>OUR COMPANY</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Copyright</a></li>
                                <li><a href="#">We are hiring</a></li>
                                <li><a href="#">Clients</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>  
                    </div>
                    <!--Important Links-->

                    <!--Archives-->
                    <div id="archives" class="span3">
                        <h4>ARCHIVES</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">December 2012 (1)</a></li>
                                <li><a href="#">November 2012 (5)</a></li>
                                <li><a href="#">October 2012 (8)</a></li>
                                <li><a href="#">September 2012 (10)</a></li>
                                <li><a href="#">August 2012 (29)</a></li>
                                <li><a href="#">July 2012 (1)</a></li>
                                <li><a href="#">June 2012 (31)</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Archives-->

                    <div class="span3">
                        <h4>FLICKR GALLERY</h4>
                        <div class="row-fluid first">
                            <ul class="thumbnails">
                              <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="row-fluid">
                        <ul class="thumbnails">
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                            </li>
                            <li class="span3">
                                <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <!--/row-fluid-->
        </div>
        <!--/container-->

        </section>
        <!--/bottom-->

        <!--Footer-->
        <footer id="footer">
            <div class="container">
                <div class="row-fluid">
                    <div class="span5 cp">
                        &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                    </div>
                    <!--/Copyright-->

                    <div class="span6">
                        <ul class="social pull-right">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                            <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-rss"></i></a></li>
                            <li><a href="#"><i class="icon-github-alt"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                        </ul>
                    </div>

                    <div class="span1">
                        <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
                    </div>
                    <!--/Goto Top-->
                </div>
            </div>
        </footer>
        <!--/Footer-->

        <!--  Login form -->
        <div class="modal hide fade in" id="loginForm" aria-hidden="false">
            <div class="modal-header">
                <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
                <h4>Login Form</h4>
            </div>
            <!--Modal Body-->
            <div class="modal-body">
                <form class="form-inline" action="index.html" method="post" id="form-login">
                    <input type="text" class="input-small" placeholder="Email">
                    <input type="password" class="input-small" placeholder="Password">
                    <label class="checkbox">
                        <input type="checkbox"> Remember me
                    </label>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                <a href="#">Forgot your password?</a>
            </div>
            <!--/Modal Body-->
        </div>




        <!-- Modal -->
         <div id="contactModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Update Courses</h4>
                </div>
                <div class="modal-body">
                
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
    {!!Html::script('js/vendor/jquery-1.9.1.min.js')!!}
    {!!Html::script('js/vendor/bootstrap.min.js')!!}
    {!!Html::script('js/main.js')!!}
    
    <!-- Required javascript files for Slider -->
    {!!Html::script('js/jquery.ba-cond.min.js')!!}
    {!!Html::script('js/jquery.slitslider.js')!!}
    <!-- /Required javascript files for Slider -->

    <!-- SL Slider -->
    {!!Html::script('js/custom.js')!!}
    <script type="text/javascript"> 
    $(function() {
        var Page = (function() {

            var $navArrows = $( '#nav-arrows' ),
            slitslider = $( '#slider' ).slitslider( {
                autoplay : true
            } ),

            init = function() {
                initEvents();
            },
            initEvents = function() {
                $navArrows.children( ':last' ).on( 'click', function() {
                    slitslider.next();
                    return false;
                });

                $navArrows.children( ':first' ).on( 'click', function() {
                    slitslider.previous();
                    return false;
                });
            };

            return { init : init };

        })();

        Page.init();
    });
    </script>   

    </body>
</html>
