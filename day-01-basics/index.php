<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1: Basics</title>
</head>
<body>
    <h1>Day 1: Basics</h1>
    <p>Syntex & Commenting - Variables - Data Types</p>
        <p>We can Add Commenting in Three Ways in PHP</p>
    <ul>
        <li>Single Line Comment</li>
        <li>Multi Line Comment</li>
        <li>Documentation Comment</li>
    </ul>
    <?php
    // Single Line Comment
    # Single Line Comment
    echo "This is Single Line Commenting in PHP: <br><br> // This is Single Line Commenting in PHP: <br> # This is Single Line Commenting in PHP: <br><br>";
    /* Multi Line Commenting in PHP
 This is Multi Line Commenting in PHP */
    echo "This is Multi Line Commenting in PHP: <br><br> /* This is Multi Line Commenting in PHP */ <br><br>";
    /**
     * This is Documentation Commenting in PHP
     * We can use this type of commenting for documentation purpose.
     */
    echo "This is Documentation Commenting in PHP: <br><br> /** This is Documentation Commenting in PHP */ <br><br>";
    

    $name = "Mirza Ahtsham";
    $age = 32;

    echo "My name is " . $name . " and I am " . $age . " Years Old";
    
    ?>
    









</body>
    </html>