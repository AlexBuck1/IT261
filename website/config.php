<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Homepage of our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php' :
    $title = 'Daily page of our Website Project';
    $body = 'daily inner';
    break;

    case 'project.php' :
    $title = 'Project page of our Website Project';
    $body = 'project inner';
    break;

    case 'contact.php' :
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';
    break;

    case 'thx.php' :
        $title = 'Thank You page of our Website Project';
        $body = 'thx inner';
        break;

    case 'gallery.php' :
    $title = 'Gallery page of our Website Project';
    $body = 'gallery inner';
    break;
}
// our navigational array!
$nav = array(
  'index.php' => 'Home',
  'about.php' => 'About',
  'daily.php' => 'Daily',
  'people.php' => 'People',
  'contact.php' => 'Contact',
  'gallery.php' => 'Gallery'
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a style="color:green;" href=" '.$key.' "> '.$value.' </a></li>';
        }


    } // end for each
return $my_return;


} // end function

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}
$day_array = array(
    "Sunday" => "Sunday",
    "Monday" => "Monday",
    "Tuesday" => "Tuesday",
    "Wednesday" => "Wednesday",
    "Thursday" => "Thursday",
    "Friday" => "Friday",
    "Saturday" => "Saturday",
);

// switch

switch($today){
    case 'Sunday':
        $sea = 'Eugenio Suárez';
        $description = 'Eugenio Alejandro Suárez is a Venezuelan professional baseball infielder for the Seattle Mariners of Major League Baseball. He previously played for the Detroit Tigers and Cincinnati Reds. Suárez was an All-Star in 2018. In his first season with the Mariners, Suárez hit 31 homeruns with a .236 batting average.';
        $photo = 'suare.jpg';
        $alt = 'Eugenio Suarez';
        break;
    case 'Monday':
        $sea = 'Sam Haggerty';
        $description = 'Samuel Onofrio Haggerty is an American professional baseball infielder for the Seattle Mariners of Major League Baseball. He previously played for the New York Mets. Haggerty played extremely well for the Mariners, tallying a .256 batting average with 23 RBI\'s and 13 stolen bases. He was a key pinch runner in many close-game situations as well.';
        $photo = 'swagg.jpg';
        $alt = 'Sam Haggerty';
        break;
    case 'Tuesday':
        $sea = 'Ty France';
        $description = 'Tyler Lawrence France is an American professional baseball first baseman for the Seattle Mariners of Major League Baseball. He previously played for the San Diego Padres. In the 2022 season with the Mariners, Ty batted .274 with 20 homeruns and 83 RBI\s, earning him a spot on the American League All Star roster.';
        $photo = 'franc.jpg';
        $alt = 'Ty France';
        break;
    case 'Wednesday':
        $sea = 'Luis Castillo';
        $description = 'Luis Miguel Castillo is a Dominican professional baseball pitcher for the Seattle Mariners of Major League Baseball. He made his MLB debut in 2017 with the Cincinnati Reds. Castillo is a two-time All-Star. He was acquired by the Seattle Mariners in 2022 at the trade deadline, and was signed to a 5 year extension just about a month later. His nickname is \'La Piedra\'.';
        $photo = 'casti.jpg';
        $alt = 'La Piedra';
        break;
    case 'Thursday':
        $sea = 'Mitch Haniger';
        $description = 'Mitchell Evan Haniger is an American professional baseball outfielder for the Seattle Mariners of Major League Baseball. He previously played for the Arizona Diamondbacks. A collegiate All-American in 2012, Haniger was originally signed by the Milwaukee Brewers after selection in the supplemental section of the first round of the 2012 MLB draft. He was traded to the Diamondbacks in 2014 while still a minor league prospect. He made his MLB debut with the Diamondbacks in 2016.';
        $photo = 'hanig.jpg';
        $alt = 'Mitch Haniger';
        break;
    case 'Friday':
        $sea = 'Julio Rodriguez';
        $description = 'Julio Yarnel Rodríguez (born December 29, 2000), nicknamed "J-Rod Show", is a Dominican professional baseball outfielder for the Seattle Mariners of Major League Baseball (MLB). Rodríguez signed with the Mariners as an international free agent in 2017, and made his MLB debut in 2022. During a game on August 23 against the Washington Nationals, Rodríguez hit his 20th home run of the 2022 season, making him the sixth player in Seattle Mariners history to join the 20 – 20 club, and the fourth player in MLB history to do so in their first MLB season.';
        $photo = 'julio.jpg'; 
        $alt = 'JROD Show';
        break;
    case 'Saturday':
        $sea = 'JP Crawford';
        $description = 'John Paul Crawford (born January 11, 1995) is an American professional baseball shortstop for the Seattle Mariners of Major League Baseball (MLB). The 16th pick overall in the 2013 MLB draft, Crawford began his career with the Philadelphia Phillies as an exceptional defensive infielder and was considered the organization\'s top prospect for much of his rise through their minor league system. He was promoted to the major league ball club, in 2017, playing at his natural position and third base. Prior to the 2019 season, Crawford was traded to the Mariners. ';
        $photo = 'crawf.jpg';
        $alt = 'JP Crawford';
        break;
}


// my form's php



$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$player = '';
$games = '';
$privacy = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$player_err = '';
$games_err = '';
$privacy_err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
$first_name_err = 'Please fill out your first name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_err = 'Please fill out your last name';
    } else {
        $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
    $email_err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
}

if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if 

if(empty($_POST['player'])) {
    $player_err = 'What, no favorite Mariner?';
    } else {
        $player = $_POST['player'];
}

if(empty($_POST['games'])) {
    $games_err = 'Please select an amount';
    } else {
        $games = $_POST['games'];
}

if(empty($_POST['privacy'])) {
    $privacy_err = 'Please check privacy';
    } else {
        $privacy = $_POST['privacy'];
}

//wines function

function my_player($player) {
    $my_return = '';

    if (!empty($_POST['player'])) {
        $my_return = implode(',', $_POST['player']);
        } else {
            $player_err = 'Please select a player!';
        }

    return $my_return;



} // end function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['player'],
$_POST['games'],
$_POST['privacy'])) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test Email on' .date('m/d/y, h i A');
$body = '
First Name : '.$first_name.' '.PHP_EOL.'
Last Name : '.$last_name.' '.PHP_EOL.'
Email : '.$email.' '.PHP_EOL.'
Phone : '.$phone.' '.PHP_EOL.'
Games : '.$games.' '.PHP_EOL.'
Player : '.my_player($player).' '.PHP_EOL.'
';

$headers = array(
    'From' => 'noreply@mystudentswa.com'
);

if(!empty($first_name && 
$last_name && 
$email &&  
$phone && 
$games && 
$player)) {
    mail($to, $subject, $body, $headers);
    header("Location:thx.php");
}
} // end isset

} // end server request method

$players[0] = 'player1';
$players[2] = 'player2';
$players[3] = 'player3';
$players[4] = 'player4';
$players[5] = 'player5';
$players[6] = 'player6';
$players[7] = 'player7';
$players[8] = 'player8';
$players[9] = 'player9';
$players[10] = 'player10';

// random photos....
$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5',
);

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

function random_pics($photos) {
    $i = rand(0, 10);
    $selected_image = ''.$photos[$i].'.jpg';
    return '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}