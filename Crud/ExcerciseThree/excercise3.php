<?php include 'top.inc.php' ?>

<header>
    <h1>Excercise Three</h1>
</header>

<?php include 'nav.inc.php';
echo $mainPage ?>

<?php

$firstNameErr = $lastNameErr = $genderErr = $birthDateErr = $usersTitleErr = "";
$firstName = $lastName = $gender = $birthDate = $usersTitle = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(form_input_security($_POST["userTitle"]))) {
        $usersTitleErr = "First Name Is Required";
    } else {
        $usersTitle = form_input_security($_POST["userTitle"]);
    }
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


<section>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="form1" name="form1"
          enctype="application/x-www-form-urlencoded"
          style="width:500px;height:1000px;">

        <header>
            Input Data
        </header>

        <fieldset>

            <label>Select Title: </label> <select name="userTitle" id="usersTitle" onchange="usersTitleScript()"
                                                  style="text-align:center;margin-left:35px;">
                <option value="MR"
                ">MR</option>
                <option value="MS">MS</option>
                <option value="MRS">MRS</option>
                <option value="DR">DR</option>
            </select>
            <br>
            <label for="textInput">Enter First Name:</label><input oninput="result.value = (firstName.value)"
                                                                   id="textInput"
                                                                   name="firstName" placeholder="John" required>

            <br>
            <label for="textInput">Enter Last Name:</label> <input oninput="finalized.value = (lastName.value)"
                                                                   id="textInput"
                                                                   name="lastName" placeholder="Doe"><br>
            <label>Gender:</label><br>
            <input oninput="let finalG;
            finalG.value = (gender.value)" hidden>
            <input type="radio" name="gender" onclick="check(this.value)" value="Male"oninput="finalG.value=(gender.value)">Male
            <br>
            <input type="radio" name="gender" onclick="check(this.value)" value="Female"oninput="finalG.value=(gender.value)">Female
            <br>
            <input type="radio" name="gender" onclick="check(this.value)" value="Other"oninput="finalG.value=(gender.value)">Other
            <br>
            <br>

            <label>Birth Date: </label> <input type="date" id="birthDate" onchange="datePrintOutScript()"
                                               name="birthDate" value=""
                                               style="text-align:center;margin-left:35px;"required>
            <br>
            <br>


        </fieldset>


        <legend style="text-align:center;background-color:black; color:white;">Preview Data</legend>
        <fieldset>
            <label id="usersTitleScript"autocomplete="off">Title : </label>
            <br>
            <label>First Name : </label>
            <output name="result" for="firstName"autocomplete="off"></output>
            <br>
            <label>Last Name : </label>
            <output name="finalized" for="lastName"autocomplete="off"></output>

            <br>
            <label>Gender</label>
            <output name="finalG" for="gender"autocomplete="off"></output>
            <br>

            <label id="datePrintOutScript" autocomplete="off" >Birth Date : </label>
            <br>

        </fieldset>
        <button id="resetButton" type="Reset" value="reset">Reset</button>
        <button type="submit" form="form1" value="Submit" id="submitButton">Submit</button>

        <fieldset>
            <legend style="text-align:center;background-color:black; color:white; width:105%;">Data Submitted</legend>
            <?php
            echo '<b>Title:</b>';
            echo $usersTitle;
            echo "<br>";
            echo "<hr>";


            echo '<b>First name:</b>';
            echo $firstName;
            echo "<span class=\"error\">" . $firstNameErr . "</span>";
            echo "<br>";
            echo "<hr>";
            echo '<b>Last Name:</b>';
            echo "<span class=\"error\">" . $lastNameErr . "</span>";
            echo $lastName;
            echo "<br>";
            echo "<hr>";

            echo '<b>Gender:</b>';
            echo "<span class=\"error\">" . $genderErr . "</span>";
            echo $gender;
            echo "<br>";
            echo "<hr>";


            echo '<b>Birthdate:</b>';
            echo "<span class=\"error\">" . $birthDateErr . "</span>";
            echo $birthDate;
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
        </fieldset>

    </form>
</section>


<?php include 'bottom.inc.php' ?>
</body>

</html>


