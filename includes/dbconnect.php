<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.

 define('DBHOST', 'sql104.epizy.com');
 define('DBUSER', 'epiz_21263738');
 define('DBPASS', 'kawin10');
 define('DBNAME', 'epiz_21263738_usersdb');

 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);

 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }

 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }
 ?>
