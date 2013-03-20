<!-- start: title -->
<?php $theme_location = base_url()."css/nate/"; ?>
<div class="page-title">
	<div class="section-wrapper">
		<div class="container">
			<h2>Call Back Request</h2>
		</div>
	</div>
</div><!-- end: title -->

<!-- start: contact -->
<div class="section-contact">
	<div class="section-wrapper">

		<div class="container">
			<div class="row">

				<div class="span12">
						
					<p>Send us a message and we will get back to you as soon as possible.</p>
					
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
