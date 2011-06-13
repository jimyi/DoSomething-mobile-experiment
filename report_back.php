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
    <script language="javascript">
        function verifyFields(form)
        {        
            form=reportbackForm;
            if(form.intsupplies.value=='')
            {
                alert("Please enter the number of supplies");
                form.intsupplies.select();
                return false;
            }
            else if(form.intpeople.value=='')
            {    
                alert("Enter the number of people involved");
                form.intpeople.select();
                return false;
            }
            else
            {
                form.method="post";
                form.target="_self";
                form.action="reportback.php";
                form.submit();
            }
        }
    </script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
</head>

<body>

    <!-- Start of first page -->
    <div data-role="page" id="first">

        <div data-role="header">
            <h1>Sign Up Page</h1>
        </div><!-- /header -->

        <div data-role="content">
    		<form id="reportbackForm" name ="reportbackForm" action="#" onsubmit="return(verifyFields())" >
                <?php if (!$_POST): ?>
                	<div data-role="fieldcontain">
                        <label for="name">How many supplies did you drop of? *</label>
                        <input type="text" name="intsupplies" id="intsupplies" value="" />
                	</div>
             		<div data-role="fieldcontain">
                 		<label for="name">How many people were involved? *</label>
                 		<input type="number" name="intpeople" id="intpeople" value="" />
                	</div>        
             		<div data-role="fieldcontain">
        				<label for="name">How did you make your school supply drive awesome?</label>
        				<input type="text" name="drivedetails" id="drivedetails" value=""  />
        	        </div>        
             		<div data-role="fieldcontain">
        				<label for="name">Upload Photos </label>
        	            <input type="file" name="photos" id="photos" value=""  />
                    </div>             
                    <input type="submit" value="Submit Info"/>
                <?php else: ?>
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
                        <?php //mysql_query("Insert into reportback_staples values('','$_POST[intsupplies]','$_POST[intpeople]','$_POST[drivedetails]')"); ?>                        
                    <?php endif; ?>
                    <div data-role="fieldcontain">
                        <label for="name">Thanks for reporting your supplies. <a href='reportback.php'>Report more</a></label>    
                    </div>
                <?php endif; ?>    
            </form>
        </div><!-- /content -->

        <?php require_once('modules/footer.php'); ?>

    </div><!-- /page -->

</body>
</html>
