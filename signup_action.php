<?php require_once("common.php"); ?>
<html>
<head>
    <title>jQuery Mobile Tutorial </title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
</head>
<body>
<!-- Start of first page -->
<div data-role="page" id="first">
    <div data-role="header">
        <h1>Sign Up</h1>
    </div><!-- /header -->

	<div data-role="content">

	<?php // AHH MYSQL INJECTION ?>
	<?php //mysql_query("Insert into signup_staples values('','$_POST[name]','$_POST[school]','$_POST[email]','$_POST[phone]',$_POST[zip])"); ?>

	You have been signed up!
	</div><!-- /content -->

    <?php require_once('modules/footer.php') ?>
</div><!-- /page -->
</body>
</html>
