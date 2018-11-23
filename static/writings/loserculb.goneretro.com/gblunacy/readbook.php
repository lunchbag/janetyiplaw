<div class="guestbookTop">
<a href="postform.php">Write</a> to a guestbook<P><HR><P>
</div>

<?php

 $fileName = file ("guestbook.txt");
 $rows = count ($fileName);
  
 if ($rows > 100)
 {
 	if (!isset ($row) )
 	{
 		$row = 0;
 	}
 
 	print ("<table class=\"guestbookLinks\"><tr><td width=\"50%\">");
  
 	if ($row > 0)
 	{
		echo "<div class=\"nextPage\"><< <a href=\"readbook.php?row=" . ($row - 100) . "\">Next few</a></div>";
	}
	
	print ("</td><td width=\"50%\">");

 	if ( ($rows - $row) > 100)
 	{
		echo "<div class=\"previousPage\"><a href=\"readbook.php?row=" . ($row + 100) . "\">Previous few</a> >></div>";
	}
		
	print ("</td></tr></table>");

   	for ($i = $row; $i < ($row + 100); $i++)
	{
		echo $fileName [$i];
	}
 }
 else
 {
  	for ($i=0; $i < $rows; $i++)
  	{
  		echo $fileName [$i];
  	}
 }
  
?>

<div class="guestbookUp">
<P><HR><P>	
<a href="postform.php">Write</a> to a guestbook
</div>

