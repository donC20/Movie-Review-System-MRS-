<?php

include 'db.php';

// read table data 
// for slider 
$sql = "SELECT * FROM slider_movies";
$result = $connection->query($sql);

if (!$result) {
	die("Invalid query : " . $connection->connect_error);
}



// php code for show results from table function

// read table data 

$sql_movies = "SELECT * FROM home_content ORDER BY movie_no desc";
$result_movies = $connection->query($sql_movies);

if (!$result_movies) {
	die("Invalid query : " . $connection->connect_error);
}


//review and rating query results


if (isset($_POST["rating_data"])) {

	$user_name = $_POST["user_name"];
	$user_rating = $_POST["rating_data"];
	$user_review = $_POST["user_review"];
	$movie_id = $_POST["movie_id"];
	$Object = new DateTime();
	$DateAndTime = $Object->format("Y-m-d h:i:s a");

	$check_user_query = "SELECT * FROM ratings WHERE user_name='$user_name' AND movie_id='$movie_id'";
	$check_user_query_result = mysqli_query($connection, $check_user_query) or die(mysqli_error($connection));
	if (mysqli_num_rows($check_user_query_result) > 0) {
		$row_checks = mysqli_fetch_assoc($check_user_query_result);
		$current_row = $row_checks['review_id'];
		$update_rating = "UPDATE `ratings` SET `user_rating` = '$user_rating', `user_review` = '$user_review' WHERE `ratings`.`review_id` = '$current_row'";
		$update_rating_execute = mysqli_query($connection, $update_rating) or die(mysqli_error($connection));
		if ($update_rating_execute) {
			echo "Your Review & Rating updated Successfully!";
		}
	} else {
		$review_query = "INSERT INTO ratings (user_name,movie_id,user_rating,user_review, datetime) VALUES ('$user_name','$movie_id','$user_rating', '$user_review', '$DateAndTime')";
		$run = mysqli_query($connection, $review_query) or die(mysqli_error($connection));

		if ($run) {
			echo "Your Review & Rating Successfully Submitted";
		}
	}
}


if (isset($_POST["action"])) {

	$traverse = "SELECT movie_id FROM ratings";
	$traverse_result = mysqli_query($connection, $traverse);

	while ($each_row = $traverse_result->fetch_assoc()) {
		$average_rating = 0;
		$total_review = 0;
		$product_id = $each_row['movie_id'];
		$rate_db = array();
		$sum_rates = array();
		$ratequery = "SELECT * FROM ratings WHERE movie_id = '$product_id' ";
		$rateres = mysqli_query($connection, $ratequery);
		while ($data = mysqli_fetch_assoc($rateres)) {
			$rate_db[] = $data;
			$sum_rates[] = $data['user_rating'];
		}
		if (count($rate_db)) {
			$rate_times = count($rate_db);
			$sum_rates = array_sum($sum_rates);
			$rate_value = $sum_rates / $rate_times;
			$rate_bg = (($rate_value) / 5) * 100;
		} else {
			$rate_times = 0;
			$rate_value = 0;
			$rate_bg = 0;
		}
		$average_rating = substr($rate_value, 0, 3);
		$total_review = $rate_times;
		$update_db = "UPDATE `home_content` SET `rate_avg` = '$average_rating', `total_ratings` = '$total_review' WHERE `home_content`.`movie_no` = '$product_id'";
		$db_result = mysqli_query($connection, $update_db);
		// $output = array(
		// 	'product_id' => $product_id,
		// 	'average_rating' => substr($rate_value, 0, 3),
		// 	'total_review' =>  $rate_times,
		// );
		// echo json_encode($output);
	}
	
}
