<?php include 'top.inc.php' ?>

<header>
    <h1>Excercise Two</h1>
</header>
<?php include 'nav.inc.php';
echo $mainPage ?>

<?php

$firstNameErr = $lastNameErr = $genderErr = $birthDateErr = "";
$firstName = $lastName = $gender = $birthDate = "";

?>
<section>
    <form method="POST" action="excercise2Results.php" style="width:500px;height:1000px;">
        <fieldset>
            <legend>Name Form</legend>

            Enter First Name:<input oninput="result.value = (firstName.value)" type="text" name="firstName" >
            <span class="error"><?php echo $firstNameErr; ?></span>
            <br>
            Enter Last Name: <input oninput="finalized.value = (lastName.value)" type="text" name="lastName"
                                    ><br>
            <span class="error"><?php echo $lastNameErr; ?></span>
            <br>
            <button id="resetButton" input type="Reset" value="reset"
            ">Reset</button>
            <button id="submitButton" type="submit"
            ">Submit</button><br>
            <br>
            <hr>
        </fieldset>

        <fieldset>
            <label>First Name : </label>
            <output name="result" for="firstName"></output>
            <br>
            <label>Last Name : </label>
            <output name="finalized" for="lastName"></output>
        </fieldset>

    </form>


</section>

</body>
<?php include 'bottom.inc.php' ?>
</html>
