<!DOCTYPE html>
<?php
include_once 'homepage.php';
include_once 'dbconnect.php';
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Css style sheet -->
  <link rel="stylesheet" media="screen" href="css/profile.css">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src=" http://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
<title><?php echo ucwords($userRow['userName']); echo(" "); echo ucwords($userRow['userLastName']); ?></title>
</head>
<body>

  <nav id= "navbar" class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class= "container">
      <button class="navbar-toggler" data-toggle="collapse" data-target ="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-header">
          <a href=index.php class="btn btn-danger navbar-brand display-4">Neibr</a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="nav nav-fill ">
        <li class="nav-item">
            <a href="home.php" class="btn btn-primary nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="profile.php" class="btn btn-success nav-link">Profile</a>
        </li>
        <li class="nav-item">
          <a href="logout.php?logout" class="btn btn-warning nav-link">Sign Out</a>
        </li>
      </ul>

    </div>

  </nav>
  <div id="hr" class="bg-primary">
  </div>

<div>
  <form action="upload.php" enctype="multipart/form-data" method="post">
    <input name="file" type="file" />
    <input name="submit" type="submit" value="Upload File" />
  </form>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
