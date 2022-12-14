<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1><a href="index.php">Alex's Portal Page</a></h1>
<h2>The navigation below represents our BIG Assignments</h2>
<div id="wrapper">
    <nav>
        <ul>
        <li><a href="website/daily.php">Switch</a></li>
        <li><a href="adder.php">Troubleshoot</a></li>
        <li><a href="calculator.php">Calculator</a></li>
        <li><a href="">Email</a></li>
        <li><a href="">Database</a></li>
        <li><a href="">Gallery</a></li>
        </ul>
    </nav>
    <main>
        <h2>About Alex</h2>
        <img class="right" src="images/alex.jpeg" alt="Photo of Alex">
        <p> My name is Alex Buck, I am extrememly into sports, music, and fitness. I recently started my journey in the web programming world last summer. I live in Olympia, Washington with my two roommates and my dog, Diggs. I started this web development program because I wanted to give myself a better opportunity for job stability. I previously graduated from Central Washington University with a degree in Tourism Management. This was obviously greatly affected by the pandemic, and I was forced to find new options, so here I am!</p>
        

    </main>
    <aside>
        <h2>Weekly Class Exercises</h2>
        <h3>Week 2</h3>
        <ul>
            <li><a href="weeks/week2/var.php">var.php</a></li>
            <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
            <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
            <li><a href="weeks/week2/currency.php">currency.php</a></li>
            <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
        </ul>
        <br>
        <h3>Week 3</h3>
        <ul>
            <li><a href="weeks/week3/date.php">date.php</a></li>
            <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
            <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
            <li><a href="weeks/week3/if.php">if.php</a></li>
            <li><a href="weeks/week3/index.php">index.php</a></li>
            <li><a href="weeks/week3/switch.php">switch.php</a></li>
        </ul>
        <br>
        <h3>Week 4</h3>
        <ul>
            <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
            <li><a href="weeks/week4/form1.php">form1.php</a></li>
            <li><a href="weeks/week4/form2.php">form2.php</a></li>
            <li><a href="weeks/week4/form3.php">form3.php</a></li>
            <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
            <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
        </ul>
        <br>
        <h3>Week 5</h3>
        <ul>
            <li><a href="weeks/week5/currency1.php">currency1.php</a></li>
            <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
            <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
            <li><a href="weeks/week5/null.php">null.php</a></li>
        </ul>
        <br>
        <h3>Week 6</h3>
        <ul>
            <li><a href="weeks/week6/form.php">form.php</a></li>
            <li><a href="weeks/week6/form2.php">form2.php</a></li>
            <li><a href="weeks/week6/functions.php">functions.php</a></li>
        </ul>
        <h3>Week 7</h3>
        <ul>
            <li><a href="weeks/week7/form3.php">form3.php</a></li>
            <li><a href="weeks/week7/strings.php">strings.php</a></li>
            <li><a href="weeks/week7/pictures.php">pictures.php</a></li>
            <li><a href="weeks/week7/rand.php">rand.php</a></li>
        </ul>
        <h3>Week 8</h3>
        <ul>
            <li><a href="weeks/week8/people.php">people.php</a></li>
            <li><a href="weeks/week8/people-view.php">people-view.php</a></li>
        </ul>
        <h3>Week 9/10</h3>
        <ul>
            <li><a href="weeks/week9/register.php">register.php</a></li>
        </ul>
    </aside>
    <img src="images/mamp_setup.png" alt="MAMP Setup">
    <img src="images/php_error.png" alt="PHP Errors">
</div>
<!-- end wrapper -->

<footer>
    <ul>
      <li>Copyright &copy;
          2022</li>
      
      <li><a href="../index.php">Web Design by Alex Buck</a></li>
      <li><a id="html-checker" href="#">HTML Validation</a></li>
      <li><a id="css-checker" href="#">CSS Validation</a></li>
      </ul>
      
      <script>
              document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
              document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
      </script>

  </footer>
</body>
</html>