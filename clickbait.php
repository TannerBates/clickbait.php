<?php 
    define("TITLE", "Honest Click Bait Headlines");
    include("functions.php");

    if(isset($_POST["fix_submit"])) {
        // call function
        checkForClickBait();
    }
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
        <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program!</p>


        <div class="row">
            <form action="" class="col-sm-8 col-sm-offset-2" method="post">
                <textarea name="clickbait_headline" placeholder="Place clickbait headline here" class="form-control input-lg"></textarea><br>


                <button type="submit" class="btn btn-primary btn-lg float-right" name="fix_submit">Make Honest</button>
            </form>
        </div>

        <?php 
            if(isset($_POST["fix_submit"])){
                //get first value in array returned by checkForClickBait() function
                //store in a variable
                $clickBait = checkForClickBait()[0];
                $honestHeadline = checkForClickBait()[1];

                //call function
                // pass two arguments
                displayHonestHeadline($clickBait, $honestHeadline);
            }
        
        
        ?>




    </div><!-- container -->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>