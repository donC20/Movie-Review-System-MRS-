<?php
include 'db.php';
$movie_no = $_GET["id"];
$query = mysqli_query($connection, "SELECT * FROM home_content WHERE movie_no='$movie_no' LIMIT 1",);
$social = mysqli_query($connection, "SELECT * FROM ratings WHERE movie_id='$movie_no'");
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
    <link rel="stylesheet" href="css/readmore.css">
    <title>Details</title>
</head>

<body>

    <!-- <h1>Oh Sorry the page you are looking is not fount or may be not added kindly please try again!</h1> -->
    <?php
    while ($row = mysqli_fetch_array($query)) {

    ?>
        <div class="container-header">
            <div class="head-images">
                <img src="<?php echo $row['image'] ?>" alt="image broken">
                <div class="heading-main">
                    <h1 id="movie-name"><?php echo $row['Movie_name'] ?></h1>
                </div>
            </div>
        </div>

        <!-- details -->
        <div class="movie-details">

            <div class="movie-all">

                <div class="movie-thumbnail">
                    <img src="<?php echo $row['movie_thumbnail'] ?>" alt="">
                </div>



                <div class="movie-paragraph">
                    <h1 id="movie-name"><?php echo $row['Movie_name'] ?></h1>

                    <div id="rate-view">
                        <h4><?php echo $row['total_ratings'] ?> rated</h4>
                        <span><?php echo $row['rate_avg'] ?>/5</span>
                        <div id="category"><?php echo $row['type'] ?></div>
                        <div id="commenter">
                            <button id="add-comment"><i class="fa fa-commenting-o fa-lg" aria-hidden="true"></i></button>

                        </div>
                    </div>

                    <div class="para">
                        <p><?php echo $row['description'] ?></p>
                    </div>

                </div>
            </div>


        </div>
    <?php
    }
    ?>
    <div class='comments-area'>
        <h2 style='color:white;margin-left:20px;'>Comments</h2>
        
        <?php
        while ($row = mysqli_fetch_array($social)) {
            echo "
        <div class='container-fluid comment-cards'>
            <div class='row d-flex justify-content-center '>
                <div class='col-md-12 col-lg-10'>
                    <div class='card text-dark comment-cards'>
                        <div class='card-body p-4'>
                            
                            <div class='d-flex flex-start'>
                                <img class='rounded-circle shadow-1-strong me-3' src='https://img.favpng.com/25/13/19/samsung-galaxy-a8-a8-user-login-telephone-avatar-png-favpng-dqKEPfX7hPbc6SMVUCteANKwj.jpg' alt='avatar' width='60' height='60' />
                                <div>
                                    <h6 class='fw-bold mb-1 text-warning'>" . $row['user_name'] . "</h6>
                                    <div class='d-flex align-items-center mb-3'>
                                        <p class='mb-0 text-white-50'>
                                        " . $row['datetime'] . "
                                            <span class='badge bg-warning text-dark'>" . $row['user_rating'] . "/5</span>
                                        </p>
                                    </div>
                                    <p class='mb-0 text-light'>
                                        " . $row['user_review'] . "
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr class='my-0 text-white-50' />
        </div>
        ";
        }  ?>
    </div>
</body>

</html>