<!DOCTYPE html>
<html>
	<?=$this -> load -> view('template/parts/header') ?>

	<body>
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navbar navbar-inverse">
					<div class="navbar-inner">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">Menu</a>
						<a class="brand" href="<?=base_url() ?>">redstudio</a>
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li>
									<a href="<?=base_url() ?>quote/smiths/overview">Overview</a>
								</li>
								<li>
									<a href="<?=base_url() ?>quote/smiths/design">Design</a>
								</li>
								<li>
									<a href="<?=base_url() ?>quote/smiths/maintenance">Maintenance</a>
								</li>
								<li>
									<a href="<?=base_url() ?>quote/smiths/costs">Cost</a>
								</li>
								<li>
									<a href="<?=base_url() ?>quote/smiths/terms">Terms</a>
								</li>

							</ul>
						</div>
						<!--/.nav-collapse -->
					</div>
					<!-- /.navbar-inner -->
				</div>
				<!-- /.navbar -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.navbar-wrapper -->

		<div class="teaser">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h1>Quotation</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="middle-bar">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h2>Smith's Brasserie web development.</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<?=$this -> load -> view($main) ?>

		</div>
		<!-- /.container -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="span3">

					</div>
					<hr class="visible-phone">
					<div class="span3">

					</div>
					<hr class="visible-phone">
					<div class="span3">
						<div class="subscribee">
							<h4>Newsletter</h4>
							Subscribe to our e-mail newsletter to receive updates.
							<br/>
							<br/>
							<form action="http://redstudio.us1.list-manage.com/subscribe/post?u=07f8348178863dab1d4d377a3&amp;id=ccd4d4f407"
							method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
								<button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-warning btnSubscribe">
									Subscribe
								</button>
							</form>
						</div>
					</div>
					<hr class="visible-phone">
					<div class="span3">
						<h4>Contact Us</h4>
						<address>
							Redstudio Design Limited
							<br/>
							<i class="icon-tint"></i> 65 Cricketers Lane, Herongate, Brentwood, Essex, CM133QB
							<br>
							<i class="icon-phone"></i> 07734 944112
							<br>
							<i class="icon-envelope-alt"></i><a href="mailto:web@redstudio.co.uk"> web@redstudio.co.uk</a>
						</address>
					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="span12">
							<p class="pull-right">
								<a href="#">Back to top</a>
							</p>
							<p>
								&copy; Developed by &middot; <a href="http://www.redstudio.co.uk">redstudio design limited</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<?=$this -> load -> view('template/parts/footer') ?>
	</body>
</html>
