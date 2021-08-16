<?php 
    $title = "New Site - For Loops";
    include 'includes/header.php'; 
?>
    <!-- Used when you know EXACTLY how many iterations the loop has -->
    <h1>For Loops</h1>

    <?php
        for($count = 0; $count < 10; $count++){
            echo '<p>Hello World</p>';
        }

        for($count = 1; $count <= 10; $count++){
            echo "<br>The Count is: $count";
        }
    ?>

<?php
    require 'includes/footer.php';
?>