<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        <?php include "styles.css"
            ?>
    </style>
</head>

<body>
    <div class="container">
        <div class="head">
            <h2>Basic Calculator</h2>

            <form method="post" action="">
                <input type="text" name="num1" placeholder="First Number">
                <input type="text" name="num2" placeholder="Second Number">
                <select name="option" id="">
                    <option value="Addition">Addition</option>
                    <option value="Subtraction">Substraction</option>
                    <option value="Multiplication">Multiplication</option>
                    <option value="Division">Division</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1 = trim($_POST["num1"]);
                $number2 = trim($_POST["num2"]);
                $option = trim($_POST["option"]);
                if (!is_numeric($number1) || !is_numeric($number2)) {
                    echo '<span class="warning">Invalid input. Please enter a valid number.</span>';
                } else {
                    if ($option == "Addition") {
                        $result = $number1 + $number2;
                        printf("<span >%s: </span>%.2f + %.2f =%.2f", $option, $number1, $number2, $result);
                    } else if ($option == "Subtraction") {
                        $result = $number1 - $number2;
                        printf("<span >%s: </span>%.2f - %.2f =%.2f", $option, $number1, $number2, $result);
                    } else if ($option == "Multiplication") {
                        $result = $number1 * $number2;
                        printf("<span >%s: </span>%.2f * %.2f =%.2f", $option, $number1, $number2, $result);
                    } else if ($option == "Division" && $number2 != 0) {
                        $result = $number1 + $number2;
                        printf("<span >%s: </span>%.2f + %.2f =%.2f", $option, $number1, $number2, $result);
                    } else if ($option == "Division" && $number2 == 0) {

                        echo '<span class="warning">Can not divide by 0.Try again</span>';
                    } else {
                        printf("Please provide numeric Value");
                    }
                }

            }

            ?>
        </div>
    </div>
</body>

</html>