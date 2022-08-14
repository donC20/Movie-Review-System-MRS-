<?php
session_start();
include 'db.php';
include 'DB_admin.php';
if (!isset($_SESSION['Username'])) {
  header('location:login.php?name=login');
} else if ($_SESSION['user_type'] !== 'admin') {
  header('location:error.html?why=insufficient_access_token');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Admin panel</title>
  <link rel="stylesheet" href="css/admin.css">
</head>

<body>
  <div class="row">
    <div class="col-md-2">
      <div class="side-pane">
        <div class="page-header">
          <h1 style="color: white;">Admin</h1>
        </div>
        <table style="width: 100%;">
          <tr>
            <td>
              <div class="panel_btns"><i class="fa fa-plus-circle" aria-hidden="true"></div></i>
            </td>
            <td><button id='add_movie' class="panel_btns">Add Movie</button></td>
          </tr>
          <tr>
            <td>
              <div class="panel_btns"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
            </td>
            <td> <button id='manage_user' class="panel_btns">Manage users</button></td>
          </tr>
          <tr>
            <td>
              <div class="panel_btns"><i class="fa fa-opencart" aria-hidden="true"></i></div>
            </td>
            <td><button id='view_movie' class="panel_btns">View movies</button></td>
          </tr>
          <tr>
            <td>
              <div class="panel_btns"><i class="fa fa-home" aria-hidden="true"></i></i></div>
            </td>
            <td><button id='home-page' class="panel_btns">Home Page</button></td>
          </tr>
          <tr>
            <td>
              <div class="panel_btns"><i class="fa fa-database" aria-hidden="true"></i></div>
            </td>
            <td><button id='database_p' class="panel_btns">Database</button></td>
          </tr>
          <tr>
            <td>
              <div class="panel_btns"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            </td>
            <td><button id='logout' class="panel_btns">Logout</button></td>
          </tr>

        </table>
      </div>
    </div>


    <!-- add movies container -->

    <div class="row" id="add-movies-container">
      <div class="p-5 bg-light">
        <div class="container w-100">
          <h1 class="display-4">Add new movies</h1>
          </p>
        </div>
      </div>

      <form method="post" class="row">
        <div class="col-md-5 mb-3">
          <h6>Movie tag id</h6>
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="movie_id" id="" aria-describedby="helpId" placeholder="" required>
          <small id="helpId" class="form-text text-muted">Example : spider_man</small>
        </div>
        <div class="col-md-5">
          <div class="mb-3">
          <h6>Description</h6>
            <label for="" class="form-label"></label>
            <textarea class="form-control" name="description" id="description" rows="1"></textarea>
          </div>
        </div>
        <div class="col-md-5 mb-3">
          <h6>Movie name</h6>
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="movie_name" id="" aria-describedby="helpId" placeholder="" required>
          <p classs="text-danger" id="alert-danger"><?php if (isset($errors['A'])) echo $errors['A']; ?></p>
          <small id="helpId" class="form-text text-muted">Example : spider man</small>
        </div>
        <div class="col-md-5 mb-3">
          <h6>Movie Thumbnail</h6>
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="movie_thumbnail" id="" aria-describedby="helpId" placeholder="" required>
          <small id="helpId" class="form-text text-muted">Image link is only supported</small>
        </div>
        <div class="col-md-5 mb-3">
          <h6>Movie cover image</h6>
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="movie_cover_image" id="movie_cover_image" aria-describedby="helpId" placeholder="" required>
          <small id="helpId" class="form-text text-muted">Image link is only supported</small>
        </div>
        <div class="col-md-5 mb-3">
          <label for="" class="form-label">Type</label>
          <select class="form-control" name="type" id="type" required>
          <option>Select type</option>
            <option>Movie</option>
            <option>Web series</option>
            <option>TV-show</option>
            <option>Short-movie</option>
          </select>
        </div>
        <div class="row">
        <button type="submit" name="submit" class="btn btn-primary col-md-2 mb-3 m-3" id="add-btn">Add</button>
        <button type="reset" class="btn btn-secondary col-md-2 mb-3 m-3">Reset</button>
        </div>
       
      </form>

      <div class="alertmsg">

        <!-- <div class="alert alert-danger" role="alert" id="alert-danger">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="closeit"></button>
            <h4 class="alert-heading"><i class="fa fa-chain-broken" aria-hidden="true"></i>&nbsp;&nbsp;Warning!</h4>
            <p></p>
            <hr>
            <p class="mb-0">Hmm! Click on the close button to try again!</p>
          </div> -->

        <div class="alert alert-success" role="alert" id="alert-success">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" id="closeit2"></button>
          <h4 class="alert-heading"><i class="fa fa-smile-o" aria-hidden="true"></i>&nbsp;&nbsp;Hola!</h4>
          <p><?php if (isset($errors['B'])) echo $errors['B']; ?></p>
          <hr>
          <p class="mb-0">Good! Click on the close button to add more movies!</p>
        </div>
      </div>

    </div>

    <!-- add movies ends -->


    <!-- manage_user  starts -->

    <div class="col-lg-10" id="manage-user-container">
      <div class="container mt-3 table-user">
        <div class="scrollable">
          <table class="table table-striped  table-responsive">
            <thead class="thead-default">
              <tr>
                <th>Row id</th>
                <th>User id</th>
                <th>User name</th>
                <th>Email</th>
                <th>Accessibility</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              while ($row = $user_view_exe->fetch_assoc()) {

                echo "
          <tr>
            <td scope='row'>" . $row["id"] . "</td>
            <td class='text-truncate' style='max-width: 150px;'>" . $row["userid"] . "</td>
            <td>" . $row["Username"] . "</td>
            <td>" . $row["Email"] . "</td>
            <td><span>" . $row["user_type"] . "</span></td>
            <td><a href='adminpanel.php?u_id=" . $row["id"] . "' class='btn btn-danger' id='delete_id'>Ban</a></td>
          </tr>
          ";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>


    <!-- manage_user  ends -->


    <!-- view movies container -->
    <div class="col-lg-10" id="view-movies-container">
      <div class="container mt-3 table-movie">
        <div class="scrollable">
          <table class="table table-striped  table-responsive">
            <thead class="thead-default">
              <tr>
                <th>Movie no</th>
                <th>Movie name</th>
                <th>Movie tag id</th>
                <th>movie thumbnail</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              while ($row = $result->fetch_assoc()) {

                echo "
          <tr>
            <td scope='row'>" . $row["movie_no"] . "</td>
            <td>" . $row["Movie_name"] . "</td>
            <td>" . $row["movie_tag_id"] . "</td>
            <td><span class='d-inline-block text-truncate' style='max-width: 150px;'>" . $row["movie_thumbnail"] . "</span></td>
            <td><a href='adminpanel.php?id=" . $row["movie_no"] . "' class='btn btn-danger' id='delete_movie'>Delete</a></td>
          </tr>
          ";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


  </div>
  <script src="js/admin.js"></script>
</body>

</html>