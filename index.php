<!DOCTYPE html>
<html>
<head>
    <title>DoSomething.org Staples for Students</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>
<body>

	<div data-role="page" class="page_content">
		<div data-role="header" data-nobackbtn="true">
			<h1><span class="ds">DoSomething.org</span> Staples for Students</h1>
		</div><!-- /header -->

		<div data-role="content">
			<div class="section">
				<div class="half">
					<p>At vero eos et accusamus et iusto odio dignis ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>
					<a href="sign_up.php" data-role="button" data-icon="plus" data-theme="a">SIGN UP!</a>
				</div>

				<div class="iframe_wrapper">
					<iframe width="4" height="3" src="http://www.youtube.com/embed/pbdl98VmbSo" frameborder="0" id="youtube_embed" allowfullscreen></iframe>
					<script>
						$(".page_content").live("pageshow", function (event) {
							var width = Math.min(512, $(window).width());
							var height = Math.ceil(width * .75);
							$("#youtube_embed, .iframe_wrapper").width(width);
							$("#youtube_embed, .iframe_wrapper").height(height);
						});
					</script>
				</div>
			</div>
		</div><!-- /content -->
		<?php require_once('modules/footer.php') ?>
	</div><!-- /page -->
</body>
</html>
