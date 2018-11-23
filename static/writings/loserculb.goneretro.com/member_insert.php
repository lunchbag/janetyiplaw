<HTML><BODY>

<?php

if (($REQUEST_METHOD=='POST')) {

$connection=mysql_connect ("localhost", "futurare_me", "mi") or die ('I cannot connect to the database because: ' . mysql_error());

$db=mysql_select_db("futurare_culb",$connection) or die ("Couldn't select database.");
$alias=$_REQUEST['alias'];
$name=$_REQUEST['name'];
$title=$_REQUEST['title'];
$description=$_REQUEST['description'];
$membersince= date("F j, Y");

$sql="INSERT INTO culbmembers VALUES ('$alias', '$name', '$title', '$membersince', '$description')";
$sql_result=mysql_query($sql) or die ("Couldn't execute query because " . mysql_error());

echo "<P>Member added, click <A HREF=member_list.php>here</A> to view the updated list.<P>";

}
else {
echo "Denied.";
}
?>

</BODY></HTML>







