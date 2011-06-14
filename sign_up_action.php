<?php require_once("common.php"); ?>
<html>
<head>
    <title>Sign Up</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>
<body>
	<div data-role="page" class="page_content">
		<div data-role="header">
			<h1>Sign Up Page</h1>
			<?php require_once('modules/header_home_button.php'); ?>
		</div><!-- /header -->

		<div data-role="content">
			<?php // TODO: AHH MYSQL INJECTION ?>
			<?php //mysql_query("Insert into signup_staples values('','$_POST[name]','$_POST[school]','$_POST[email]','$_POST[phone]',$_POST[zip])"); ?>
			You have been signed up!
		</div><!-- /content -->

		<?php require_once('modules/footer.php') ?>

	</div><!-- /page -->

</body>
</html>
