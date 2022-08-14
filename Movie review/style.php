<?php
header('Content-Type: text/css; charset=UTF-8');
include 'db.php';
?>
* {
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
"Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
"Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

:root {
--default: #7b1fa2;
}

body {
background-color: #020916;
}

.container-header {
width: 100%;
height: 650px;
margin: auto;
position: relative;
}

.container-nav {
padding: 2%;
z-index: 1;
max-width: 100%;
background-color: #02091614;
box-shadow: #0209162e 0px 0px 162px 0px;
display: grid;
grid-template-columns: repeat(7, 9%);
justify-content: center;
}

.container-nav>a {
text-decoration: none;
color: #dfdcdc;
font-size: 15px;
font-weight: 400;
}

.container-nav>a:hover {
color: #7b1fa2;
font-weight: 800;
text-shadow: 2px 5px 25px white;
}

#search-bar {
margin-top: -5%;
width: 200%;
height: 39px;
outline: none;
background: #b5b5b545;
position: relative;
padding-left: 5%;
border: none;
border-radius: 40px;
}

#search-bar::placeholder {
position: relative;
left: 7vh;
color: #dfdcdc;
font-size: 14px;
}

#search-bar:hover {
background-color: white;
}

#set-login{
margin-left:25%;
}

.container-nav i {
margin-top: 0.3em;
margin-left: -7.3em;
color: white;
}

body {
font-family: Verdana, sans-serif;
}

.mySlides {
display: none;
}

img {
width: 100%;
height: 650px;
object-fit: cover;
}

/* Slideshow container */
.slideshow-container {
width: 100%;
position: relative;
z-index: -1;
/* top: 0; */
bottom: 93px;
margin: auto;
mask-image: radial-gradient(ellipse, black 50%, rgba(0, 0, 0, 0.5));
-webkit-mask-image: radial-gradient(ellipse,
#000000 -15%,
rgba(0, 0, 0, 0.5) 55%);
}

/* Caption text */
.text {
color: white;
font-size: 15px;
position: absolute;
padding-left: 3%;
padding-right: 10%;
/* background: red; */
bottom: 20%;
width: 55%;
}

.text>h2 {
font-size: 75px;

text-shadow: 2px 2px 20px black;
}

.text>button {
width: 27%;
height: 30px;
border-radius: 11px;
color: #e1bee7;
cursor: pointer;
font-weight: 600;
/* text-shadow: 2px 2px 20px black; */
border: 2px solid #7b1fa27d;
background-color: #7b1fa212;
margin-top: 3%;
}

.text>p {
font-size: 14px;
color: white;
margin-top: 1%;
line-height: 22px;
text-shadow: 2px 2px 13px black;
}

.more-info {
display: flex;
flex-direction: row;
justify-content: space-evenly;
align-items: center;
}

.more-info>h5 {
background: yellowgreen;
padding: 3px;
border-radius: 11px;
}

.more-info>span {
margin-right: 4px;
text-shadow: 2px 2px 5px black;
}

/* Number text (1/3 etc) */
.numbertext {
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

.dot-class {
position: absolute;

display: flex;

width: 100%;

bottom: 9%;
justify-content: center;
}

.dot {
filter: drop-shadow(2px 4px 6px black);
height: 4.5px;
width: 45px;
margin: 0px 15px;
background-color: #ffffff24;
border: 0.5px solid transparent;
border-radius: 5px;
opacity: 16.3;
transition: background-color -0.5s linear;
}


.active {
background-color: #7b1fa2;
border: 1px solid transparent;
}

/* Fading animation */
.fade {
animation-name: fade;
animation-duration: 1.5s;
}

@keyframes fade {
from {
opacity: 0.4;
}

to {
opacity: 1;
}
}

#section-2-h1 {
color: white;

text-align: center;

padding: 1%;

font-weight: 700;

font-size: xxx-large;

text-shadow: 0px 0px 41px #ffffffc9;
}

.movie-grid {
max-width: 100%;
height: auto;
display: grid;
grid-template-columns: repeat(5, 1fr);
/* grid-template-rows: repeat(5,0fr); */
color: white;
column-gap: 1%;
row-gap: 2%;
padding: 2%;
margin-top:30px;
align-items: center;
align-content: space-evenly;
}

.movie-thumbnail>img {
object-fit: fill;

width: 100%;

cursor: pointer;

border-radius: 8px;

height: fit-content;
}

.movie-thumbnail {
position: relative;
/* height: auto; */
}

#rate-view {
position: absolute;
bottom: 0;
padding: 3%;
width: 100%;
text-align: center;
background: #00000045;
}
#rate-view strong{

}

#rate-view>b {
color: #ffd700;
font-weight: 700;
text-shadow: 0px -3px 25px #ffd700;
}
<?php
$sql = "SELECT * FROM home_content";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query : " . $connection->connect_error);
}
$hover_count = 1;
//read data of each row

while ($row = $result->fetch_assoc()) {
    $new_star = '#star' . (string)$hover_count;
    $hover_id = '#navigate-hover-' . (string)$hover_count;
    echo "$hover_id{
position: absolute;
display: flex;
background: #00000045;
width: -webkit-fill-available;
padding: 1%;
cursor: grab;
height: -webkit-fill-available;
flex-direction: column;
align-items: center;
visibility: hidden;
}



$hover_id button{
width: 50%;
position: relative;
top: 35%;
margin-top: 4%;
height: 37px;
color: white;
font-weight: 600;
cursor: pointer;
background: #a03db1;
border: none;
box-shadow: 0px 0px 10px 4px #a03db18c;
border-radius: 26px;
text-align: center;
text-decoration: none;
}
$hover_id a{
    width: 50%;
    position: relative;
    top: 35%;
    margin-top: 4%;
    height: 37px;
    color: white;
    font-weight: 600;
    cursor: pointer;
    background: #a03db1;
    border: none;
    box-shadow: 0px 0px 10px 4px #a03db18c;
    border-radius: 26px;
    text-align: center;
    text-decoration: none;
    }
    $new_star {
        display: flex;
        position: relative;
        justify-content: space-evenly;
        padding: 3%;
        visibility: hidden;
   
        }
        
        $new_star>button {
        width: 12%;
        border-radius: 100%;
        height: 4vh;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        border:none;
        background: white;
        }
        $new_star button:hover{
            background-color:#ffd700 ;
            color: white;
            box-shadow: 0px -3px 25px #ffd700;
            }

";


    $hover_count = $hover_count + 1;
}




?>


.container-nav:nth-child(9){
width: 100%;
}


.dropdown{
margin-top: -5%;
margin-left: 100%;
width: 100%;
height: 30px;
outline: none;
background-color: #4CAF50;
<!-- position: relative; -->
padding: 2%;
border: none;
border-radius: 5px;
text-align: center;
cursor: pointer;

}

.dropdown a{
text-decoration: none;
color: #fff;
font-size: 14px;
}


/* The container - needed to position the dropdown content */
.dropdown {
position: relative;
display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content :hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
display: block;
}