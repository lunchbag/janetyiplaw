<HTML><BODY>

<?php

if (($REQUEST_METHOD=='POST')) {

$connection=mysql_connect ("localhost", "futurare_ila", "sedated") or die ('I cannot connect to the database because: ' . mysql_error());

$db=mysql_select_db("futurare_mydb",$connection) or die ("Couldn't select database.");

$gbname=$_REQUEST['name'];
$gbemail=$_REQUEST['email'];
$gbemailhide=$_REQUEST['emailhide'];
$gburl=$_REQUEST['url'];
$gbmsg=$_REQUEST['msg'];
$gbdate= date("F j, Y ; g:i a");


$sql="INSERT INTO ila_gb VALUES ('$gbname', '$gbemail', '$gbemailhide', '$gburl', '$gbmsg', '$gbdate')";
$sql_result=mysql_query($sql) or die ("Couldn't execute query because " . mysql_error());

echo "<P>Thank you very much for your input.  Click <A HREF=gb_display.php>here</A> to view your entry.<P></BODY></HTML>";

} else {
echo "Denied.";
}

?>



