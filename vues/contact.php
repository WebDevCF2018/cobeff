<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Metro Fit Contact</title>
<!--
Metro Fit
http://www.templatemo.com/tm-495-metro-fit
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                 <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        <!-- Header gallery -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <section class="tm-header-gallery">
                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0">
                            <a href="img/img-21-04.jpg">
                                <img src="img/img-21-04.jpg" alt="Image" class="img-fluid tm-header-img">    
                            </a>                         
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0">
                            
                            <div class="tm-site-name">
                                <h1 class="text-uppercase tm-site-name-h1">Metro Fit</h1>
                                <h2 class="tm-site-name-h2">by templatemo</h2>    
                            </div>
                            
                            <img src="img/logo-bg.jpg" alt="Image" class="img-fluid tm-header-img">
                        </div>
                                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0">
                            <a href="img/img-21-02.jpg">
                                <img src="img/img-21-02.jpg" alt="Image" class="img-fluid tm-header-img">        
                            </a>                       
                        </div>                
                        
                    </section>
                </div>
            </div>                
            
            <!-- Navigation -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar">
                        <div id="tmNavbar">
                            <div class="nav navbar-nav tm-nav">
                                
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                                    <div class="nav-item">
                                        <a class="nav-link" href="accueil.html">Home</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </div>    
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                                        <a class="nav-link" href="services.php">Services</a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                                        <a class="nav-link" href="blog.php">Blog</a>
                                    </div>    
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item active">
                                        <a class="nav-link" href="contact.php">Contact</a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item tm-dummy-nav-item">
                                        <div class="nav-link">&nbsp;</div>
                                    </div>
                                </div>                            
                                
                            </div>    
                        </div>                    
                    </nav>     
                </div>
                   
            </div> <!-- row -->

            <div class="row tm-contact-form-row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-contact-form-col-left">
                    <h2 class="tm-contact-form-title">Contact Us</h2>
                    <form action="contact.php" method="post" class="tm-contact-form">
                    
                        <div class="form-group">
                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                        </div>
                        <div class="form-group">
                            <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                        </div>    
                        
                        <div class="form-group">
                            <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                        </div>    
                        
                        <div class="form-group">
                            <button type="submit" class="pull-xs-right tm-submit-btn">Submit</button>
                        </div>
                        
                    </form>  
                </div>

                <!-- Google Map -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="tm-contact-form-title">Location</h2>
                    <div id="google-map"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="tm-search-form-container tm-blue-bg">
                        <form class="form-inline tm-search-form" method="get" action="contact.php">
                          <div class="form-group tm-form-group-search">
                            <input type="text" name="search_term" class="form-control tm-search-input" id="inputSearch" placeholder="Type your question...">
                          </div>
                          <button type="submit" class="btn tm-search-btn">Search</button>
                        </form>
                    </div>                    
                </div>
            </div> <!-- row -->

            <div class="row tm-faq-row">
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    
                    <div class="tm-about-box">
                        <h2 class="tm-about-title">Frequent Questions</h2>
                        <p class="tm-about-description tm-highlight-text">1. Maecenas venenatis neque non nisl tincidunt rhoncus. Duis accumsan turpis a lacus interdum, eu varius augue maximus. Ut faucibus pharetra neque?</p>
                        <p class="tm-about-description">Quisque interdum nisl sit amet turpis auctor, quis suscipit ipsum congue. Naecenas id tortor ultrices tellus maximus varius at vel neque. Aliquam vitae tortor suscipit.</p>

                        <p class="tm-about-description tm-highlight-text">2. Fusce maximus et mi vitae eleifend. Quisque dapibus ex eu massa dapibus, sollicitudin aliquet quam accumsan?</p>

                        <p class="tm-about-description">Quisque interdum nisl sit amet turpis auctor, quis suscipit ipsum congue. Naecenas id tortor ultrices tellus maximus varius at vel neque. Aliquam vitae tortor suscipit.</p>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    
                    <div class="tm-about-box">
                        <h2 class="tm-about-title">&nbsp;</h2>
                        <p class="tm-about-description tm-highlight-text">3. Donec efficitur maximus nisl quis semper. Nullam lobortis, ante ac rutrum tristique, ligula justo imperdiet eros, et semper augue tellus quis est?</p>
                        <p class="tm-about-description">Ut varius ante non purus tempus dignissim. Integer rhoncus et elit sit amet aliquet. Proin molestie ligula luctus, pellentesque lectus ut, viverra mauris. Aliquam vitae.</p>
                        <p class="tm-about-description tm-highlight-text">4. Cras aliquam magna ipsum, in suscipit elit tristique sit amet. Sed lobortis neque eu dui eleifend hendrerit?</p>
                        <p class="tm-about-description">Praesent convallis felis sed efficitur porta. Duis vitae eros elit. Nam vitae quam metus. Nam congue augue non accumsan consequat. Proin consequat elit ut velit.</p>
                    </div>
                    
                </div>

            </div>

            <div class="row tm-nav-2-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <nav class="tm-flex-center">
                        <ul class="tm-nav-2">
                            <li class="tm-nav-item-2"><a href="accueil.php" class="tm-nav-link-2">Home</a></li>
                            <li class="tm-nav-item-2"><a href="about.php" class="tm-nav-link-2">About</a></li>
                            <li class="tm-nav-item-2"><a href="services.php" class="tm-nav-link-2">Services</a></li>
                            <li class="tm-nav-item-2"><a href="blog.php" class="tm-nav-link-2">Blog</a></li>
                            <li class="tm-nav-item-2"><a href="contact.php" class="tm-nav-link-2">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div> <!-- row -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="tm-social-icons-container text-xs-center">
                        <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <footer class="row tm-footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p class="text-xs-center tm-copyright">Copyright &copy; 2016 Your Company 
                    
                    | Design: <a href="http://www.google.com/+templatemo" target="_parent">Templatemo</a></p>
                </div>
            </footer>
            
        </div> <!-- container-fluid -->
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script>     
       
            $(window).load(function(){

                /* Gallery pop up
                -----------------------------------------*/
                $('.tm-header-gallery').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
                           
            });

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(37.769725, -122.462154),
                    scrollwheel: false
                };
            
                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });
            
                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
        
            // DOM is ready
            $(function() {                
                loadGoogleMap(); // Google Map
            });

        </script>             

</body>
</html>
