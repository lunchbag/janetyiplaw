<?php

$connection=mysql_connect ("localhost", "futurare_me", "mi") or die ('I cannot connect to the database because: ' . mysql_error());

$db=mysql_select_db("futurare_culb",$connection) or die ("Couldn't select database.");

$sql="SELECT alias, name, title, membersince, description FROM culbmembers;";
$sql_result=mysql_query($sql) or die ("Couldn't execute query.");

echo "<H3>Culb Member List</H3><P>";

while ($row = mysql_fetch_array($sql_result)){
$alias=$row["alias"];
$name=$row["name"];
$title=$row["title"];
$membersince=$row["membersince"];
$description=$row["description"];

echo "<P><B>Alias: </B>$alias";
echo "<BR><B>Name: </B>$name";
echo "<BR><B>Title: </B>$title";
echo "<BR><B>Member since: </B>$membersince";
echo "<BR><B>Description: </B><BR>$description";

}

echo "<P><HR><P>";
mysql_free_result($sql_result);
mysql_close ($connection);

?>

</BODY></HTML>





