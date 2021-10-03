<?php
    define( "TITLE", "PHP Arrays");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1><?php echo TITLE; ?></h1>

        <?php 
            // PLAIN VARIABLES
            $userName = "Tanner";
            $fullName = "Tanner Bates";
            $age = 25;
            $gender = "Male";
            $country = "United States";

            // SIMPLE ARRAY
            $user = array(
                "Tanner", //0
                "Tanner Bates", //1
                25, //2
                "Male", //3
                "United States" //4
            );

            // ECHO THE VALUES OF THE ARRAY
            echo $user[0] ."<br>";
            echo $user[1] ."<br>";
            echo $user[2] ."<br>";
            echo $user[3] ."<br>";
            echo $user[4] ."<br>";


            //ASSOCIATIVE ARRAY
            $people = array(
                "userName" => "Tanner",
                "fullName" => "Tanner Bates",
                "age" => 25,
                "gender" => "Male",
                "country" => "United States"
            );

            //ECHO THE VALUES OF THE ARRAY
            echo $people["userName"] . "<br>";
            echo $people["fullName"] . "<br>";
            echo $people["age"] . "<br>";
            echo $people["gender"] . "<br>";
            echo $people["country"] . "<br>";




            //MULTI DIMENSIONAL ARRAY
            $employees = array(
                array( // index of 0
                    "userName" => "Tanner",
                    "fullName" => "Tanner Bates",
                    "age" => 25,
                    "gender" => "Male",
                    "country" => "United States"
                ),
                array( // index of 1
                    "userName" => "Stella",
                    "fullName" => "Stella Bates",
                    "age" => 23,
                    "gender" => "Female",
                    "country" => "United States"
                )
            );

            //ECHO THE VALUES OF MULTI DIMENSIONAL ARRAYS
            echo "<br>";
            echo $employees[0]["age"] ."<br>";
        ?>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
</body>
</html>