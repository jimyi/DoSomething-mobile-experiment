    <!--  TODO: host this ourself? -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
	<link rel="stylesheet" href="styles/common.css" />
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
    <script src="scripts/jquery.h5validate.js"></script>
    <script language="javascript">
        $(document).ready(function (event) {
            event.preventDefault(); // Required because validation plugins do not play nicely with jQuery Mobile
            $('form').h5Validate();
        });
    </script>
