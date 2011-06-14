<!DOCTYPE html>
<html>
<head>
    <title>Contest</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>
<body>
	<div data-role="page" class="page_content">
		<div data-role="header">
			<h1>Contest Page</h1>
			<?php require_once('modules/header_home_button.php'); ?>
		</div><!-- /header -->

		<div data-role="content">
		<h2>Tell 5 Friends</h2>
		<p>We need your help building our Staples for Students team! Please list the email of 5
		friends who participated in this campaign with you. You'll be automatically entered to win one of our awesome campaign giveaways, like signed swag or t-shirts! </p>

		<form action="contest.php" method="post">
			<div data-role="fieldcontain" >
				<label for="name">Your Email Address</label>
				<input type="text" name="signup_email" id="signup_email" required="required" value="" placeholder="Enter your email" />
			</div>
            <div data-role="fieldcontain">
				<label for="email1">Your friends email</label>
				<input type="text" name="refer_email1" id="refer_email1" required="required" value="" placeholder="Your friends email" />
			</div>
			<div data-role="fieldcontain">
				<label for="email2">Your friends email</label>
				<input type="text" name="refer_email2" id="refer_email2" value="" placeholder="Your friends email" />
			</div>
			<div data-role="fieldcontain">
				<label for="email3">Your friends email</label>
				<input type="text" name="refer_email3" id="refer_email3" value="" placeholder="Your friends email" />
			</div>
			<div data-role="fieldcontain">
				<label for="email4">Your friends email</label>
				<input type="text" name="refer_email4" id="refer_email4" value="" placeholder="Your friends email" />
			</div>
			<div data-role="fieldcontain">
				<label for="email5">Your friends email</label>
				<input type="text" name="refer_email5" id="refer_email5" value="" placeholder="Your friends email" />
			</div>

		</div><!-- /content -->

		<?php require_once('modules/footer.php') ?>
	</div><!-- /page -->
</body>
</html>
