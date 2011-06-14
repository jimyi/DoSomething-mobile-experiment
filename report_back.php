<?php require_once('common.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Report Back</title>
    <?php require_once('modules/scripts_styles.php'); ?>
</head>

<body>
    <div data-role="page" class="page_content">

        <div data-role="header">
            <h1>Report Back</h1>
			<?php require_once('modules/header_home_button.php'); ?>
        </div><!-- /header -->

        <div data-role="content">
    		<form id="reportbackForm" action="report_back_action.php">
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
            </form>
        </div><!-- /content -->

        <?php require_once('modules/footer.php'); ?>
    </div><!-- /page -->

</body>
</html>
