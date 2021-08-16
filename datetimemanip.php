<?php 
    $title = "New Site - Date/Time Manipulation";
    include 'includes/header.php'; 
?>
    <h1>Date and Time Manipluation</h1>

    <?php
        //Printing the current date (old)
        $datenow = getdate();
        echo "Today's Date: <br>";
        echo $datenow['mon'] . '<br>';
        echo $datenow['mday'] . '<br>';
        echo $datenow['year'] . '<br>';
        echo "Today's Date: " . $datenow['mon'] . '/' . $datenow['mday'] . '/' . $datenow['year'] . '<br>';

        //Printing the current date (NEW)
        print date('r') . '<br>';
        print date('m/d/y') . '<br>';
        print date ('g:i a');
    ?>

<?php
    require 'includes/footer.php';
?>