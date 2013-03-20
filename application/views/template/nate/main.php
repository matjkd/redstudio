<!DOCTYPE html>
<html lang="en">
<head>
<?php $theme_location = base_url()."css/nate/"; ?>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Redstudio Design Limited </title> 
	<meta content="Web design and development company based in Essex" name="description">
	<!-- end: Meta -->
	<link href="https://plus.google.com/100045574150127148775" rel="publisher" />
	<!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<!-- end: Mobile Specific -->

    <!-- start: CSS -->
    
    <link rel="stylesheet" href="<?=$theme_location?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=$theme_location?>css/bootstrap-responsive.css">
    <link rel="stylesheet" href="<?=$theme_location?>css/style.css">
    <!-- end: CSS -->

	<!-- start: favicon -->
	<link href="//s3.amazonaws.com/wrapbootstrap/live/imgs/favicon.ico" rel="shortcut icon">
	<!-- end: favicon -->



    <!--[if IE 9]>
		<style>.img-mask .flipper {display: none;}</style>
	<![endif]-->  
    <!--[if IE 8]>
		<style>.boxy{position:relative;width:150px;height:150px;}.flipper {overflow: hidden;}.subscribe input[type="text"], .subscribe textarea {width: 35%;}.plan-background {background-position: center;background-repeat: repeat-x;border:none;} .sign-background {background-position: center;background-repeat: repeat-x;border:none;}.countdown-background {background-position: center;background-repeat: repeat-x;border:none;}.page-title {background-position: center;background-repeat: repeat-x;border:none;}.img-mask .flipper {display: none;}</style>	
	<![endif]-->
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-920708-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<header id="header">

	<!--start: navbar -->
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a data-toggle="collapse" data-target=".nav-collapse" class="btn btn-navbar">
					<span><i class="icon-reorder"></i></span>
				</a>
				
				<a class="btn btn-navbar" href="tel:07734944112"><i class="icon-phone"></i></a>
				<a class="btn btn-navbar" href="http://goo.gl/maps/fVkWN"><i class="icon-map-marker"></i></a>

				<a class="brand" href="<?=base_url()?>"><span><i class="icon-stop"></i></span>redstudio</a>

				<div id="top-navigation" class="nav-collapse subnav-collapse collapse ">
					<ul class="nav pull-right">
						<li class="active">
							<a href="<?=base_url()?>">Home</a>
						</li>
						
						<li class=""><a href="<?=base_url()?>welcome/contentpage/about-us">About Us</a></li>
						
						
						<li class=""><a href="<?=base_url()?>welcome/contentpage/contact">Contact</a></li>
						
						<li class="top-account visible-desktop"><a class="top-sign-in" href="<?=base_url()?>welcome/contentpage/call-back">Call Back Request</a></li>
					</ul>
				</div>	
		
			</div>
		</div>
	</div><!--end: navbar -->

</header>
 <?=$this -> load -> view('global/warning') ?>
 
 
<?php if(isset($slideshow)) { ?>
<?=$this->load->view($slideshow)?>
<?php } ?>

<?php if(isset($page)) { ?>
<?=$this->load->view("template/nate/parts/".$page)?>
<?php } ?>

<?php if(isset($latest_works)) { ?>
<?=$this->load->view($latest_works)?>
<?php } ?>



<?php if(isset($hello)) { ?>
<?=$this->load->view($hello)?>
<?php } ?>




<?=$this->load->view('template/nate/parts/social_links')?>

<!-- start: footer -->
<footer>
	<div class="pre-footer">
		<div class="container">
			<div class="row-fluid">
				<div class="section-wrapper clearfix">

					<div class="span4">
						<div class="separator">
							<div class="left">
								<div class="lines">
									<div>
									<h2 class="lines-title">Work with us</h2>
									</div>
								</div>
							</div>
						</div>
						<p>
							We can customise any project to suit your needs and budget. It is worth talking to us before you make any decision.
							 <a href="<?=base_url()?>welcome/contentpage/about-us""><i class="icon-share"></i></a></p>

						<p class="footer-subscribe"><strong>Subscribe for monthly updates:</strong></p>

					
						
						<form id="newsletter" action="http://redstudio.us1.list-manage.com/subscribe/post?u=07f8348178863dab1d4d377a3&amp;id=ccd4d4f407" 
                                   method="post" id="mc-embedded-subscribe-form " name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <input type="text" value="" name="EMAIL"  class="span9 subs" id="mce-EMAIL" placeholder="Enter email address" required>
                                       <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-send">Send</button>
                                    </form>
					</div>
					
					
					<div class="span5">
						<div class="separator">
							<div class="left">
								<div class="lines">
									<div>
									<h2 class="lines-title">Latest tweet</h2>
									</div>
								</div>
							</div>
						</div>	
						<div class="tweet"></div> 
					</div>


					<div class="span3">
						<div class="separator">
							<div class="left">
								<div class="lines">
									<div>
									<h2 class="lines-title">Contact</h2>
									</div>
								</div>
							</div>
						</div>	
						<ul class="contact-footer">
							<li>
								<i class="icon-map-marker"></i>  65 Cricketers Lane, Herongate, Brentwood, Essex, CM13 3QB
							</li>
							<li>
								<i class="icon-phone"></i> 07734 944112
							</li>
							<li>
								<i class="icon-envelope-alt"></i><a href="mailto:web@redstudio.co.uk">web@redstudio.co.uk</a>
							</li>
							<li>
								<i class="icon-globe"></i><a href="http://www.redstudio.co.uk">www.redstudio.co.uk</a> 
							</li>							
						</ul>

					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="post-footer">
		<div class="container">
			<div class="row">
					<div class="span6">
						<div class="copyright">Copyright &copy; 2013 Redstudio Design Limited. All rights reserved. Redstudio Design Limited is registered in England & Wales. Company number: 6055186 

</div>
					</div>
					<div class="span6">
						<ul class="footer-links">
							<li class="active">
							<a href="<?=base_url()?>">Home</a>
						</li>
						
						<li class=""><a href="<?=base_url()?>welcome/contentpage/about-us">About Us</a></li>
						
						
						<li class=""><a href="<?=base_url()?>welcome/contentpage/contact">Contact</a></li>
						
						</ul>
					</div>
			</div>
		</div>
	</div>
</footer><!-- end: footer -->



<!-- start: script -->
<script src="<?=$theme_location?>js/jquery.js"></script>
<script src="<?=$theme_location?>js/bootstrap.min.js"></script>
<script src="<?=$theme_location?>js/modernizr.js"></script>
<script src="<?=$theme_location?>js/ba-cond.js"></script>
<script src="<?=$theme_location?>js/slitslider.js"></script>
<script src="<?=$theme_location?>js/isotope.js"></script>
<script src="<?=$theme_location?>js/plax.js"></script>
<script src="<?=$theme_location?>js/tweet.js"></script>
<script src="<?=$theme_location?>js/custom.js"></script>
<!-- end: script -->

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->	

</body>

</html>