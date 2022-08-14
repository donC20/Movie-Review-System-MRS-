<?php
include 'db.php';
include 'DB_login.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style2.css">
  <title>Login</title>
</head>

<body>
  <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert-danger-ue" style="display: <?php if (isset($display['D'])) echo $display['D']; ?>;">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></i></button>
    <strong>Hmm..looks like </strong> <?php if (isset($errors['A'])) echo $errors['A']; ?>
  </div>
  <div class="content">



    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8 forms">

              <!-- sign in  form -->

              <div class="container form-signin">
                <div class="mb-4">
                  <h3>Sign In</h3>
                  <p class="mb-4">Hello Howdy!...Sign in to access all privilages.</p>
                </div>
                <form action="#" method="post">
                  <div class="form-group first">
                    <label for="username"></label>
                    <input type="text" class="form-control" id="l-username" name="username_log" placeholder="Username" required>

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password"></label>
                    <input type="password" class="form-control" id="l-password" name="password_log" placeholder="Enter Password" required>
                  </div>
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                      <input type="checkbox" required>
                      <div class="control_check"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                  </div>
                  <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary btn-change">
                  <br>
                  <br>

                  <p class="text-center">Not a member? <a href="javascript:;" onclick="this.href='login.php?name=' + 'signup'" class="text-primary font-weight-bold" style="text-decoration: none;" id="nav-signup">Sign Up</a></p>
                </form>

              </div>


              <!-- sign up form -->

              <div class="container form-signup">
                <div class="mb-4">
                  <h3>Sign Up</h3>
                  <p class="mb-4">Hello Howdy!...Sign up now and beacome a part of us!.</p>
                </div>
                <form method="post" id="form-signup">

                  <div class="form-group s-one">

                    <label for="username"></label>
                    <input type="text" class="form-control" id="username" name="s-username" placeholder="Username" required pattern="[a-z_-1-99999]{1,12}" title="Username should only contains small letters and range between 1 to 12 characters or may use special characters like '_' or numbers.">

                  </div>
                  <div class="form-group s-two mb-4">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="email" name="s-email" placeholder="Email" required>
                  </div>

                  <div class="form-group s-three mb-4">
                    <label for="password"></label>
                    <input type="password" class="form-control" id="password" name="s-password" placeholder="Enter password" required>
                    <i class="fa fa-times-circle" aria-hidden="true" id="check-bad" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="The password must be 7 to 32 characters long.
                    The password must contain a mix of letters, numbers, and/or special characters. Passwords containing only letters or only numbers are not accepted.
                    The password is case-sensitive.
                    The password must contain a mix of letters, numbers, and/or special characters. Passwords containing only letters or only numbers are not accepted.
                    Single quotes, double quotes, ampersands ( ‘  " & ), and spaces are not allowed. Successive passwords should not follow a pattern. The password cannot be the same as your Merchant Login name and should not contain any part of your company name or user name. Do not post or share your password or send your password to others by email."></i>
                    <i class="fa fa-check-circle" aria-hidden="true" id="check-good"></i>
                  </div>
                  <div class="form-group s-four mb-4">
                    <label for="confirm-password"></label>
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm password" required>
                    <i class="fa fa-times-circle" aria-hidden="true" id="check-bconfirm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Password does not match!"></i>
                    <i class="fa fa-check-circle" aria-hidden="true" id="check-gconfirm"></i>

                  </div>
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Agree all <a href="#">terms and
                          conditions</a> .</span>
                      <input type="checkbox" required>
                      <div class="control_check"></div>
                    </label>
                  </div>
                  <button type="submit" name="submit" class="btn btn-block btn-primary btn-change" onclick="submit">Get started</button>
                  <br>
                  <br>
                  <p class="text-center">Already a member? <a href="javascript:;" onclick="this.href='login.php?name=' + 'login'" class="text-primary font-weight-bold" style="text-decoration: none;" id="nav-signin">Sign In</a></p>
                </form>
              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/authenticaton.js"></script>

</body>

</html>