<?php require_once('common.php'); ?>
<?php

// Go through our form inputs and set defaults
$input = array();
$input['signup_email'] = isset($_POST['signup_email']) ? $_POST['signup_email'] : '';
$input['refer_email1'] = isset($_POST['refer_email1']) ? $_POST['refer_email1'] : '';
$input['refer_email2'] = isset($_POST['refer_email2']) ? $_POST['refer_email2'] : '';
$input['refer_email3'] = isset($_POST['refer_email3']) ? $_POST['refer_email3'] : '';
$input['refer_email4'] = isset($_POST['refer_email4']) ? $_POST['refer_email4'] : '';
$input['refer_email5'] = isset($_POST['refer_email5']) ? $_POST['refer_email5'] : '';

// TODO: validate the input here
if (empty($input['signup_email'])) {
    // do something
}

// Add the user's entry to the database.

// Use PDO's prepared statements for security.
$queryString = 'INSERT INTO staples_contest_entries (signup_email, refer_email1, refer_email2, refer_email3, refer_email4, refer_email5) ';
$queryString .= 'VALUES (:signup_email, :refer_email1, :refer_email2, :refer_email3, :refer_email4, :refer_email5);';
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
    <title>Contest</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>

<body>
    <div data-role="page" class="page_content" data-theme="c">
        <div data-role="header" data-backbtn="false" data-theme="d">
            <h1>Contest</h1>
            <?php require_once('modules/header_home_button.php'); ?>
        </div><!-- /header -->

        <div data-role="content">
            <p>Your entry to the contest has been submitted.</p>
            <?php // TODO: maybe do something else if $success == FALSE? ?>
        </div><!-- /content -->

        <?php require_once('modules/footer.php'); ?>
    </div><!-- /page -->

</body>
</html>
