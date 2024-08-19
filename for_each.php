<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>Learn in html</title>

<body>
    <h1 style="text-align: center; font-size:2cm">For loop in PHP</h1>
    <h1>
        <?php

        // $days = ["sun", "mon", "tus", "thu", "fri", "sat"];

        // for ($count = 0; $count < count($days); $count++) {

        //     echo "the weekend days &nbsp" . $days[$count] . "<br>";
        // }
        $days = ["day1" => "sun", "day2" => "mon", "day3" => "tus", "day4" => "thu", "day5" => "fri", "day6" => "sat"];

        foreach ($days as $key => $value) {

            echo $key . "=" . "&nbsp" . "$value" . "<br>";

            // echo "day1";
        }
        ?>



    </h1>
</body>

</html>