<?php
// what is the isset function - is asking if something has been set?

//$variable = 'This is our variable';
//if(isset($variable)) {
//    echo 'Variable has been set';
//} else 
//echo 'Variable has been set!';

//echo '<br>';

//if(isset($_GET['today'])) {
//    echo 'Today has been set';
//} else {
//    echo 'NOT!!!!!!';
//}

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Monday' :
        $coffee = '<h2>Monday is our Pumpkin Spice Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p>A <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice.</p>';
        break;
    case 'Tuesday' :
        $coffee = '<h2>Tuesday is our Green Tea Latte Day!</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'Green Tea Latte';
        $content = '<p>A <b>Green Tea Latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.</p>';
        break;
    case 'Wednesday' :
        $coffee = '<h2>Wednesday is our Regular Joe Day!</h2>';
        $pic = 'coffee.jpg';
        $alt = 'Regular Coffee';
        $content = '<p>A <b>Regular Coffee</b> is a coffee with cream (or milk) and two sugars.</p>';
        break;
    case 'Thursday' :
        $coffee = '<h2>Thursday is our Latte Day!</h2>';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = '<p><b>Caffè latte</b>, often shortened to just latte in English, is a coffee beverage of Italian origin made with espresso and steamed milk. Variants include the chocolate-flavored mocha or replacing the coffee with another beverage base such as masala chai (spiced Indian tea), mate, matcha, turmeric, or rooibos; alternatives to milk, such as soy milk or almond milk, are also used. </p>';
        break;
    case 'Friday' :
        $coffee = '<h2>Friday is our White Chocolate Mocha Day!</h2>';
        $pic = 'white-mocha.jpg';
        $alt = 'White Chocolate Mocha';
        $content = '<p>An espresso meets white chocolate sauce, milk and ice, and then is finished off with sweetened whipped cream to create this supreme white chocolate delight.</p>';
        break;
    case 'Saturday' :
        $coffee = '<h2>Saturday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = '<p>An <b>Americano</b> is made by pouring hot water over one or two espresso shots, resulting in a drink of similar volume and strength to regular coffee. The key to an Americano is that it starts with espresso and adopts the flavors and aromas of the espresso, but with a less powerful taste.</p>';
        break;
    case 'Sunday' :
        $coffee = '<h2>Sunday is our Frappuccino Day!</h2>';
        $pic = 'frapp.jpg';
        $alt = 'Frappuccino';
        $content = '<p>The frappé is a popular Greek drink made with instant coffee, and <b>Frappuccino</b> is a Starbucks trademark. But in the US, these drinks are essentially the same thing: frothy blended coffee often flavored with caramel or vanilla.</p>';
        break;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>

        * {
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        #wrapper {
            width:940px;
            margin:20px auto;
        }
        h1, h2, img {
            margin-bottom: 10px;
        }
        p {
            margin-bottom:20px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <h1>My Wonderful Switch Classwork Exercise</h1>
        <?php
            echo $coffee;
        ?>
        <img src="../images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
        <?php echo $content ?>
        <h2>Check out our Daily Specials</h2>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>


    </div>
    <!-- end wrapper -->
</body>
</html>