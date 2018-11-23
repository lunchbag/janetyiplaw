<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="ilastyle.css" rel="stylesheet" type="text/css">
</head>

<body>

<h2>Thank you!</H2>
<p>

<?php
$Message ="Name: $YourName \n Email: $YourEmail \n Comments: $YourComments \n";

mail("xcomments@futuraretro.com", "Comments Form Submission", $Message);

print ("Your message was probably sent!");

?>




</p>
</body>
</html>
