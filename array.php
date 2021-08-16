<?php 
    $title = "New Site - Arrays";
    include 'includes/header.php'; 
?>
    <h1>Arrays</h1>

    <?php
        $numbers = array(1,2,3,4,5,6,7,8,9,10,2,3,5,6,7,4,3);

        echo $numbers[5];
        echo "<p>$numbers[9]</p>";

        //Finding out how many elements are in an array
        $size = count($numbers);
        echo "<p>There are $size values in the array \$numbers</p>";

        //Printing out all the elements in an array
        for($count = 0; $count < $size; $count++){
            echo "$numbers[$count]<br>";
        }

    ?>

<?php
    require 'includes/footer.php';
?>