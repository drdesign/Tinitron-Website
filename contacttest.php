<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
	
	
 function initialize() {
  var map;
  var mapOptions = {
    zoom: 14,
    center: new google.maps.LatLng(45.5676316, -122.906217),
    disableUi: true
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
  var markers = [
        ['Delegación, Benito Juarez', 45.5676316, -122.906217],
        ['Joaquin Capilla, Benito Juarez', 45.5676316, -122.906217]
    ];
  var image = 'img/mapMarker.png';
    var myLatlng = new google.maps.LatLng(45.5676316, -122.906217);
    var marker_1 = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: image,
        name: 'Benito Juarez'
    });
  google.maps.event.addListener(marker_1, 'click', function() {
    $('#myModal').modal('show');
});
}

google.maps.event.addDomListener(window, 'load', initialize);
	  
	  
	  

    </script> 




  </head>

<body>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Customer Login</h4>
      </div>
      <div class="modal-body">
      <!-- Form -->

<form class="form-signin" role="form">
        <h2 class="form-signin-heading">Customer Portal Sign-In</h2>
        <input type="email" class="form-control" placeholder="Email address" required autofocus>
        <br>
              <input type="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>


      <!-- Form End -->
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>>
  </div>
</div>


 <div class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <!-- Topbar Navigation -->
                <ul class="loginbar pull-right">
                   <!-- <li>
                        <i class="fa fa-globe"></i>
                        <a>Languages</a>
                        <ul class="lenguages">
                            <li class="active">
                                <a href="#">English <i class="fa fa-check"></i></a> 
                            </li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">Portuguese</a></li>
                            <li><a href="#">French</a></li>
                        </ul>
                    </li>                   
                     <li class="topbar-devider"></li> -->  
                    <li><a href=""><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a href="page_login.html" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-user"></i> Customer Login</a></li> 
                    
                 
                </ul>
                <!-- End Topbar Navigation -->
            </div>
        </div>
        <!-- End Topbar -->
    
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img id="logo-header" src="img/tinitronLogo.png" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="dropdown">
                            <a href="index.html">
                                 <i class="glyphicon glyphicon-home"></i>&nbsp;Home
                            </a>

                        </li>
                        <!-- End Home -->

                        <!-- Products -->                        
                        <li class="dropdown">
                            <a href="products.html" class="dropdown-toggle">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <!-- About Pages -->
                      			<li><a href="powerQaulitySystems.html">Power Quality Systems</a></li>
                                <li><a href="powerTransformers.html">Power Transformers</a></li>
                                <li><a href="powerSupplySystems.html">Power Supply Systems</a></li>
                                <li><a href="highVoltageTransformers.html">High Voltage Transformers</a></li>
                                <li><a href="highFrequencyComponents.html">High Frequency Components</a></li>
                                <li><a href="specialHardware.html">Special Hardware</a></li>
                                <li><a href="liquidCooledTransformers.html">Liquid Cooled Transformers</a></li>
                                <li><a href="magneticComponents.html">Magnetic Components</a></li>
                                <li><a href="cicrcuitBoardMountedTransformers.html">Circuit Board Mounted Transformers</a></li>
                                <li><a href="batteryChargers.html">Battery Chargers</a></li>
                                <li><a href="inductiveComponents.html;">Inductive Components</a></li>
                                <li><a href="currentTransformers.html">Current Transformers</a></li>
                                <li><a href="javascript:void(0);">Power Distribution Units</a></li>
                                <li><a href="javascript:void(0);">Isolation Transformers</a></li>
                                <li><a href="javascript:void(0);">Transformer Remanufacture</a></li>
                                <li><a href="javascript:void(0);">Electronic Cathodic Protection </a></li>
                                <li><a href="javascript:void(0);">Toroidal Transformers</a></li>
                                <li><a href="javascript:void(0);">Line Filters & Reactors</a></li>
                                <li><a href="javascript:void(0);">Harmonic Noise Cancellation </a></li>
                                <li><a href="javascript:void(0);">Power Protection</a></li>
                                <li><a href="javascript:void(0);">Specialty Applications</a></li>
                                <li><a href="javascript:void(0);">Research & Design </a></li>
    
                            </ul>
                        </li>
                        <!-- Products -->

                        <!-- About Us -->
             			<li class="dropdown">
                            <a href="aboutUs.html" class="dropdown-toggle">
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <!-- About Pages -->
                                <li><a href="javascript:void(0);">Overview</a></li>
                                <li><a href="javascript:void(0);">History</a></li>
                                <li><a href="javascript:void(0);">Leadership</a></li>
                            </ul>
                        </li>
                        <!-- About Us -->

                        <!-- News -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                News
                            </a>
                        </li>
                        <!-- Ens News -->

                        <!-- Careers -->
                        <!-- <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                               Careers
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="blog_page.html">Overview</a></li>
                                <li><a href="blog_large.html">Culture</a></li>
                                <li><a href="blog_medium.html">Opportunities</a></li>
                                <li><a href="blog_full_width.html">University Students</a></li>
                            </ul>
                        </li> -->
                        <!-- Careers -->

                        <!-- Contacts -->
                        <li class="dropdown">
                            <a href="contact.html" class="dropdown-toggle" data-toggle="dropdown">
                                Contacts
                            </a>
                        </li> 
                        
                                          
                        <ul class="header-social"> 
                        	
                       	
                            <a href="https://www.facebook.com/tinitroninc"><li class="facebook social-slide"></li></a>
                             <a href="https://www.facebook.com/tinitroninc"><li class="youTube social-slide"></li></a>
                             <a href="https://www.facebook.com/tinitroninc"><li class="twitter social-slide"></li></a>
                             <a href="https://www.facebook.com/tinitroninc"><li class="linkedIn social-slide"></li></a>
                            
                        
                        </ul>
                        </ul>
               
                     
                        </div>
                    
   		
                        
                        
                     
               
                      
                    
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contact <small>We'd Love to Hear From You!</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>
</div><!-- /.row -->

<div id="map-canvas"></div>


      
      <div class="row">

        <div class="col-sm-8">
          <h3>Contact Us</h3>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Tinitron, Inc. </h3>
          <h4>Headquarters</h4>
          <p>
            <i class="glyphicon glyphicon-home"></i>  6501 NW Croeni Rd.
<br><i class="glyphicon glyphicon-home" style="color:#FFF"></i> Hillsboro, OR 97124 <br>
<br>
                        <i class="glyphicon glyphicon-phone-alt"></i>  Toll Free: 1-877-Tinitron 
                        <br>

                     
                   
                    
                        <i class="glyphicon glyphicon-envelope"></i>  Email: <a href="mailto:info@tinitron.com" class="">info@tinitron.com</a></p>
       
          <div class="footer-social">
                    <ul>
                		<a href="https://www.facebook.com/tinitroninc"><li class="facebook-footer social-slide"></li></a>
                             <a href="https://www.facebook.com/tinitroninc"><li class="youTube-footer social-slide"></li></a>
                             <a href="https://www.facebook.com/tinitroninc"><li class="twitter-footer social-slide"></li></a>
                             <a href="https://www.facebook.com/tinitroninc"><li class="linkedIn-footer social-slide"></li></a>
          
                    </ul>
                    </div>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <!--- Footer -->
<footer class">
<div class=footer section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- About -->
                    <div class="headline"><h2>About</h2></div>  
                    <p class="margin-bottom-25 md-margin-bottom-40">Tinitron, Inc. manufactures 5,000 different components for applications in various industries.</p>    
                    <!-- End About -->

                    <!-- Monthly Newsletter -->
                    <div class="headline"><h2>Monthly Newsletter</h2></div> 
                    <p>Subscribe to our newsletter and stay up to date with the latest news.</p>
                    <form class="footer-subsribe">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">                            
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-primary" type="button">Subscribe <i class="glyphicon glyphicon-chevron-right"></i></button>
                            </span>
                        </div>                  
                    </form>                         
                    <!-- End Monthly Newsletter -->
                </div><!--/col-md-4-->  
                
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- Recent Blogs -->
                    <div class="posts">
                        <div class="headline"><h2>Recent News</h2></div>
                        <dl class="dl-horizontal">
                            <dt><a href="news.html"><img src="img/6-50.jpg" alt=""></a></dt>
                            <dd>
                                <p><a href="news.html"><strong>Tinitron Motors</strong> unveils their latest offering in &quot;Green Power&quot; field with a line of...</a></p> 
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                        <dt><a href="#"><img src="img/6-50.jpg" alt=""></a></dt>
                            <dd>
                                <p><a href="#">Solar-powered water pumping stations for farms, ranches...</a></p> 
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                        <dt><a href="#"><img src="img/6-50.jpg" alt=""></a></dt>
                            <dd>
                                <p><a href="#">Tech Manufacturer Tinitron &quot;Best-Kept Secret&quot; untill Fall, 2009...</a></p> 
                            </dd>
                        </dl>
                    </div>
                    <!-- End Recent Blogs -->                    
                </div><!--/col-md-4-->

                <div class="col-md-4">
                    <!-- Contact Us -->
                    <div class="headline"><h2>Contact Us</h2></div> 
                    <address class="md-margin-bottom-40">
                        <i class="glyphicon glyphicon-home"></i>  6501 NW Croeni Rd.
<br><i class="glyphicon glyphicon-home" style="color:#FFF"></i> Hillsboro, OR 97124 <br>
<br>
                        <i class="glyphicon glyphicon-phone-alt"></i>  Toll Free: 1-877-Tinitron 
                        <br>

                     
                   
                    
                        <i class="glyphicon glyphicon-envelope"></i>  Email: <a href="mailto:info@tinitron.com" class="">info@tinitron.com</a>
                    </address>
                    <!-- End Contact Us -->

                    <!-- Social Links -->
                    <div class="headline"><h2>Stay Connected</h2></div> 
                    <div class="footer-social">
                    <ul>
                		<a href="https://www.facebook.com/tinitroninc"><li class="facebook-footer social-slide"></li></a>
                             <a href="https://www.facebook.com/tinitroninc"><li class="youTube-footer social-slide"></li></a>
                             <a href="https://www.facebook.com/tinitroninc"><li class="twitter-footer social-slide"></li></a>
                             <a href="https://www.facebook.com/tinitroninc"><li class="linkedIn-footer social-slide"></li></a>
          
                    </ul>
                    </div>
                    <!-- End Social Links -->
                </div><!--/col-md-4-->
            </div>
        </div> 
  </div>    

	  
</footer>
<hr class="featurette-divider">
<div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">                     
                    <p>
                        2014 © Tinitron. ALL Rights Reserved. 
                    </p>
                </div>
                <div class="col-md-6">  
                    <a href="index.html">
                        <img class="pull-right" id="logo-footer" src="img/tinitronLogo.png" alt="">
                    </a>
                </div>
            </div>
        </div> 
    </div>
<!-- /Footer-->

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    
      <!-- Add Retina Js -->
    <script type="text/javascript" src="/scripts/retina.js"></script>
    
    

</body>

</html>

