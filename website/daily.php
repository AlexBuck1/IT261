<?php 
include('config.php');
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