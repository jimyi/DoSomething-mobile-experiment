<?php require_once('common.php'); ?>
<?php

// Go through our form inputs and set defaults
$input = array();
$input['email'] = isset($_COOKIE['email']) ? base64_decode($_COOKIE['email']) : '';
$input['supplies_count'] = isset($_POST['number_supplies']) ? $_POST['number_supplies'] : '';
$input['people_count'] = isset($_POST['number_people']) ? $_POST['number_people'] : '';
$input['drive_details'] = isset($_POST['drive_details']) ? $_POST['drive_details'] : '';

// TODO: validate the input here
if (empty($input['email'])) {
    // do something
}

// Add the user's entry to the database.

// Use PDO's prepared statements for security.
$queryString = 'INSERT INTO staples_reports (email, supplies_count, people_count, drive_details) ';
$queryString .= 'VALUES (:email, :supplies_count, :people_count, :drive_details);';
$query = $db->prepare($queryString);

// Bind all of our selected input parameters.
foreach ($input as $column => $value) {
    $query->bindValue(':' . $column, $value);
}

// Execute our prepared statement.  We don't particularly care about the result.
try {
    $query->execute();
    $success = TRUE;
} catch (PDOException $e) {
    $success = FALSE;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Report Back</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>

<body>
    <div data-role="page" class="page_content">
        <div data-role="header" data-backbtn="false">
            <h1>Report Back</h1>
            <?php require_once('modules/header_home_button.php'); ?>
        </div><!-- /header -->

        <div data-role="content">
            <label for="name">Thanks for reporting your supplies. <a href="report_back.php">Report more.</a></label>
            <?php // TODO: maybe do something else if $success == FALSE? ?>
        </div><!-- /content -->

        <?php require_once('modules/footer.php'); ?>
    </div><!-- /page -->

</body>
</html>
