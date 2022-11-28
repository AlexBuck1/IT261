<?php
// this will be our people-view page, which starts with our include, pointing to our config, BUT NOT out header

include('config.php');

// is our get set - is it isset?

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

// we will now select from the table when people id = id

$sql = 'SELECT * FROM players WHERE player_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $age = stripslashes($row['age']);
        $position = stripslashes($row['position']);
        $jersey_no = stripslashes($row['jersey_no']);
        $fact= stripslashes($row['fact']);
        $info = stripslashes($row['info']);
        $feedback = '';
    } // close while


} else { // end if statement
    $feedback = 'There is a problem!!';

} // end else

include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>Welcome to my Player View Pgae</h1>
    <h2>Introducing you to <?php echo $first_name;?>'s Page</h2>
    <ul>
        <?php
            echo '
            <li><b>First Name: </b>'.$first_name.'</li>
            <li><b>Last Name: </b>'.$last_name.'</li>
            <li><b>Age: </b>'.$age.'</li>
            <li><b>Position: </b>'.$position.'</li>
            <li><b>Jersey #: </b>'.$jersey_no.'</li>
            <li><p>'.$info.'</p></li>
            ';
        ?>
    </ul>
    <p><a href="people.php">Return to the people page!</a></p>


</main>

<aside>
    <figure>
    <img src="./images/player<?php echo $id;?>.jpg" alt="<?php echo $first_name;?>">
    <figcaption>
        <?php
            echo '
                '.$first_name.' '.$last_name.', '.$position.' #'.$jersey_no.'
            
            ';
        ?>
    </figcaption>
    </figure>
    <p><i><?php
        echo $fact;
    ?></i></p>
</aside>

<?php
// we are going to release the server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);

?>





</div>

<?php
include('./includes/footer.php');