<?php 

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
        $photo = 'geno.png';
        $alt = 'Eugenio Suarez';
        break;
    case 'Monday':
        $sea = 'Sam Haggerty';
        $description = 'Samuel Onofrio Haggerty is an American professional baseball infielder for the Seattle Mariners of Major League Baseball. He previously played for the New York Mets. Haggerty played extremely well for the Mariners, tallying a .256 batting average with 23 RBI\'s and 13 stolen bases. He was a key pinch runner in many close-game situations as well.';
        $photo = 'swaggerty.png';
        $alt = 'Sam Haggerty';
        break;
    case 'Tuesday':
        $sea = 'Ty France';
        $description = 'Tyler Lawrence France is an American professional baseball first baseman for the Seattle Mariners of Major League Baseball. He previously played for the San Diego Padres. In the 2022 season with the Mariners, Ty batted .274 with 20 homeruns and 83 RBI\s, earning him a spot on the American League All Star roster.';
        $photo = 'france.png';
        $alt = 'Ty France';
        break;
    case 'Wednesday':
        $sea = 'Luis Castillo';
        $description = 'Luis Miguel Castillo is a Dominican professional baseball pitcher for the Seattle Mariners of Major League Baseball. He made his MLB debut in 2017 with the Cincinnati Reds. Castillo is a two-time All-Star. He was acquired by the Seattle Mariners in 2022 at the trade deadline, and was signed to a 5 year extension just about a month later. His nickname is \'La Piedra\'.';
        $photo = 'castillo.jpg';
        $alt = 'La Piedra';
        break;
    case 'Thursday':
        $sea = 'Mitch Haniger';
        $description = 'Mitchell Evan Haniger is an American professional baseball outfielder for the Seattle Mariners of Major League Baseball. He previously played for the Arizona Diamondbacks. A collegiate All-American in 2012, Haniger was originally signed by the Milwaukee Brewers after selection in the supplemental section of the first round of the 2012 MLB draft. He was traded to the Diamondbacks in 2014 while still a minor league prospect. He made his MLB debut with the Diamondbacks in 2016.';
        $photo = 'haniger.png';
        $alt = 'Mitch Haniger';
        break;
    case 'Friday':
        $sea = 'Julio Rodriguez';
        $description = 'Julio Yarnel Rodríguez (born December 29, 2000), nicknamed "J-Rod Show", is a Dominican professional baseball outfielder for the Seattle Mariners of Major League Baseball (MLB). Rodríguez signed with the Mariners as an international free agent in 2017, and made his MLB debut in 2022. During a game on August 23 against the Washington Nationals, Rodríguez hit his 20th home run of the 2022 season, making him the sixth player in Seattle Mariners history to join the 20 – 20 club, and the fourth player in MLB history to do so in their first MLB season.';
        $photo = 'julio.png'; 
        $alt = 'JROD Show';
        break;
    case 'Saturday':
        $sea = 'JP Crawford';
        $description = 'John Paul Crawford (born January 11, 1995) is an American professional baseball shortstop for the Seattle Mariners of Major League Baseball (MLB). The 16th pick overall in the 2013 MLB draft, Crawford began his career with the Philadelphia Phillies as an exceptional defensive infielder and was considered the organization\'s top prospect for much of his rise through their minor league system. He was promoted to the major league ball club, in 2017, playing at his natural position and third base. Prior to the 2019 season, Crawford was traded to the Mariners. ';
        $photo = 'jp.png';
        $alt = 'JP Crawford';
        break;
}

include "includes/header.php" ?>
    <div id="wrapper" class="<?php echo $sea; ?>">
        <main>
            <h1><?php echo $today; ?> is for <?php echo $sea; ?></h1>
            <p><?php echo $description; ?></p>
        </main>
        
        <aside>
            <div id="image">
                <img src="./images/<?php echo $photo; ?>" alt="<?php echo $alt; ?>" >
            </div>
            
        </aside>

        <div id="listWrapper">
            <h3>Mariners Players</h3>
            <ul>
                <li><a style="color:<?php 
                if($today == 'Sunday') {
                    echo 'orange';
                } else {
                    echo 'blue';
                };
                ?>" href="daily.php?today=Sunday">Sunday</li>
               
               <li><a style="color:<?php 
                if($today == 'Monday') {
                    echo 'green';
                } else {
                    echo 'blue';
                };
                ?>" href="daily.php?today=Monday">Monday</li>

                <li><a style="color:<?php 
                if($today == 'Tuesday') {
                    echo 'black';
                } else {
                    echo 'blue';
                };
                ?>" href="daily.php?today=Tuesday">Tuesday</li>

                <li><a style="color:<?php 
                if($today == 'Wednesday') {
                    echo 'yellow';
                } else {
                    echo 'blue';
                };
                ?>" href="daily.php?today=Wednesday">Wednesday</li>

                <li><a style="color:<?php 
                if($today == 'Thursday') {
                    echo 'pink';
                } else {
                    echo 'blue';
                };
                ?>" href="daily.php?today=Thursday">Thursday</li>
                
                <li><a style="color:<?php 
                if($today == 'Friday') {
                    echo 'pruple';
                } else {
                    echo 'blue';
                };
                ?>" href="daily.php?today=Friday">Friday</li>

                <li><a style="color:<?php 
                if($today == 'Saturday') {
                    echo 'red';
                } else {
                    echo 'blue';
                };
                ?>" href="daily.php?today=Saturday">Saturday</li>
            </ul>

        </div> <!--End listWrapper-->
<?php include "includes/footer.php" ?>