<?php 
    $title = "New Site - While/Do-While Loops";
    include 'includes/header.php'; 
?>
    <h1>While Loop</h1>

    <?php
        //Use this loop when you DO NOT know how many iterations you have
        $grade = 0;

        while($grade < 10){
            echo '<p>I AM LESS THAN 10</p>';
            $grade++;
        }

        echo 'LOOP COMPLETE';
    ?>

    <h1>Do-While Loop</h1>

    <?php
        //Use this loop when you DO NOT know how many iterations you have
        //BUT you know the loop has to run at least one time through
        $grade2 = 0;
        do{
            echo '<p>I AM A DO-WHILE LOOP</p>';
            $grade2++;
        }
        while($grade2 < 10);

        echo 'LOOP COMPLETE';
    ?>
    
    <?php
    require 'includes/footer.php';
?>