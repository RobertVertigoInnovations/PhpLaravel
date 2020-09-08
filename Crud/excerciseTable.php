<?php include 'top.inc.php'?>
<html>
<!--This is the start of the body to the header -->
<head>

    <meta charset="UTF-8">
    <title> Excercise One</title>
    <link rel="stylesheet" type="text/css" href="excerciseStyleSheet.css">
</head>
<!--This is the start of the body to the header -->
<body>
<header>
    <h1> Excercise One</h1>
</header>
<!--This is the navigation setup -->
<nav>
    <?php include 'nav.inc.php';echo $tablePage?>
</nav>

<!--This is the main window-->

    <section>
        <table>
            <tr>
            <th>x</th>
            <th>y</th>
            </tr>
            <?php
            for ($x = 0; $x <=1000; $x++) {
                $y=$x*$x;
                if($x % 2 ==0)
                {
                    echo("<tr class=\"oddTable\">
                            <td class=\"oddTable\">
                                $x</td><td>$y</td></tr>");
                }
                else
                {
                    echo("<tr class=\"evenTable\">
                            <td class=\"evenTable\">
                               $x</td><td>$y</td></tr>");
                }
            }
            ?>
        </table>
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