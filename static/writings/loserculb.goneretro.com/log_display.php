<HTML><HEAD><TITLE>Log Entries</TITLE>
</HEAD><BODY>
<?php

$connection=mysql_connect("localhost", "futurare_me", "mi") or die ('Cannot connect to the database because: ' . mysql_error());
$db=mysql_select_db ("futurare_mydb", $connection) or die ("Couldn't select database");
$sql="SELECT xauthor, xdate, xtime, xtitle, xentry FROM logs;";
$sql_result = mysql_query($sql) or die ("Couldn't execute query.");

echo "<FONT FACE=Arial SIZE=3><B>Log Entries</B></FONT>";
echo "<P>Click <A HREF=#bottom>here</A> to go to the bottom of the page.";

echo "<P><FONT FACE=Arial SIZE=2>Click <A HREF=log_add.html>here</A> to add an entry.</FONT>";

while ($row=mysql_fetch_array ($sql_result)){
$author=$row ["xauthor"];
$date=$row ["xdate"];
$time=$row ["xtime"];
$title=$row ["xtitle"];
$entry=$row ["xentry"];


echo "<P><CENTER>*   *   *   *   *</CENTER><P><FONT SIZE=2 FACE=Arial>";

echo "<FONT SIZE=3><B>$title</B></FONT>";
echo "<BR><B>$date</B>";
echo "<BR><I>$time</I>";
echo "<P>$entry";
echo "<P><I>-- $author</I></FONT>";



}
echo "<A NAME=bottom>";
echo "<P><HR><P>And that's the end.<P>";

echo "<FONT FACE=Arial SIZE=2>Click <A HREF=log_add.html>here</A> to add a development log entry.</FONT><P>";

mysql_free_result($sql_result);
mysql_close($connection);

?>
</BODY></HTML>



