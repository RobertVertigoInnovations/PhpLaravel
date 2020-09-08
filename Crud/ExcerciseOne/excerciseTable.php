<?php include 'top.inc.php' ?>
<header>
    <h1> Excercise One</h1>
</header>
<!--This is the navigation setup -->

<?php include 'nav.inc.php';
echo $tablePage ?>
<!--This is the main window-->
<section><h2 style="text-align:center;">Table</h2>
    <table>
        <tr>
            <th>x</th>
            <th>y</th>
        </tr>
        <?php
        for ($x = 0; $x <= 1000; $x++) {
            $y = $x * $x;
            if ($x % 2 == 0) {
                echo("<tr class=\"oddTable\">
                            <td class=\"oddTable\">
                                $x</td><td>$y</td></tr>");
            } else {
                echo("<tr class=\"evenTable\">
                            <td class=\"evenTable\">
                               $x</td><td>$y</td></tr>");
            }
        }
        ?>
    </table>
</section>

<!--This is the footer -->
<?php include 'bottom.inc.php'; ?>
</body>
</html>