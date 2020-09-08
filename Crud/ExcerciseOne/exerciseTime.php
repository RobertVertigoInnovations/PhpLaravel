<?php include 'top.inc.php' ?>
<!--This is the start of the body to the header -->
<body>
<header>
    <h2>Time</h2>
</header>
<!--This is the navigation setup -->
<?php include 'nav.inc.php';
echo $timePage ?>
<!--This is the main window-->
<section><h2 style="text-align:center;">Time Excercise</h2>
    <p style="text-align:center">Hello, today is <?= date('F <\s\up>jS </\s\up>\of Y.'); ?><br>
        The Time Is : <?= date('h:i:s A'); ?>.</p>
</section>
<!--This is the footer -->
<?php include 'bottom.inc.php'; ?>
</body>
</html>