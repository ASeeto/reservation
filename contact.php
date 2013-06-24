<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Snell Library | InfoCommons</title>

<!-- CSS for Site Layout -->
<link rel="stylesheet" href="css/reservation51.css">

<!-- JavaScript for Form Validation -->
<script src="/reservationproject/js/gen_validatorv4.js" type="text/javascript"></script>

</head>

<body>

<!-- HEADER -->
<div id="header">
</div>

<!-- NAVIGATION BAR -->
<div id="fix">
<?php include 'menu.php'; ?>
</div>

<!-- MAIN CONTENT -->
<div id="content">
<br />
<div id="fix">
    <div id="wrap">
      <h1>Contact Us</h1>
      <form method="post" id="contactform" action="submit_contact.php">
        <center>
        <table>
          <tr>
            <td><label for="name">First Name:</label></td>
            <td><input type="text" id="firstname" name="firstname" /></td>
          </tr>
          <tr>
            <td><label for="name">Last Name:</label></td>
            <td><input type="text" id="lastname" name="lastname" /></td>
          </tr>
          <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="text" id="email" name="email" /></td>
          </tr>
          <tr>
            <td><label for="message">Message:</label></td>
            <td><textarea id="message" name="message" rows="5" cols="20"></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Send!" id="send" /></td>
          </tr>
        </table>
        </center>
      </form>

<script type="text/javascript">

<!-- VALIDATION -->
var frmvalidator = new Validator("contactform");

frmvalidator.addValidation("firstname", "req", "You must enter a first name.");
frmvalidator.addValidation("firstname", "minlen=2", "Your first name must be at least 2 characters long.");
frmvalidator.addValidation("firstname", "alpha", "Your first name can only include letters.");
frmvalidator.addValidation("lastname", "req", "You must enter a last name.");
frmvalidator.addValidation("lastname", "minlen=2", "Your last name must be at least 2 characters long.");
frmvalidator.addValidation("lastname", "alpha", "Your last name can only include letters.");
frmvalidator.addValidation("email", "req", "You must provide an email address.");
frmvalidator.addValidation("email", "email", "Please enter a valid email address.");
frmvalidator.addValidation("message", "req", "You must enter a message.");
frmvalidator.addValidation("message", "minlen=10", "Your message must be at least 10 characters long.");

</script>

      <div id="response"></div>
    </div>
  
</div>

<br /><br /><br />
</div>

<!-- FOOTER -->
<div id="footer">
<?php include 'footer.php'; ?>
</div>

<br /><br />

</body>
</html>