<?php
include('config.php');
include('includes/header.php'); ?>

<?php
$people['Luis_Castillo'] = 'casti_<b>Luis Castillo</b> is a Dominican professional baseball pitcher for the Seattle Mariners of Major League Baseball. He made his MLB debut in 2017 with the Cincinnati Reds. Castillo is a two-time All-Star. He was acquired by the Seattle Mariners in 2022 at the trade deadline, and was signed to a 5 year extension just about a month later. His nickname is \'La Piedra\'.';
$people['Ty_France'] = 'franc_<b>Ty France</b> is an American professional baseball first baseman for the Seattle Mariners of Major League Baseball. He previously played for the San Diego Padres. In the 2022 season with the Mariners, Ty batted .274 with 20 homeruns and 83 RBIs, earning him a spot on the American League All Star roster.';
$people['Julio_Rodriguez'] = 'julio_<b>Julio Rodriguez</b> (born December 29, 2000), nicknamed "J-Rod Show", is a Dominican professional baseball outfielder for the Seattle Mariners of Major League Baseball (MLB). Rodríguez signed with the Mariners as an international free agent in 2017, and made his MLB debut in 2022. He is the 2022 AL Rookie of the Year.';
$people['Eugenio_Suarez'] = 'suare_<b>Eugenio Suarez</b> is a Venezuelan professional baseball infielder for the Seattle Mariners of Major League Baseball. He previously played for the Detroit Tigers and Cincinnati Reds. Suárez was an All-Star in 2018. In his first season with the Mariners, Suárez hit 31 homeruns with a .236 batting average.';
$people['JP_Crawford'] = 'crawf_<b>JP Crawford</b> is an American professional baseball shortstop for the Seattle Mariners of Major League Baseball (MLB). The 16th pick overall in the 2013 MLB draft, Crawford began his career with the Philadelphia Phillies as an exceptional defensive infielder and was considered the organization\'s top prospect for much of his rise through their minor league system. He was promoted to the major league ball club, in 2017, playing at his natural position and third base. Prior to the 2019 season, Crawford was traded to the Mariners.';

// $name                      $image
// $key                         $table
?>
<div id="wrapper">

    <table>
        <?php foreach($people as $name => $image) : ?>
            <tr>
                <td><img src="images/<?php echo substr($image, 0, 5) ; ?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ; ?>"></td>
                <td><?php echo str_replace('_', ' ', $name) ; ?></td>
                <td><?php echo substr($image, 6); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php
include('includes/footer.php');