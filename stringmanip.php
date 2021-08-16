<?php 
    $title = "New Site - String Manipulation";
    include 'includes/header.php'; 
?>
    <h1>PHP String Manipluation</h1>

    <?php
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "adam baranek";

        //Concatenating strings
        echo $phrase1 . ", named Tiffany, " . $phrase2;
        echo '<br>';
        echo '<hr>';

        //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name) . '<br>';
        echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br>';
        echo 'All Caps: ' . strtoupper($name) . '<br>';
        echo '<hr>';
        echo 'Repeat String: ' . str_repeat($name,4) . '<br>';
        echo 'Repeat String: ' . strtoupper(str_repeat($name,4) . '<br>');

        //Look at the string, 2nd parameter is char to start from
        //3rd parameter is how many chars from the 2nd param to grab
        echo 'Get a string within a string (substring): ' . substr($name, 5, 4) . '<br>';

        echo 'Get position of string/character: ' . strpos($name, 'k') . '<br>';
        echo 'Find the length of a string: ' . strlen($name) . '<br>';
        echo '<hr>';

        //Trimming strings
        echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br>';
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br>';
        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br>';
        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br>';
        echo '<hr>';

        //Replace string with another
        //1st param is the substring you are targeting (find)
        //2nd param is the string you want to replace the 1st param (replace with)
        //3rd param is the string you are targeting (the initial variable to target)
        echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br>';

    ?>

<?php
    require 'includes/footer.php';
?>