<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/camera.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
  	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="search/search.js"></script>

	
    <script type="text/javascript" src="js/jquery.cookie.js"></script> 
		<script>
        jQuery(document).ready(function(){   
					jQuery('ul.social li a img').animate({'opacity':'.35'},10);
					jQuery('ul.social li a img').hover(
							function () {
									jQuery(this).animate({'opacity':'1'},150);
							},
							function () {
									jQuery(this).animate({'opacity':'.35'},250);
							}
					);
				});    
  	</script>		
  	<!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
   	<![endif]-->
    
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    	<!--[if lt IE 9]>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>

<body>

<div class="top_padding"></div>
  <div id="main">

<!--==============================Header=================================-->
	<header>
  

	<div class="clearfix">
	   <a href="index.html" class="logo">luxury fashion <span>creating a special style</span></a>					
	</div>
				
				
    <!--==============================Nav=================================-->          
    <div id="nav_section">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="navbar navbar_ clearfix">
              <div class="navbar-inner navbar-inner_">
                  <div class="container">
                      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>                                                   
                      <div class="nav-collapse nav-collapse_ collapse">
                          <ul class="nav sf-menu">
                            <li class="">
															<a href="index.html">
																home
															</a>
														</li>
                            <li >
															<a href="index-1.html">
																about us
															</a>
                              <ul>
                                <li>
																	<a href="index-2.html">
																		what we offer
																	</a>
																</li>
																<li class="sub-menu">
																	<a href="index-2.html">
																		who we are
																	</a>
																		<ul>
																			<li>
																				<a href="index-2.html">our models</a>
																			</li>
																			<li>
																				<a href="index-2.html">history</a>
																			</li>
																		</ul>
																</li>
																<li>
																		<a href="404.html">404 page</a>
																</li>
															</ul>
															</li>
															<li class="sub-menu ">
																<a href="index-2.html">
																	designers
																</a>
															</li>
															<li >
																<a href="index-3.html">
																	collections
																</a>
															</li>
															<li >
																<a href="index-4.html">
																	services
																</a>
															</li>
															<li >
																<a href="index-5.html">
																	contacts
																</a>
															</li>
                          </ul>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>   

<!--==============================Search=========================-->
				<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
					<input type="text" name="s"  value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''"  >
					<a href="#" onClick="document.getElementById('search-form').submit()"></a>
				</form>

  	  </div>
    </div>
<!--==============================End Nav=================================-->

<!--==============================Content=================================--> 
<section id="content" class="main-content">
  <div class="container">
	
    <div class="row  clearfix">
			<div class="span12">
					<h1>Search result:</h1>
                <div id="search-results">
								
								</div>
    			<div class="padcontent"></div>
    
			</div>
		</div> 
  </div>
</section>

<div class="clearfix"></div>


</div> <!-- end main -->



<!-- {%   Footer   %} -->

<footer>
	<ul class="bottom_menu">
		<li>
			<a href="index.html">
				Home
			</a>
		</li>
		<li>
			<a href="index-1.html">
				About us
			</a>
		</li>
		<li>
			<a href="index-2.html">
				designers
			</a>
		</li>
		<li>
			<a href="index-3.html">
				collections
			</a>
		</li>
		<li>
			<a href="index-4.html">
				Services
			</a>
		</li>
		<li>
			<a href="index-5.html">
				Contacts
			</a>
		</li>
	</ul>
	
			<h4>luxury fashion</h4>
			
			<ul class="social">
				
				<li><a href="#"><img src="images/social_1.png" alt="" width="35" height="33" border="0" /></a></li>
				<li><a href="#"><img src="images/social_2.png" alt="" width="35" height="33" border="0" /></a></li>
				<li><a href="#"><img src="images/social_3.png" alt="" width="35" height="33" border="0" /></a></li>
				<li><a href="#"><img src="images/social_4.png" alt="" width="35" height="33" border="0" /></a></li>
				<li><a href="#"><img src="images/social_5.png" alt="" width="35" height="33" border="0" /></a></li>
				
			</ul>
	
			<p class="copy">
	Copyright Luxurt Fashion  &copy; 2013. All rights reserved.     /     <a href="index-6.html">Privacy Policy</a>
			</p>
	
	
	
</footer>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>