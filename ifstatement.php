<?php 
    $title = "New Site - If Statements";
    include 'includes/header.php'; 
?>
    <h1>If-Else Statements</h1>
    
    <?php
        echo "<h2>If Statement</h2>";

        $grade = 55;

        if($grade >= 50){
            echo '<h3 style="color:green;">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color:red;">YOU HAVE FAILED</h3>';
        }

        $grade2 = 'B';

        if($grade2 == 'A'){
            echo '<h2 style="color:green;">YOU ARE A SUPERSTAR</h2>';
        }
        elseif($grade2 == 'B'){
            echo '<h2 style="color:blue;">YOU DID WELL</h2>';
        }
        else{
            echo '<h2 style="color:red;">YOU HAVE FAILED...</h2>';
        }
    ?>
    
<?php
    require 'includes/footer.php';
?>