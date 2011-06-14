<?php require_once('common.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Report Back</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>

<body>

    <!-- Start of first page -->
    <div data-role="page" id="first">

        <div data-role="header">
            <h1>Sign Up Page</h1>
            <?php require_once('modules/header_home_button.php'); ?>
        </div><!-- /header -->

        <div data-role="content">
            <?php if ($_POST[intsupplies]=='' or $_POST[intpeople]==''): ?>
                <div data-role="fieldcontain">
                <p>Please enter the required information</p>
                <p>Click <a href='#reportback.php'>here</a> to go back</p>
                <?
                //    echo "Please enter the required information ";
                //    echo "Click <a href='reportback.php'>here</a> to go back";
                ?>
                </div>
            <?php else: ?>
                <?php // TODO: AHH SQL INJECTION!! ?>
                <?php mysql_query("Insert into reportback_staples values('','$_POST[intsupplies]','$_POST[intpeople]','$_POST[drivedetails]')"); ?>                        
            <?php endif; ?>
            <div data-role="fieldcontain">
                <label for="name">Thanks for reporting your supplies. <a href='reportback.php'>Report more</a></label>
            </div>
        </div><!-- /content -->

        <?php require_once('modules/footer.php'); ?>
    </div><!-- /page -->

</body>
</html>
