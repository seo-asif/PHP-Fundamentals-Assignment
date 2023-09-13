<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>

<body>


    <div class="container">
        <div class="head">
            My Personal Information
        </div>
        <div class="details">
            <?php
            $firstName = "Asif";
            $lastName = "Mosharraf";
            $age = 28;
            $country = "Bangladesh";
            $details = 'I am very happy to enroll in "Ostad Php Laravel Course". Hope one day I will be a laravel developer';
            printf("<p><span >Name: </span>%s %s.</p>", $firstName, $lastName) . "\n";
            printf("<p><span >Age: </span>%d</p>", $age) . "\n";
            printf("<p><span >Country: </span> %s</p>", $country) . "\n";
            printf("<p><span >About Myself: </span> %s.</p>", $details) . "\n";

            ?>
        </div>
    </div>
</body>

</html>