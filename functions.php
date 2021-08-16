<?php 
    $title = "New Site - Functions";
    include 'includes/header.php'; 
?>
    <h1>Functions</h1>

    <?php
        //Defining a function
        function writeMessage() {
            echo "You are a really nice person, have a great time!<br>";
        }

        //Calling a function
        writeMessage();
        
        //Function with parameters
        function addFunction($num1, $num2){
            $total = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $total<br>";
        }

        //Changing the value of a variable with a function
        //"Passing variables by Reference" (ampersand used)
        function changeNum(&$num){
            $num += 10;
            //$num = $num + 10;
            //The '&' gives the function permission to modify the original variable value
        }

        //Value returning function
        /*Returning is required to store the result of a function
        as a variable or to echo it or use it elsewhere*/
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 50;
        addFunction(9,5);
        addFunction(9,$num);
        addFunction('9','20');

        changeNum($num);
        echo "$num <br>";

        $return_value = returnProduct(10,21);
        echo $return_value . '<br>';

    ?>

<?php
    require 'includes/footer.php';
?>