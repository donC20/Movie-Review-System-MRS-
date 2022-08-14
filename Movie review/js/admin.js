
$(document).ready(function () {
  $('#alert-success').hide();
  $('#alert-danger').hide();

  $('#add_movie').click(function () {
    var url = new URL("http://localhost/review/adminpanel.php?");
    url.searchParams.append('name', 'add_movie');
    window.location.href = url;
  });
  $('#view_movie').click(function () {
    var url = new URL("http://localhost/review/adminpanel.php?");
    url.searchParams.append('name', 'view_movie');
    window.location.href = url;
  });
  $('#manage_user').click(function () {
    var url = new URL("http://localhost/review/adminpanel.php?");
    url.searchParams.append('name', 'flushed-user');
    window.location.href = url;
  });

  $('#home-page').click(function (e) { 
    e.preventDefault();
    window.location.href = "http://localhost/review/index.php?";
  });
  $('#database_p').click(function (e) { 
    e.preventDefault();
    window.location.href = "http://localhost/phpmyadmin/index.php?route=/database/structure&db=wewatch";
  });
  $('#logout').click(function () { 
    var url = new URL("http://localhost/review/loading.php?");
    url.searchParams.append('name', 'logout');
    window.location.href = url;
  });
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const page = urlParams.get('name');
  if (page == 'add_movie') {
    $('#add-movies-container').show();
    $('#view-movies-container').hide();
    $('#manage-user-container').hide();

  } else if (page == 'view_movie' || page == 'flushed') {
    $('#add-movies-container').hide();
    $('#view-movies-container').show();
    $('#manage-user-container').hide();
  }
  else if (page == 'flushed-user') {
    $('#manage-user-container').show();
    $('#add-movies-container').hide();
    $('#view-movies-container').hide();
  }



  // $('#closeit').click(function () {
  //   $('#alert-danger').hide();
  //   $('#add-movies-container').show();
  // });
  // $('#closeit2').click(function () {
  //   $('#alert-success').hide();
  //   $('#add-movies-container').show();
  // });
});
// $('#alert-show-top').show(2000, function () {
// });