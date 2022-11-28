<?php
include('config.php');
include('./includes/header.php');
?>
<div id="wrapper">
<main>
    <h1>Welcome to my Mariners Database</h1>
<?php
$sql = 'SELECT * FROM players';
// now, we have to connect to our database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we are asking if the number of rows is greater than 0


if(mysqli_num_rows($result) > 0) {
// we will be reading those rows with a while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo '
        <h2>Information about '.$row['first_name'].' '.$row['last_name'].'</h2>
        <ul>
        <li><b>Age:</b> '.$row['age'].'</li>
        <li><b>Position:</b> '.$row['position'].'</li>
        <li><b>Jersey #:</b> '.$row['jersey_no'].'</li>
        </ul>
        <p>For more information about '.$row['first_name'].', click <a href="people-view.php?id='.$row['player_id'].' ">here</a></p>
        ';
    } // end while






} else { // end if number of rows is greater than 0
    echo 'Nobody is home!';
}

// we are going to release the server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);

?>
</main>
<aside>
    <h1>Random Mariner:</h1>
    <?php
        echo random_pics($players);
    ?>
</aside>

</div>
<!-- end wrapper -->
<?php
include('./includes/footer.php');