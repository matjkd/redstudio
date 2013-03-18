<!-- start: title -->
<?php $theme_location = base_url()."css/nate/"; ?>
<div class="page-title">
	<div class="section-wrapper">
		<div class="container">
			<h2>Contact us</h2>
		</div>
	</div>
</div><!-- end: title -->

<!-- start: map -->


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script type="text/javascript"> 
  var nash = new google.maps.LatLng(39.535222, 2.571909);
  var parliament = new google.maps.LatLng(39.535222, 2.571909);
  var marker;
  var map;
 
  function initialize() {
    var mapOptions = {
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: nash
    };
 
    map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
          
    marker = new google.maps.Marker({
      map:map,
      draggable:true,
      animation: google.maps.Animation.DROP,
      position: parliament
    });
    google.maps.event.addListener(marker, 'click', toggleBounce);
  }
 
  function toggleBounce() {
 
    if (marker.getAnimation() != null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }
</script> 
<div class="section-map">
	<div id="map_canvas" style="width: 100%; height: 373px;">
<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=redstudio+design+limited&amp;aq=&amp;sll=52.8382,-2.327815&amp;sspn=9.070082,23.928223&amp;t=m&amp;ie=UTF8&amp;hq=redstudio+design+limited&amp;hnear=&amp;ll=51.599254,0.348816&amp;spn=0.03732,0.072956&amp;z=13&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=redstudio+design+limited&amp;aq=&amp;sll=52.8382,-2.327815&amp;sspn=9.070082,23.928223&amp;t=m&amp;ie=UTF8&amp;hq=redstudio+design+limited&amp;hnear=&amp;ll=51.599254,0.348816&amp;spn=0.03732,0.072956&amp;z=13" style="color:#0000FF;text-align:left">View Larger Map</a></small>					</div>

	<div class="container">
		<div class="row">
			<div class="span8">
				<div class="span3 map-info white-content">

					<div class="separator">
						<div class="">
							<div class="lines">
								<div>
								<h3 class="lines-title">Hello there.</h3>
								</div>
							</div>
						</div>
					</div>

					<p> </p>

					<div class="separator">
						<div class="">
							<div class="lines">
								<div>
								<h3 class="lines-title"></h3>
								</div>
							</div>
						</div>
					</div>

					<ul>
						<li>
							<i class="icon-map-marker"></i> 65 Cricketers Lane, Herongate, Brentwood, Essex, CM13 3QB
						</li>
						<li>
							<i class="icon-phone"></i> 07734 944112
						</li>
						<li>
							<i class="icon-envelope-alt"></i> <a style="color:#fff" href="mailto:web@redstudio.co.uk">web@redstudio.co.uk</a>
						</li>						
					</ul>



				</div>	
			</div>
		</div>	
	</div>	

 </div><!-- end: map -->


<!-- start: contact -->
<div class="section-contact">
	<div class="section-wrapper">

		<div class="container">
			<div class="row">

				<div class="span12">
					<div class="separator">
						<div class="">
							<div class="lines">
								<div>
								<h2 class="lines-title">Contact Us.</h2>
								</div>
							</div>
						</div>
					</div>		
					<p>If you have any enquires please get in contact. The best way to contact us is by email, or the contact form below</p>
					
				</div>	

				<div class="span6">
					<div class="separator">
						<div class="left">
							<div class="lines">
								<div>
								<h2 class="lines-title">Drop us a line</h2>
								</div>
							</div>
						</div>
					</div>		
					<?=form_open('email/send')?>
		              <input type="text" name="name" placeholder="Name" class="span5">
		              <br>
		              <input type="email" name="email" placeholder="Email" class="span5">
		              <br>
		              <input type="text" name="phone" placeholder="Phone number" class="span5">
		              <br>
		              <textarea placeholder="Message" name="message" class="span5" rows="8"></textarea>
		              <br>
		               <button type="submit" name="submit" value="submit" class="btn btn-color">Send</button>
		             
		         <?=form_close()?>
					
				</div>	


				<div class="span6">
					<div class="separator">
						<div class="left">
							<div class="lines">
								<div>
								<h2 class="lines-title">Studio</h2>
								</div>
							</div>
						</div>
					</div>		

					<div class="carousel slide " id="myCarousel">
					    
					    <!-- Carousel items -->
					    <div class="carousel-inner">
					    <div class="active item"><img src="<?=base_url()?>images/photos/office-1.jpg" alt=""></div>
					   
				    </div>
				     <!-- Carousel nav -->
						

				    </div>

				</div>	


			</div>
		</div>	

	</div>			
 </div><!-- end: contact -->
