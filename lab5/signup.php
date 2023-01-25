<?php 
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Signup form</title>
    <style>
        body {
            font-size: 20px;
        }
    </style>
  </head>
  <body style="background-color: #DBEEF2;">
    <div>
        <?php include('alert.php'); ?>
        <section  style="margin-top:50px">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body">
            <h1 style="margin-left:180px">Sign Up</h1>
               
                    <div class="card-body">
                    <form action="signup_code.php"  method="POST">
                    <label for="email">Email</label><br>
                        <input type="email" class="form-control" id="email" name="email" style="height:60px; font-size:30px"><br>
                        <label for="name">User name</label><br>
                        <input type="text" class="form-control" id="name" name="name" style="height:60px; font-size:30px"><br>
                        <label for="password">Password</label><br>
                        <input type="password" class="form-control" id="pass" name="password" style="height:60px; font-size:30px"><br>
                        <div class="container ">
                        <div class="row">
                       <input type ="submit" name="signup" value="Sign Up" class="btn btn-primary" style="border-raduis:10px; font-size:30px "/> 
                       </div> 
                      </div>
                      </form>
      </div>
       <div>
              <p class="mb-0">Already have an account? <a href="login.php" class="text-black-50 fw-bold">Login</a>
              </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
           </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>