<?php
	// Start the session
	session_start();
  $err = $_SESSION["sessionErr"];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body style="background-image: url('img/01.jpg'); background-size: cover;">
    
    <div id="heading">
        <h1>Dear Reader   <span class="badge bg-secondary">User Login</span></h1>
      <div id="login">
          <form id="loginForm" action="php/form-handler.php" method="POST">
              <div class="mb-3">

              <h3 style="color: red;"><?php echo $err ?></h3>  
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Auto Login</label>
              </div>
              <button type="submit" class="btn btn-primary" style="margin-right: 40px;">Submit</button>
              or
              <a href="createAc.php" >
                <input type="button" class="btn btn-secondary" style="margin-left: 40px;" value="Create a Account">
              </a>
          </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<?php
	$_SESSION["sessionErr"] = null;
?>