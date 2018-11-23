<HTML><BODY>

<?php

if (($REQUEST_METHOD=='POST')) {

$connection=mysql_connect ("localhost", "futurare_me", "mi") or die ('I cannot connect to the database because: ' . mysql_error());

$db=mysql_select_db("futurare_culb",$connection) or die ("Couldn't select database.");

$xauthor=$_REQUEST['xauthor'];

$xdate= date("F j, Y");
$xtime= date("g:i a");
$xtitle=$_REQUEST['xtitle'];
$xentry=$_REQUEST['xentry'];


$sql="INSERT INTO lunacy VALUES ('$xauthor', '$xdate', '$xtime', '$xtitle', '$xentry')";
$sql_result=mysql_query($sql) or die ("Couldn't execute query because " . mysql_error());

echo"<P>Thanks, click <A HREF=lunacy_display.php>here</A> to view the updated log.<P></BODY></HTML>";

}
else {
echo "Denied.";
}

?>

