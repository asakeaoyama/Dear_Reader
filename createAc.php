<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create a Account</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body style="background-image: url('img/01.jpg'); background-size: cover;">
    
    <div id="heading">
        <h1>Dear Reader   <span class="badge bg-secondary">Create Account</span></h1>
      <div id="login">
          <form id="createAcForm" action="php/createAc-handler.php" method="POST">
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">
              </div>

              <div class="mb-3">
              <label  class="form-label">First Name</label>
              <input type="text" class="form-control" name="firstname">
              </div>

              <div class="mb-3">
              <label  class="form-label">Last Name</label>
              <input type="text" class="form-control" name="lastname">
              </div>

              <button type="submit" class="btn btn-primary" style="margin-right: 40px;">Create it!</button>
          </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>