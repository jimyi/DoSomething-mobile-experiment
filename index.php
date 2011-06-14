<!DOCTYPE html>
<html>
<head>
    <title>DoSomething.org Staples for Students</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>
<body>
    <div data-role="page" class="page_content" data-theme="c">
        <div data-role="header" data-theme="d" data-backbtn="false">
			<h1><span class="ds">DoSomething.org</span></h1>
		</div><!-- /header -->

		<div data-role="content">
			<div class="section">
				<div class="image_wrapper">
					<img src="http://www.dosomething.org/sites/all/micro/sfs/logo-sfs.png" />
					<a href="sign_up.php" data-role="button" data-icon="plus">SIGN UP!</a>
				</div>
			</div>
			<div class="iframe_wrapper">
				<iframe width="4" height="3" src="http://www.youtube.com/embed/pbdl98VmbSo" frameborder="0" id="youtube_embed" allowfullscreen></iframe>
				<script>
					$(".page_content").live("pageshow orientationchange", function (event) {
						var padding = 15 + 4; // Don't want video to be flush against the window edge.
						var width = Math.min(512, $(window).width() - (2*padding));
						var height = Math.ceil(width * .75);
						$("#youtube_embed, .iframe_wrapper").width(width);
						$("#youtube_embed, .iframe_wrapper").height(height);
					});
				</script>
			</div>
			<div class="section" id="foursquare">
				<a href="https://foursquare.com/search?q=staples" target="_blank"><img src="images/foursquare_check_in.png" /></a>
			</div>
		</div><!-- /content -->
		<?php require_once('modules/footer.php') ?>
	</div><!-- /page -->
</body>
</html>
