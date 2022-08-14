
// slide functions

let slideIndex = 0;
let index = 1;
showSlides();
function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds

}


// hover on movie thumbnail function
a = {
  show: function (elem) {
    document.getElementById(elem).style.visibility = 'visible';
  },
  hide: function (elem) {
    document.getElementById(elem).style.visibility = 'hidden';
  }
}

// get and send data to page



// click to open rate slider
// o = {
//   openfun: function (elem) {
//     document.getElementById(elem).style.visibility = 'visible';
//   }
// }


$(document).ready(function () {
  var rating_data = 0;
  let movie_get_id = 0;
  var user = document.getElementById('user-in').innerHTML;
  document.getElementById('user_name').disabled = true;
  $('#user_name').val(user);
  $('button.select-thumb').hover(function () {
    var i = $(this).attr('id');
    $('#' + i).click(function () {
      $('#review_modal').modal('show');
    });
  });

  load_rating_data();
  $(document).on('mouseenter', '.submit_star', function () {

    var rating = $(this).data('rating');
    reset_background();

    for (var count = 1; count <= rating; count++) {

      $('#submit_star_' + count).addClass('text-warning');

    }

  });

  function reset_background() {
    for (var count = 1; count <= 5; count++) {

      $('#submit_star_' + count).addClass('star-light');

      $('#submit_star_' + count).removeClass('text-warning');

    }
  }

  $(document).on('mouseleave', '.submit_star', function () {

    reset_background();

    for (var count = 1; count <= rating_data; count++) {

      $('#submit_star_' + count).removeClass('star-light');

      $('#submit_star_' + count).addClass('text-warning');
    }

  });

  $(document).on('click', '.submit_star', function () {

    rating_data = $(this).data('rating');

  });
  $(document).on('click', '.select-thumb', function () {
    movie_get_id = $(this).data('num');
  });

  $('#save_review').click(function () {
    var user_name = $('#user_name').val();
    var user_review = $('#user_review').val();
    var movie_id = movie_get_id;
    if (user_name == '' || user_review == '') {
      alert("Please Fill Both Field");
      return false;
    }
    else {
      $.ajax({
        url: "DB_index.php",
        method: "POST",
        data: { rating_data: rating_data, user_name: user_name, user_review: user_review, movie_id: movie_id },
        success: function (data) {
          $('#review_modal').modal('hide');
          alert(data);
          load_rating_data();
          window.location.reload();
        }
      })
    }

  });
  function load_rating_data() {
    $.ajax({
      url: "DB_index.php",
      method: "POST",
      data: { action: 'action' },
      dataType: "JSON",
      success: function (data) {
          // var product_id = data.product_id;
          // var rate_id = data.product_id + '-movie';
          // console.log(rate_id);
          // $('#' + rate_id).text(data.average_rating);
          // $('#' + product_id).text(data.total_review + " User(s) rated");
      }
    });
  }

});








