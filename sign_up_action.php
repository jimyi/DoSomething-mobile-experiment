<?php require_once("common.php"); ?>
<?php

// Go through our form inputs and set defaults
$input = array();
$input['name'] = isset($_POST['name']) ? $_POST['name'] : '';
$input['school'] = isset($_POST['school']) ? $_POST['school'] : '';
$input['email'] = isset($_POST['email']) ? $_POST['email'] : '';
$input['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
$input['zip'] = isset($_POST['zip']) ? $_POST['zip'] : '';

// TODO: validate the input here
if (empty($input['email'])) {
    // do something
}

// Add the user's entry to the database.

// Use PDO's prepared statements for security.
$queryString = 'INSERT INTO staples_signups (name, school, email, phone, zip) ';
$queryString .= 'VALUES (:name, :school, :email, :phone, :zip);';
$query = $db->prepare($queryString);

// Bind all of our selected input parameters.
foreach ($input as $column => $value) {
    $query->bindValue(':' . $column, $value);
}

// Execute our prepared statement.  We don't particularly care about the result.
try {
    $query->execute();
    $success = TRUE;

    // Save this user's email address in a cookie so we know who it is when they report back.
    // Cookie expires in 30 days
    setcookie("email", base64_encode($input['email']), time() + 60 * 60 * 24 * 30);
} catch (PDOException $e) {
    $success = FALSE;
}

?>
<html>
<head>
    <title>Sign Up</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>
<body>
    <div data-role="page" class="page_content" data-theme="c">
        <div data-role="header" data-theme="d" data-backbtn="false">
			<h1>Sign Up</h1>
			<?php require_once('modules/header_home_button.php'); ?>
		</div><!-- /header -->

		<div data-role="content">
            <p>
                <?php if ($success): ?>
                    You have been signed up!
                <?php else: ?>
                    Error signing up!  Please try again.
                <?php endif; ?>
            </p>
		</div><!-- /content -->

		<?php require_once('modules/footer.php') ?>

	</div><!-- /page -->

</body>
</html>
