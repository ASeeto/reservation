<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Snell Library | InfoCommons</title>

<!-- PAGE LAYOUT -->
<link rel="stylesheet" href="css/reservation51.css">

<!-- FORM VALIDATION -->
<script src="/reservationproject/js/gen_validatorv4.js" type="text/javascript"></script>

<!-- CALENDAR FORM INPUT -->
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
<script>
$(document).ready(function() {
var dateToday = new Date();
	$("#datepicker").datepicker({
		numberOfMonths: 1,
        showButtonPanel: true,
		minDate: dateToday
		});
  	});
</script>

</head>

<body>

<div id="header">

</div>
<div id="fix">
<?php include 'menu.php'; ?>
</div>
<div id="content">
<br /><br /><br />

<div id="fix">
<center>
<b>Please check current reservations here:  <a href="reservationrecords.php">Reservation Records</a></b>
<br /><br />
<form id="reserveform" method="post" action="submit_reserve.php">

    <table cellpadding=0>
    <tr><td valign="top">
    	<b>First Name: </b>
    </td>
    <td>
    	<input type="text" name="firstname" width="150" /><br /><br />
    </td></tr>
    <tr><td valign="top">
    	<b>Last Name: </b>
    </td>
    <td>
    	<input type="text" name="lastname" width="150" /><br /><br />
    </td></tr>
    <tr><td valign="top">
    	<b>Equipment: </b>
    </td>
    <td>
        <select name="equip">
            <option value="None">None</option>
            <option value="PC Laptop">PC Laptop</option>
            <option value="Projector">Projector</option>
            <option value="VGA Adapter">VGA Adapter</option></select><br /><br />
    </td></tr>
    <tr><td valign="top">
    	<b>Room: </b>
    </td>
    <td>
        <select name="room">
            <option value="None">None</option>
            <option value="DMC1">Digital Media Common 1</option>
            <option value="DMC2">Digital Media Common 2</option>
            <option value="DMC4">Digital Media Common 4</option>
            <option value="DMC4">Digital Media Common 5</option></select><br /><br />
    </td></tr>
    <tr><td valign="top">
   	 	<b>Date: </b>
    </td>
    <td valign="top">
        <input id="datepicker" readonly="readonly" name="startdate" /></td><td valign="top">
        
    </td></tr>
    <tr><td valign="top">
    	<b>From: </b>
    </td>
    <td valign="top">
        <input type="text" name="starthour" value="HH" size="5" />
        <input type="text" readonly="readonly" name="startmin" value="00" size="5" />
        <input type="text" readonly="readonly" name="startsec" value="00" size="5" />
        </td></tr>
    <tr><td valign="top">
    	<b>To: </b>
    </td>
    <td valign="top">
        <input type="text" name="endhour" value="HH" size="5" />
        <input type="text" readonly="readonly" name="endmin" value="00" size="5" />
        <input type="text" readonly="readonly" name="endsec" value="00" size="5" />
    </td></tr>
    </table>

<input type="submit" />
</form>

<script type="text/javascript">

<!-- VALIDATION -->
var frmvalidator = new Validator("reserveform");

frmvalidator.addValidation("firstname", "req", "You must enter a first name.");
frmvalidator.addValidation("firstname", "minlen=2", "Your first name must be at least 2 characters long.");
frmvalidator.addValidation("firstname", "alpha", "Your first name can only include letters.");
frmvalidator.addValidation("lastname", "req", "You must enter a last name.");
frmvalidator.addValidation("lastname", "minlen=2", "Your last name must be at least 2 characters long.");
frmvalidator.addValidation("lastname", "alpha", "Your last name can only include letters.");
frmvalidator.addValidation("startdate", "req", "Please select a start date.");

// Ensure the start hour is entered and between 1 and 24.
frmvalidator.addValidation("starthour", "req", "Please enter a valid start hour.");
frmvalidator.addValidation("starthour", "num", "Please enter a valid start hour.");
frmvalidator.addValidation("starthour", "maxlen=2", "Please enter a valid start hour.");
frmvalidator.addValidation("starthour", "minlen=2", "Please enter a valid start hour.");
frmvalidator.addValidation("starthour", "lt=25", "Please enter a valid start hour.");
frmvalidator.addValidation("starthour", "gt=0", "Please enter a valid start hour.");

// Ensure the end hour is entered and between 1 and 24.
frmvalidator.addValidation("endhour", "req", "Please enter a valid end hour.");
frmvalidator.addValidation("endhour", "num", "Please enter a valid end hour.");
frmvalidator.addValidation("endhour", "maxlen=2", "Please enter a valid end hour.");
frmvalidator.addValidation("endhour", "minlen=2", "Please enter a valid end hour.");
frmvalidator.addValidation("endhour", "lt=25", "Please enter a valid end hour.");
frmvalidator.addValidation("endhour", "gt=0", "Please enter a valid end hour.");

// End hour should be after start hour.
var starthour = <?php $_POST['starthour']; ?>;
frmvalidator.addValidation("endhour", "gt="starthour, "Please enter a valid end hour.");

</script>

<br /><br />
This is a course project for CS 4550: Web Development taught by Harriet Fell.
<br /><br />
Actual Reservations for Snell Library can be made here: 
<br /><a href="http://nucat.lib.neu.edu/record=b2293113~S19">Snell Library: Study Rooms</a>, <a href="http://nucat.lib.neu.edu/search~S19/X?SEARCH=t:(digital%20media%20commons%20)&searchscope=19&SORT=D">Snell Library: DCM</a>, 
<a href="https://northeastern.service-now.com/">InfoCommon Equipment Rentals</a>
</div>


<br /><br /><br />
</div>
<div id="footer">
<?php include 'footer.php'; ?>
</div>
<br /><br />

</body>
</html>