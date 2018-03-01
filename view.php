<?php
if(!empty($_GET['id'])){
    //DB details
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
    //Get image data from database
    $result = $db->query("SELECT image FROM images WHERE id = {$_GET['id']}");

    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();

        //Render image
        header("Content-type: image/jpg");
        echo $imgData['image'];
    }else{
        echo 'Image not found...';
    }
}
?>
