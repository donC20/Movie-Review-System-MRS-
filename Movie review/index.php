<?php
session_start();
include 'db.php';
include 'DB_index.php';
if (!isset($_SESSION['Username'])) {
    header('location:login.php?name=login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.php" />
    <title>WeWatch</title>
</head>

<body>

    <header>

        <div class="container-header">
            <div class='container-nav'>
                <a href="#">Home</a>
                <a href="#">Movies</a>
                <a href="#">Top Rated</a>
                <a href="#">TV Shows</a>
                <input type="search" name="" id="search-bar" placeholder="Find me useful!">
                <i class='fa fa-search' aria-hidden="true"></i>
                <!-- <a href="javascript:;" onclick="this.href='login.php?name=' + 'login'" id="set-login">Login</a>
                <a href="javascript:;" onclick="this.href='login.php?name=' + 'signup'" id="set-signin">Get started</a> -->
                <div class="dropdown">
                    <a href="#" id="user-in" class="dropbtn"><?php echo $_SESSION['Username']; ?></a>
                    <div class="dropdown-content">
                        <a href="javascript:;" onclick="this.href='loading.php?name=' + 'logout'" id="logout">Logout</a>
                        <a href="#">Account</a>
                    </div>
                </div>

            </div>




            <!-- Slideshow container -->
            <?php

            //read data of each row

            while ($row = $result->fetch_assoc()) {

                echo "<div class='slideshow-container'>

                <div class='mySlides'>
                    
                    <img src=" . $row["movie_img"] . ">
                    <div class='text'>
                        <h2>" . $row["movie_name"] . "</h2>
                        <div class='more-info'>
                            <h5>Duration</h5><span>" . $row["duration"] . "min</span>
                            <h5>Genere :</h5><span>" . $row["genere"] . "</span>
                            <h5>Language :</h5><span>" . $row["language"] . "</span>
                        </div>
                        <p>" . $row["description"] . "</p>
                        <button id='header-rate-button' onclick='rate()'>Rate</button>
                    </div>
                    <div class='dot-class'>
                            <span class='dot' onclick='currentSlide(1)'></span>
                            <span class='dot' onclick='currentSlide(2)'></span>
                            <span class='dot' onclick='currentSlide(3)'></span>
                            <span class='dot' onclick='currentSlide(3)'></span>
                            <span class='dot' onclick='currentSlide(3)'></span>
                            <span class='dot' onclick='currentSlide(3)'></span>
                    </div>
                    </div>
                </div>";
            }
            ?>

        </div>
    </header>

    <section>

        <h1 id="section-2-h1">How do you feel about these movies?</h1>
        <div class="movie-grid">

            <?php

            $hover_count = 1;
            //read data of each row
            while ($row = $result_movies->fetch_assoc()) {

                $new_rate = '"rate' . (string)$hover_count . '"';
                $new_rate_pass = 'rate' . (string)$hover_count;
                $new_star = '"star' . (string)$hover_count . '"';
                $hover_id = '"navigate-hover-' . (string)$hover_count . '"';
                $rate_id = '"'.$row["movie_no"] . '-movie'.'"';
                echo "<div class='movie-thumbnail div-1' onMouseOver='a.show($hover_id)' onMouseOut='a.hide($hover_id)'>
        
          <div id=$hover_id>
          <a href=readmore.php?id=" . $row["movie_no"] . " target='_blank'>Read more</a>
          <button type='button' name='add_review' id=$new_rate class='btn btn-primary select-thumb' data-num=" . $row["movie_no"] . ">Review</button>
            </div>
          <div id='rate-view'>
                 <p id='" . $row["movie_no"] . "' class='badge'>" . $row["total_ratings"] . " User(s) rated</p>
              <b><span id=$rate_id>" . $row["rate_avg"] . "</span>/5</b>
          </div>
          <img id='" . $row["movie_tag_id"] . "' src='" . $row["movie_thumbnail"] . "'>
        </div>";
                $hover_count = $hover_count + 1;
            }
            ?>

        </div>
    </section>

    <div id="review_modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Submit Review</h5>

                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center mt-2 mb-4">
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                    </h4>
                    <div class="form-group">
                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
                    </div>
                    <div class="form-group">
                        <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="button" class="btn btn-primary" id="save_review">Submit</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="js/bootstrap.min.js"></script>
    <script src="js/home.js"></script>

</body>

</html>