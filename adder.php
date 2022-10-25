<html>
    <head>
        <title>My Adder Assignment</title>
        <style>
        </style>
    </head>
<body>
    <h1>Adder.php</h1> 
    <form action="" method="post">
    <label>Enter the first number:</label>
    <input type="text" name="num1"><br>
    <label>Enter the second number:</label>
    <input type="text" name="num2"><br>
    <input type="submit" value="Add Em!!"> 
    </form>
<?php     //adder-wrong.php

if (isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;
    echo '<h2>You added '.$num1.' and '.$num2.'</h2>';
    echo '<p style="color:red;"> and the answer is <br> '.$myTotal .'!</p>';
    echo '<p><a href="">Reset page</a></p>';
};
?>

<!-- HTML was very unorganized, so organized it. it was also below the php so I moved it above-->
<!-- wrong opening form tag-->
<!-- form had no post method-->
<!-- missing opening label tag-->
<!-- changed Num1 to num1-->
<!-- opening label tag was a closing tag-->
<!-- missing closing label for num2-->
<!-- missing end quote for submit value-->
<!-- $myTotal had "-=" instead of "="-->
<!-- changed $Num2 to $num2-->
<!-- missing closing h2 tag-->
<!-- changed double quotes to single-->
<!-- added single quotes to .$num2.-->
<!-- inline style tags need to be within p tags-->
<!-- double quotes were being used for myTotal-->
<!-- missing period to embed myTotal-->
<!-- double quotes being used at the end-->
<!-- missing closing p tag-->
<!-- missing semi colon to end 3rd echo-->
<!-- missing semi colon to close bracket-->
<!-- missing closing php tag-->
<!-- ';{?> was on the last line--> 


</body>
</html>