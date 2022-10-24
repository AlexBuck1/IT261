<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Our Arithmetic Form</h1>
    <form action="" method="post">
<fieldset>
    <label>Name</label>
    <input type="text" name="name">

    <label>Phone</label>
    <input type="tel" name="phone">

    <label>How many Lattes?</label>
    <input type="number" name="lattes">

    <label>How many Cappuccinos?</label>
    <input type="number" name="cappuccino">

    <label>How many Americanos?</label>
    <input type="number" name="americano">

    <label>Special Requests</label>
    <textarea name="comments"></textarea>

    <input type="submit" value="Place my order">
</fieldset>
    </form>
    <p><a href="">Reset</a></p>

    <?php 
    // name, phone, lattes, cappuccinos, americanos, comments
    date_default_timezone_set('America/Los_Angeles');

    $time = date('H:i');

    if (isset($_POST['name'],
                $_POST['phone'],
                $_POST['lattes'],
                $_POST['cappuccino'],
                $_POST['americano'],
                $_POST['comments'])) { 

                    //add my if statement regarding fields that are empty
        if (empty($_POST['name']&&
                    $_POST['phone']&&
                    $_POST['lattes']&&
                    $_POST['cappuccino']&&
                    $_POST['americano'])) {//start nest

            echo '<p class="error">Please fill out all fields!</p>';

        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $lattes = $_POST['lattes'];
            $cappuccino = $_POST['cappuccino'];
            $americano = $_POST['americano'];
            $comments = $_POST['comments'];
            $total = $lattes + $cappuccino + $americano;


// if and elseif statement regarding our time
            if ($time <= 11) {
                $time = "Good Morning";

            } elseif ($time <= 17) {
                $time = "Good Afternoon";

            } else {
                $time = "Good Evening";
            }
            echo '<br>';

            echo '
            <div class="box">
            <h2> '.$time.' '.$name.'</h2>
            <p>We have texted your order to this <b>number</b> '.$phone.' totaling '.$total.' beverages:</p>
            <ul>
            <li><b>Lattes:</b> '.$lattes.'</li>
            <li><b>Cappuccino:</b> '.$cappuccino.'</li>
            <li><b>Americano:</b> '.$americano.'</li>
            </ul>
            <p>And this is your special <b>request</b>: '.$comments.'</p>
            <p>Thank you for choosing our establishment!</p>
            </div>
            ';

        }//end else

    }//end isset

    ?>

</body>
</html>