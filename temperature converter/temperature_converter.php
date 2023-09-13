<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conveter</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>

<body>
    <div class="container">

        <h2>Temperature Conveter</h2>
        <form method="post" action="">
            <input type="text" name="temperature" placeholder="Enter temperature"><br>
            <select name="unit" id="">
                <option value="fahrenheit">Celsius to Fahrenheit</option>
                <option value="celsius">Fahrenheit to Celsius</option>
            </select><br>
            <button type="submit">Convert</button>
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $temperature = trim($_POST["temperature"]);
                $unit = $_POST["unit"];
                if (!is_numeric($temperature)) {
                    echo '<span class="warning">Invalid input. Please enter a valid numeric temperature.</span>';
                } else {
                    if ($unit == "fahrenheit") {
                        $fahrenheit = ($temperature * 9 / 5) + 32;
                        printf("<span >Result: </span>%.2f° Celsius = %.2f° Fahrenheit.", $temperature, $fahrenheit);
                    } else if ($unit == "celsius") {
                        $celsius = ($temperature - 32) * 5 / 9;
                        printf("<span >Result: </span>%.2f° farenheit = %.2f° Celsius", $temperature, $celsius);
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