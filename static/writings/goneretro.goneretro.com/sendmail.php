<?
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "friday@goneretro.com", "[Gone Retro] Feedback",
    $message, "From: $email" );
  header( "Location: postsendmail.html" );
?>