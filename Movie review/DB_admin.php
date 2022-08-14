<?php
include 'db.php';


/////////////////////////////delete & view////////////////

$sql = "SELECT * FROM home_content";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query : " . $connection->connect_error);
}



// php code for delete from table function

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $delete = mysqli_query($connection, "DELETE FROM `home_content` WHERE `movie_no`='$id'");
    header('Location: adminpanel.php?name=flushed');
    exit;
}

/////////////////////////////add-movies////////////////////////

if (isset($_POST['submit'])) {
    if (!empty($_POST['movie_id']) && !empty($_POST['movie_name']) && !empty($_POST['movie_thumbnail'])) {
        $movie_id = $_POST['movie_id'];
        $movie_name = $_POST['movie_name'];
        $movie_thumbnail = $_POST['movie_thumbnail'];
        $description = $_POST['description'];
        $type = $_POST['type'];
        $movie_cover_image = $_POST['movie_cover_image'];

        $errors = array();
        $mn = "SELECT Movie_name FROM home_content WHERE Movie_name = '$movie_name'";
        $mncheck = mysqli_query($connection, $mn);
        if (mysqli_num_rows($mncheck) > 0) {
            $errors['A'] = ' Duplicate Movie Found please add another movie';
            echo "<script>
                      $(document).ready(function () {
                        $('#alert-danger').show(400);
                        $('#view-movies-container').hide();
                        document.location.href='adminpanel.php?status=' + 'fail';
                      });
                      </script>";
        } else {

            // inserting into db

            $query = "INSERT INTO home_content (Movie_name,movie_tag_id,movie_thumbnail,description,image,type) values('$movie_name','$movie_id','$movie_thumbnail','$description','$movie_cover_image','$type')";
            $run = mysqli_query($connection, $query) or die(mysqli_error($connection));
            if ($run) {
                $errors['B'] = " Data inserted successfully";
                echo "<script>
                      $(document).ready(function () {
                        document.location.href='adminpanel.php?status=' + 'success';
                        $('#alert-success').show(400);
                        $('#view-movies-container').hide();
                      });
                      </script>";
            } else {
                $errors['A'] = "Something went wrong";
                echo "<script>
                      $(document).ready(function () {
                        $('#alert-danger').show(400);
                        $('#view-movies-container').hide();
                        document.location.href='adminpanel.php?status=' + 'something went wrong';
                      });
                      </script>";
            }
        }
    }
}



// user management //////////////////////////////////////////////////////////

$user_view = "SELECT * FROM auth";
$user_view_exe = $connection->query($user_view);

if (!$user_view_exe) {
    die("Invalid query : " . $connection->connect_error);
}



// php code for delete from table function

if (isset($_GET["u_id"])) {
    $u_id = $_GET["u_id"];
    $u_delete = mysqli_query($connection, "DELETE FROM `auth` WHERE `id`='$u_id'");
    header('Location: adminpanel.php?name=flushed-user');
    exit;
}
