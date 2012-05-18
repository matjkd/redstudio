<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>

<?= $this->load->view('template/' . $this->config_theme . '/header') ?>

</head>

<body>
	<input type="hidden" id="baseurl" value="<?= base_url() ?>" />
	<div id="header">
		<div class="container">
			<div class="four columns" id="logo">
			<img src="<?=base_url()?>css/redstudio/images/logo.png"/>
			</div>
			<div class="four columns">
			
				&nbsp;
			</div>

			<div class="eight columns">
				<h2>We make pretentious and
meaningless statements
on our website in a
nice big font</h2>
			</div>
		</div>
	</div>
	<div class="container">



		<div id="container">

			<?php if (isset($slideshow_active) && $slideshow_active != NULL) { ?>
			<?= $this->load->view('slideshow/slideshow') ?>
			<?php } ?>

			<div class="sixteen columns">

				<?= $this->load->view('global/alert') ?>
				<?= $this->load->view($main_content) ?>
			</div>




		</div>



		<?= $this->load->view('global/' . $this->config_theme . '/footer_menu') ?>


	</div>

	<div class="bottom_menu">
		<div class="footermenu">
			<?= $this->load->view('global/' . $this->config_theme . '/bottomnav') ?>
		</div>

	</div>
	<!--! end of #container -->
	<?= $this->load->view('global/footer') ?>
</body>
</html>
