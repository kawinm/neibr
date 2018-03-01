<!DOCTYPE html>

<html lang="en">
<head>

  <meta charset="utf-8">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

  <!-- Title -->
  <title> Neibr </title>

  <!-- Css style sheet -->
  <link rel="stylesheet" media="screen" href="css/style.css">

  <!-- Javascript files -->
  <script src="js/overlay.js"></script>

  <!-- Jquery include -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Bootstrap include -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Ajax include -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

</head>

<body>

    <!-- pParticlejs Division -->
    <div id="particles-js"></div>

    <!-- Index text Division -->
    <div id="neibr">
	    <a href="javascript:void(0)">
      <h1 class="display-1 text-center text-success">Neibr</h1></a>
    </div>


    <div id="underlay">
      <!-- Navbar -->
      <h1 id="title" class="display-1 bg-dark text-white inline-block text-center">Neibr</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
Username:
<input type="text" name="username" maxlength="40" value="<?php
echo $_COOKIE['remember_me']; ?>">
Password:
<input type="password" name="pass" maxlength="50">
<input type="checkbox" name="remember" <?php if(isset($_COOKIE['remember_me'])) {
		echo 'checked="checked"';
	}
	else {
		echo '';
	}
	?> >Remember Me
<input type="submit" name="submit" value="Log in">
</form>

      <!-- Add in case : <div id ="right" class="bg-white"></div> <div id="left" class="bg-white"></div>-->

     <div id="login" class=" bg-success">
      <?php
       include_once 'includes/login.php';

      ?>
      <div class="container well well-lg">

       <div id="login-form">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

           <div class="col-md-12">

               <div class="form-group">
                   <h2 class="display-4 ">Sign In</h2>
                  </div>

               <div class="form-group">
                   <hr />
                  </div>

                  <?php
         if ( isset($errMSG) ) {

          ?>
          <div class="form-group">
                   <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                      </div>
                   </div>
                      <?php
         }
         ?>

                  <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                   <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                      </div>
                      <span class="text-danger"><?php echo $emailError; ?></span>
                  </div>

                  <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                   <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                      </div>
                      <span class="text-danger"><?php echo $passError; ?></span>
                  </div>

                  <div class="form-group">
                   <hr />
                  </div>

                  <div class="form-group">
                   <button type="submit" class="btn btn-block btn-danger" name="btn-login">Sign In</button>
                  </div>

                  <div class="form-group">
                   <hr />
                  </div>

              </div>

          </form>
          </div>

      </div>



      <?php ob_end_flush(); ?>
        </div>


  <div id="signup" class="bg-success">
      <?php
       include_once 'includes/register.php';
      ?>
      <div class="container">

       <div id="login-form">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

           <div class="col-md-12">

               <div class="form-group">
                   <h2 class="display-4 ">Sign Up</h2>
                  </div>

               <div class="form-group">
                   <hr />
                  </div>

                  <?php
         if ( isset($errMSG) ) {

          ?>
          <div class="form-group">
                   <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
          <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                      </div>
                   </div>
                      <?php
         }
         ?>

                  <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                   <input type="text" name="name" class="form-control" placeholder="Enter First Name" maxlength="30" value="<?php echo $name ?>" />
                      </div>
                      <span class="text-danger"><?php echo $nameError; ?></span>
                  </div>

                  <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                   <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" maxlength="30" value="<?php echo $lastname ?>" />
                      </div>
                      <span class="text-danger"><?php echo $nameError; ?></span>
                  </div>

                  <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                   <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
                      </div>
                      <span class="text-danger"><?php echo $emailError; ?></span>
                  </div>


                  <div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                   <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
                      </div>
                      <span class="text-danger"><?php echo $passError; ?></span>
                  </div>

                  <div class="form-group">
                   <hr />
                  </div>

                  <div class="form-group">
                   <button type="submit" class="btn btn-block btn-danger" name="btn-signup">Sign Up</button>
                  </div>

                  <div class="form-group">
                   <hr />
                  </div>

              </div>

          </form>
          </div>

      </div>

      <?php ob_end_flush(); ?>

</div>

<script src="js/particles.js"></script>
<script src="js/apps.js"></script>
<script src="js/overlay.js"></script>
</body>
</html>
