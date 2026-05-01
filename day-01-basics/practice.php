<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day 1 Practice</title>
</head>
<body>
    <?php
    $name = "Ahtsham";
    $age = 32;
    $price = 99.99;
    $isDeveloper = true;
    $skills = ["HTML", "CSS", "JavaScript", "PHP", "Tailwind CSS"];
    $data = null;


    var_dump($name);
    var_dump($age);
    var_dump($price);
    var_dump($isDeveloper);
    var_dump($skills);
    var_dump($data);



    ?>
<p>My Name is <?php echo $name; ?>. I am <?php echo $age; ?> years old. My Skills are: <?php echo implode(", ", $skills); ?></p>
<p>My Name is <?php echo $name; ?>.
I am <?php echo $age; ?> years old.
My Skills are: <?php echo implode(", ", $skills); ?></p>


</body>
</html>