<?php include 'top.inc.php' ?>

<header>
    <h1>Excercise Two</h1>
</header>
<?php include 'nav.inc.php';
echo $stepThree ?>

<?php

$firstNameErr = $lastNameErr = $genderErr = $birthDateErr = "";
$firstName = $lastName = $gender = $birthDate = "";

?>

<section>
    <form action="excercise2Results.php" method="POST" id="form1" name="form1"
          enctype="application/x-www-form-urlencoded"
          style="width:500px;height:1000px;">
        <fieldset>
            <legend>Name Form</legend>
            <label>Select Title: </label> <select id="usersTitle" onchange="usersTitleScript()"
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
                                                                   name="firstName" placeholder="John" >

            <br>
            <label for="textInput">Enter Last Name:</label> <input oninput="finalized.value = (lastName.value)"
                                                                   id="textInput"
                                                                   name="lastName" placeholder="Doe"><br>

            <input type="radio" name="gender" onclick="check(this.value)" value="Male">Male
            <br>
            <input type="radio" name="gender" onclick="check(this.value)" value="Female">Female
            <br>
            <input type="radio" name="gender" onclick="check(this.value)" value="Other">Other
            <br>
            <br>

            <label>Birth Date: </label> <input type="date" id="birthDate" onchange="datePrintOutScript()"
                                               name="birthDate"
                                               style="text-align:center;margin-left:35px;">
            <br>
            <button id="resetButton" type="Reset" value="reset">Reset</button>
            <button type="submit" form="form1" value="Submit" id="submitButton">Submit</button>
            <br>
        </fieldset>

        <fieldset>
            <label id="usersTitleScript">Title : </label>
            <br>
            <label>First Name : </label>
            <output name="result" for="firstName"></output>
            <br>
            <label>Last Name : </label>
            <output name="finalized" for="lastName"></output>
            <br>
            <label name="gender">Gender:</label><input id="gender">
            <br>
            <label id="datePrintOutScript">Birth Date : </label>
            <br>

        </fieldset>
    </form>
</section>
<?php include 'bottom.inc.php' ?>
</body>

</html>


