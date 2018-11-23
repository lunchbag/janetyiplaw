<HTML><HEAD><TITLE>Entries</TITLE>
<style type="text/css">
<!--

A:link
{ text-decoration: none; color:orange }
A:visited
{ text-decoration: none; color:purple }
A:active
{ text-decoration: underline overline; color:#000000 }
A:hover
{ text-decoration: underline; color:#000000 }

body 
{ font-family: arial; 
color: #000000 ; 


scrollbar-face-color : #840039; 
scrollbar-highlight-color : #000000; 
scrollbar-3dlight-color : #ffffff; 
scrollbar-shadow-color : #000000; 
scrollbar-darkshadow-color : #ffffff; 
scrollbar-track-color : #840039; 
scrollbar-arrow-color : #ff9ca4 }

-->
</style>
</HEAD><BODY STYLE="background-color:transparent">
<?php

$connection=mysql_connect("localhost", "futurare_me", "mi") or die ('Cannot connect to the database because: ' . mysql_error());
$db=mysql_select_db ("futurare_mydb", $connection) or die ("Couldn't select database");
$sql="SELECT NAME, EMAIL, EMAILHIDE, URL, MSG, MSGDATE FROM gb;";
$sql_result = mysql_query($sql) or die ("Couldn't execute query.");

echo "Entries";

while ($row=mysql_fetch_array ($sql_result)){
$name=$row ["NAME"];
$email=$row ["EMAIL"];
$emailhide=$row ["EMAILHIDE"];
$url=$row ["URL"];
$msg=$row["MSG"];
$date=$row["MSGDATE"];

echo "<P><CENTER>*   *   *   *   *</CENTER><P><FONT SIZE=2>";

if ($emailhide=='no'){
echo "<B><A HREF=mailto:$email>$name</A></B>: ";
} else {
echo "<B>$name</B>: ";
}
echo "<BR><A HREF=$url>$url</A>";
echo "<P>$msg</FONT><P>";
echo "<FONT SIZE=1>$date</FONT>";

}
echo "<P><HR><P>And that's the end.<P>";
mysql_free_result($sql_result);
mysql_close($connection);

?>
</BODY></HTML>














