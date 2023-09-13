<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>

<body>
    <div class="container">

        <h2>Even Odd Checker</h2>
        <form method="post" action="">
            <input type="text" name="number" placeholder="Enter number"><br>
            <button type="submit">Check</button>
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $number = trim($_POST["number"]);

                if (!is_numeric($number)) {
                    echo '<span class="warning">Invalid input. Please enter a valid numeric number.</span>';
                } else {
                    $result = $number % 2;

                    if ($result == 0) {
                        printf("<span >Result: </span>%d is a even number", $number);
                    } else if ($result != 0) {
                        printf("<span >Result: </span>%d is an odd number", $number);
                    } else {
                        echo "Invalid unit selected.";
                    }
                }
            }

            ?>
        </div>
    </div>
</body>

</html>