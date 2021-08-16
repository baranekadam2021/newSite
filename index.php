<?php 
    $title = "New Site - Home";
    include 'includes/header.php'; 
?>

    <!-- Basic HTML -->
    <h1><?php print $title; ?></h1>
    
    <?php
        //Printing to HTML using echo
        echo 'Hello PHP';
        echo '<br>';
        echo 'Second Line';
    ?>

    <?php
        //declare variable
        $name = 'Adam Baranek';
        $age = 29;
        //echo variable
        echo '<br>';
        echo $name;
        //using full-stops (periods) to concatenate content
        echo '<h1>My name is: '.$name.'</h1>';
        echo '<h1>My age is: '.$age.'</h1>';
        //using double quotes makes it so I don't have to use full-stops
        //Note: only works with newer versions of PHP
        echo "<h1>My name is: $name</h1>";
    ?>

    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <a href="https://dashboard.heroku.com/apps" target="_blank" class="btn btn-primary">Heroku.com</a>

<?php
    require 'includes/footer.php';
?>