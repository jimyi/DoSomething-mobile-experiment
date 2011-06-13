<!DOCTYPE html>
<html>
    <head>
    <title>jQuery Mobile Tutorial </title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
</head>
<body>

<div data-role="page">

    <div data-role="header">
        <h1><span class="ds">DoSomething.org</span> Staples for Students</h1>
    </div><!-- /header -->

    <div data-role="content">
        <p>Overview of the project</p>

		<div class="tile">
		    <div>
				<p>At vero eos et accusamus et iusto odio dignis ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>
				<button type="submit" data-theme="a">Signup</button>
			</div>
			<div class="image_wrapper">
				<img src="http://www.dosomething.org/sites/all/micro/sfs/logo-sfs.png" />
			</div>
		</div>

		<p>
			<h4>PSA Video</h4>
			<iframe width="560" height="349" src="http://www.youtube.com/embed/pbdl98VmbSo" frameborder="0" allowfullscreen></iframe>
		</p>
    </div><!-- /content -->

    <?php require_once('modules/footer.php') ?>
</div><!-- /page -->

</body>
</html>
