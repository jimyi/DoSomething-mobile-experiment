<?php require_once('common.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Report Back</title>
    <!--  TODO: host this ourself? -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
    <!--
    <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
    <script>
        $(document).ready(function(){
            $("#reportbackForm").validate();
        });
    </script>
    -->
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
</head>

<body>
    <div data-role="page" class="page_content">
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
