<!DOCTYPE html>
<html>
<head>
    <title>Contest</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>
<body>
    <div data-role="page" class="page_content" data-theme="c">
        <div data-role="header" data-theme="d">
			<h1>Contest</h1>
			<?php require_once('modules/header_home_button.php'); ?>
		</div><!-- /header -->

		<div data-role="content">
		<h2>Tell 5 Friends</h2>
		<p>We need your help building our Staples for Students team! Please list the email of 5
		friends who participated in this campaign with you. You'll be automatically entered to win one of our awesome campaign giveaways, like signed swag or t-shirts!</p>

		<form action="contest_action.php" method="post">
			<div data-role="fieldcontain" >
				<label for="signup_email">Your Email</label>
				<input type="text" name="signup_email" id="signup_email" required="required" value="" placeholder="Your Email Address" />
			</div>
            <div data-role="fieldcontain">
				<label for="refer_email1">Friend's Email</label>
				<input type="text" name="refer_email1" id="refer_email1" required="required" value="" placeholder="Friend's Email" />
			</div>
			<div data-role="fieldcontain">
				<label for="refer_email2">Friend's Email</label>
				<input type="text" name="refer_email2" id="refer_email2" value="" placeholder="Friend's Email" />
			</div>
			<div data-role="fieldcontain">
				<label for="refer_email3">Friend's Email</label>
				<input type="text" name="refer_email3" id="refer_email3" value="" placeholder="Friend's Email" />
			</div>
			<div data-role="fieldcontain">
				<label for="refer_email4">Friend's Email</label>
				<input type="text" name="refer_email4" id="refer_email4" value="" placeholder="Friend's Email" />
			</div>
			<div data-role="fieldcontain">
				<label for="refer_email5">Friend's Email</label>
				<input type="text" name="refer_email5" id="refer_email5" value="" placeholder="Friend's Email" />
			</div>

            <input type="submit" value="Enter Contest"/>
        </form>

		</div><!-- /content -->

		<?php require_once('modules/footer.php') ?>
	</div><!-- /page -->
</body>
</html>
