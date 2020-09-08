<?php include 'top.inc.php'?>
<html>
<!--This is the start of the body to the header -->
<head>

    <link rel="stylesheet" type="text/css" href="excerciseStyleSheet.css">
</head>
<!--This is the start of the body to the header -->
<body>
<header><h1>Time</h1></header>
<!--This is the navigation setup -->
<nav>
    <?php include 'nav.inc.php';echo $timePage?>
</nav>
<!--This is the main window-->
<section>
<p>Hello, today is </p><?=date('F jS \of Y.'); ?>.
<br>
<p>The Time Is : </p><?=date('h:i:s A'); ?>.
<br>
    </section>
<!--This is the footer -->
<footer>
    <address>
        Copyright:The man in the chair<br>
        Author:Robert<br>
        Exercise:Number One<br>
    </address>
</footer>
</body>
</html>