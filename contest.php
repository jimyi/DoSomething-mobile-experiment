<!DOCTYPE html>
<html>
<head>
    <title>Contest</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
	<link rel="stylesheet" href="styles/common.css" />
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
</head>
<body>
	<div data-role="page">
		<div data-role="header">
			<h1>The title</h1>
			<?php require_once('modules/header_home_button.php'); ?>
		</div><!-- /header -->

		<div data-role="content">
		<h2>Tell 5 Friends</h2>
		<p>We need your help building our Staples for Students team! Please list the email of 5 
		friends who participated in this campaign with you. You'll be automatically entered to win one of our awesome campaign giveaways, like signed swag or t-shirts! </p>
			
		<form action="contest.php" method="post">
			<div data-role="fieldcontain" >
				<label for="name">Your Email Address</label>
				<input type="text" name="name" id="name" />
			</div>
            <div data-role="fieldcontain">
				<label for="name">School</label>
				<input type="text" name="school" id="school" />
			</div>
			<div data-role="fieldcontain">
				<label for="name">Email</label>
				<input type="text" name="email" id="email" required="required" placeholder="This field requires an e-mail address." />
			</div>
			<div data-role="fieldcontain">
				<label for="name">Phone</label>
				<input type="text" name="phone" id="phone" value="" />
			</div>
			<div data-role="fieldcontain">
				<label for="name">Zip</label>
				<input type="text" name="zip" id="zip" value="" size="5" required="required" placeholder="This field is required." />
			</div>
	
		</div><!-- /content -->

		<?php require_once('modules/footer.php') ?>
	</div><!-- /page -->
</body>
</html>
