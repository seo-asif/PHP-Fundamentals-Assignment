<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "styles.css"
            ?>
    </style>
</head>

<body>
    <div class="container">

        <div class="head">
            <h2>Grade calculator</h2>
            <form method="post" action="">
                <input type="text" name="test1" placeholder="Test 1 Score">
                <input type="text" name="test2" placeholder="Test 2 Score">
                <input type="text" name="test3" placeholder="Test 3 Score">
                <button type="submit">Submit</button>

            </form>
        </div>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $test1 = trim($_POST["test1"]);
                $test2 = trim($_POST["test2"]);
                $test3 = trim($_POST["test3"]);

                $grade = ($test1 + $test2 + $test3) / 3;

                if (!is_numeric($test1) || !is_numeric($test1) || !is_numeric($test1)) {
                    echo '<span class="warning">Invalid input. Please enter valid number.</span>';
                } else {

                    if ($grade < 40) {
                        printf("Your Avarage score is %.1f <br>and Your Grade is F .", $grade);

                    } else if ($grade >= 40 && $grade < 60) {
                        printf("Your Avarage score is %.1f <br>and Your Grade is D .", $grade);


                    } else if ($grade >= 60 && $grade < 70) {
                        printf("Your Avarage score is %.1f <br>and Your Grade is C .", $grade);


                    } else if ($grade >= 70 && $grade < 80) {
                        printf("Your Avarage score is %.1f <br>and Your Grade is B .", $grade);


                    } else if ($grade >= 80) {
                        printf("Your Avarage score is %.1f <br>and Your Grade is A .", $grade);

                    } else {
                        echo "Please Give Valid Input.";
                    }

                }

            }
            ?>

        </div>
    </div>
</body>

</html>