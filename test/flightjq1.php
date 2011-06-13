<!DOCTYPE html>
<html>
    <head>
    <title>jQuery Mobile Tutorial </title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
    <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
<script type="text/javascript">

        $(document).ready(function() {

             $('#return').hide();

        });

      </script>         
</head>

<body> 
 <form action="results.php" method="post">

        <div data-role="fieldcontain">

          <label for="name">From</label>

          <input type="text" name="name" id="name" value=""  />

        </div>

        <div data-role="fieldcontain">

          <label for="name">To</label>

          <input type="text" name="name" id="name" value=""  />

        </div>        

	<div data-role="fieldcontain">

        <label for="name">Start Date</label>

        <input type="text" name="name" id="name" value=""  />

      </div>

      <div data-role="fieldcontain">

        <fieldset data-role="controlgroup" data-type="horizontal">

          <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />

          <label for="radio-choice-1">One Way</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />

          <label for="radio-choice-2">Return</label>

        </fieldset>

      </div>

      <div data-role="fieldcontain" id="return">

          <label for="name">Return Date</label>

          <input type="text" name="name" id="name" value=""  />

      </div>     
 <div data-role="fieldcontain">

        <label for="slider">Travellers</label>

        <input type="range" name="slider" id="slider" value="0" min="0" max="10"  />

      </div>            

<div data-role="fieldcontain">

        <label for="select-choice-1" class="select">Flight Class</label>

        <select name="select-choice-1" id="select-choice-1"  data-theme="d">

          <option value="economy">Economy</option>

          <option value="business">Business</option>

          <option value="first">First</option>

        </select>

      </div>   

<input type="submit" value="Search your Flights"/>
      </form>

<script type="text/javascript">

        $('#radio-choice-1').change(function() {           

           $('#return').hide();

        });	

        $('#radio-choice-2').change(function() {           

           $('#return').show();

        });

      </script>      </body>
  
</html>