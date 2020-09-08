<?php include 'top.inc.php' ?>

<header>
    Excercise Two
</header>


<?php include 'nav.inc.php';
echo $results ?>
<?php
$firstNameErr = $lastNameErr = $genderErr = $birthDateErr = "";
$firstName = $lastName = $gender = $birthDate = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(form_input_security($_POST["firstName"]))) {
        $firstNameErr = "First Name Is Required";
    } else {
        $firstName = form_input_security($_POST["firstName"]);
    }
    if (empty(form_input_security($_POST["lastName"]))) {
        $lastNameErr = "Last Name Is Required";
    } else {
        $lastName = form_input_security($_POST["lastName"]);
    }
    if (empty(form_input_security($_POST["gender"]))) {
        $genderErr = "Gender Is Required";
    } else {
        $gender = form_input_security($_POST["gender"]);
    }

    if (empty(form_input_security($_POST["birthDate"]))) {
        $birthDateErr = "Birthdate Is Required";
    } else {
        $birthDate = form_input_security($_POST["birthDate"]);


    }


}

function form_input_security($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<br>
<br>
<section style="width:500px;height:200px;border:2px solid black;">
    <?php
    echo '<b>First name:</b>';
    echo $_POST["firstName"];
    echo "<span class=\"error\">" . $firstNameErr . "</span>";
    echo "<br>";
    echo "<hr>";
    echo '<b>Last Name:</b>';
    echo "<span class=\"error\">" . $lastNameErr . "</span>";
    echo $_POST["lastName"];
    echo "<br>";
    echo "<hr>";

    echo '<b>Gender:</b>';
    echo "<span class=\"error\">" . $genderErr . "</span>";
    echo $_POST["gender"];
    echo "<br>";
    echo "<hr>";


    echo '<b>Birthdate:</b>';
    echo "<span class=\"error\">" . $birthDateErr . "</span>";
    echo $_POST["birthDate"];
    echo "<hr>";

    $date1 = date("y-m-d");
    $date2 = $birthDate;


    $diff = abs(strtotime($date2) - strtotime($date1));
    $years = floor($diff / (365 * 60 * 60 * 24));
    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    printf('<b>Age:</b>');
    printf("%d years, %d months, %d days\n", $years, $months, $days);
    echo "<br>";
    echo "<br>";
    ?>
    <button type="submit" id="submitButton" onclick="window.location.href='excercise2Calculations.php';">Back</button>

</section>
</body>


<?php include 'bottom.inc.php' ?>
</html>