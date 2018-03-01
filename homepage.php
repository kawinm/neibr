<?php
 ob_start();
 session_start();
 require_once 'includes/dbconnect.php';

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM members WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);

?>

<?php ob_end_flush(); ?>
