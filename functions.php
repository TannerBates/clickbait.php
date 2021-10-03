<?php 
    function checkForClickBait() {
        // grab value from text area in $_POST collection
        //make all letters lowercase using strtolower() function
        //store in variable
        $clickBait = strtolower($_POST["clickbait_headline"]);

        //store array of clickbait sounding words or phrases
        $a = array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );

        //store array of replacement words or phrases
        //make sure each replacement word is in same place as word being replaced
        $b = array(

            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than any others",
            "you wont really be surprised by",
            "slighty improve",
            "boring",
            "normal"
        );

        //use str_replace() function to replace the words
        //uppercase the first letter in every word using ucwords() function
        //store in a variable
        $honestHeadline = str_replace($a, $b, $clickBait);

        //return array of variables to access globally
        return array($clickBait, $honestHeadline);

    };

    function displayHonestHeadline($x, $y) {
        echo "<strong class='text-danger'>Original headline</strong><h4>".ucwords($x)."</h4><hr>";


        //echo honest headline
        echo "<strong class='text-success'>Honest headline</strong><h4>".ucwords($y)."</h4>";
    }

?>