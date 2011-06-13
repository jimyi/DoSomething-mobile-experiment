<!DOCTYPE html>
<html>
<head>
    <title>jQuery Mobile Tutorial </title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
    <!--
    <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
    -->
</head>
<body>

    <!-- Start of first page -->
    <div data-role="page" id="first">

        <div data-role="header" data-nobackbtn="true">
            <h1>Sign Up Page</h1>
            <a href="index.html" data-role="button" data-icon="arrow-l">Home</a>
        </div><!-- /header -->

        <div data-role="content">
            <form action="signup_action.php" method="post">
                <div data-role="fieldcontain" >
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value=""  />
                </div>
                <div data-role="fieldcontain">
                    <label for="name">School</label>
                    <input type="text" name="school" id="school"     />
                </div>
                <div data-role="fieldcontain">
                    <label for="name">Email</label>
                    <input type="text" name="email" id="email" value="" required="required" placeholder="This field requires an e-mail address."  />
                </div>
                <div data-role="fieldcontain">
                    <label for="name">Phone</label>
                    <input type="text" name="phone" id="phone" value=""  />
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
