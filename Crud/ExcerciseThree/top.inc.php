<?php
echo
'<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Excercise One">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Excercise Three</title>
    <link rel="stylesheet" type="text/css" href="excercise3Style.css">
        
        <script>
        function check(genderScript) {
            document.getElementById("gender").value=genderScript;
        }
    </script>
    
    <script>
    function usersTitleScript() {
        var x = document.getElementById("usersTitle").value;
        document.getElementById("usersTitleScript").innerHTML = "Title " + x;
    }
    </script>
    
    <script>
    function datePrintOutScript(){
            var x = document.getElementById("birthDate").value;
            document.getElementById("datePrintOutScript").innerHTML = "Birth Date:" + x;
                          
    }
    </script>

    
   
</head>
    '
?>