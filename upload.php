<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['file']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */

        //DB details
        $dbHost     = 'sql104.epizy.com';
        $dbUsername = 'epiz_21263738';
        $dbPassword = 'kawin10';
        $dbName     = 'epiz_21263738_usersdb';

        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }

        $dataTime = date("Y-m-d H:i:s");

        //Insert image content into database
        $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        }
    }else{
        echo "Please select an image file to upload.";
    }
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
 <table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="index.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
 $sql="SELECT * FROM images";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['image'] ?></td>
        <td><?php echo $row['created'] ?></td>
        </tr>
        <?php
 }
 ?>
    </table>

</div>
</body>
</html>
