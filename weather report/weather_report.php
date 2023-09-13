<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        <?php include "styles.css"
            ?>
    </style>
</head>

<body>
    <div class="container">

        <div class="head">
            <h2>Weather Report</h2>
            <form method="post" action="">
                <input type="text" name="temperature" placeholder="Enter temperature °C">
                <button type="submit">Submit</button>

            </form>
        </div>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $temperature = trim($_POST["temperature"]);

                if (!is_numeric($temperature)) {
                    echo '<span class="warning">Invalid input. Please enter a valid temperature.</span>';
                } else {

                    if ($temperature < -50) {
                        echo "Are you human!! Its below -50°C!!!";

                    } else if ($temperature >= -50 && $temperature < -10) {
                        echo "Its Extremely Cold!! Its below -10°C!!!";

                    } else if ($temperature >= -10 && $temperature < 0) {
                        echo "Freezing Weather!! Its below 0°C!!!";

                    } else if ($temperature >= 0 && $temperature <= 20) {
                        echo "Cool weather!!!";

                    } else if ($temperature > 20 && $temperature <= 40) {
                        echo "Warm weather!!!";

                    } else if ($temperature > 40 && $temperature <= 150) {
                        echo "Hot weather!!!";

                    } else {
                        echo "You will not survive in this weather";
                    }

                }

            }
            ?>

        </div>
    </div>
</body>

</html>