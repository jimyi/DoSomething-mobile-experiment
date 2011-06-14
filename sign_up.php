<!DOCTYPE html>
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
            <form action="sign_up_action.php" method="post">
                <div data-role="fieldcontain" >
                    <label for="name">Name</label>
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

                <input type="submit" value="Sign me up"/>
            </form>
        </div><!-- /content -->

        <?php require_once('modules/footer.php') ?>
    </div><!-- /page -->
</body>
</html>
