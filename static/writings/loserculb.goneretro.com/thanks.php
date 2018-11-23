<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="pagestyle.css" rel="stylesheet" type="text/css">
</head>

<body>

<strong>Thank you!</strong>
<p>

<B><FONT SIZE="1"><A HREF="contact.html">Back</A></FONT></B>

<?php
$Message ="Name: $YourName \n Email: $YourEmail \n Comments: $YourComments \n";

mail("xcomments@futuraretro.com", "LoserCulb Email", $Message);

print ("Your message was probably sent!");

?>




</p>
</body>
</html>
