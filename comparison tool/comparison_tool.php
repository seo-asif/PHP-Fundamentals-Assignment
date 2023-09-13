<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include "styles.css"
            ?>
    </style>
</head>

<body>
    <div class="container">

        <div class="head">
            <h2>Comparison Tool</h2>
            <form method="post" action="">
                <input type="text" name="number1" placeholder="First Number">
                <input type="text" name="number2" placeholder="Second Number">
                <button type="submit">Submit</button>

            </form>
        </div>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $number1 = trim($_POST["number1"]);
                $number2 = trim($_POST["number2"]);

                if (!is_numeric($number1) || !is_numeric($number2)) {
                    echo '<span class="warning">Invalid input. Please enter a valid number.</span>';
                } else {

                    echo $number1 == $number2 ? $number1 . " is equal to " . $number2 : ($number1 > $number2 ? $number1 . " is the larger number" : $number2 . " is the larger number");

                }

            }
            ?>

        </div>
    </div>
</body>

</html>