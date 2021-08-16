<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Dynamically changing the page title using a variable.
        Variable can be found on each page BEFORE the include. -->
    <title><?php echo $title; ?></title>

</head>
<body>
<!-- Div start - bootstrap container. End of the div is in footer file -->
<div class="container">
    
    <!-- Navigation -->
    <h2>Follow each link to the page example</h2>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="array.php" class="nav-link">Simple Array and Printouts</a></li>
        <li class="nav-item"><a href="forloop.php" class="nav-link">Simple For Loop</a></li>
        <li class="nav-item"><a href="whiledowhileloop.php" class="nav-link">Simple While and DoWhile Loop</a></li>
        <li class="nav-item"><a href="ifstatement.php" class="nav-link">Simple If Statement</a></li>
        <li class="nav-item"><a href="switchstatement.php" class="nav-link">Simple Switch Statement</a></li>
        <li class="nav-item"><a href="stringmanip.php" class="nav-link">Simple String Manipulation</a></li>
        <li class="nav-item"><a href="datetimemanip.php" class="nav-link">Date and Time Manipulation</a></li>
        <li class="nav-item"><a href="functions.php" class="nav-link">Functions</a></li>
    </ul>

