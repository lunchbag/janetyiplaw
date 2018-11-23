<HEAD><TITLE>Go back</TITLE>
<link href="../pagestyle.css" rel="stylesheet" type="text/css">
</HEAD>

<FONT FACE="Arial,Helvetica,Verdana" SIZE="2">
<STRONG>Development Logs</STRONG><P><HR><P>

<?php
 if ($message != '') 
 {

  $name = str_replace ("\\\"","\"",$name);
  $name = str_replace ("\'","'",$name);

  $subject = str_replace ("\\\"","\"",$subject);
  $subject = str_replace ("\'","'",$subject);

  $message = str_replace ("\n","<br>",$message);
  $message = str_replace ("\\\"","\"",$message);
  $message = str_replace ("\'","'",$message);

  $newRow = '<div class="viewGuestbook">' . '<FONT SIZE=3><B>' . ($subject) . '</FONT><BR>' . date('F j, Y') . '</B><BR><I>' . date('g:i a') . '</I><P>' . ($message) . ' <P>-- <I>' . strip_tags ($name)  . '</I></div><P><CENTER>* * * * *</CENTER><P>';



  	      
  $oldRows = join ('', file ('guestbook.txt') );
  $fileName = fopen ('guestbook.txt', 'w');
  fputs ($fileName, $newRow . chr(13) . chr(10) . $oldRows);
  fclose ($fileName);
 }
 
 include ("readbook.php");
?>





</FONT>













