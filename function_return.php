<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>Learn in html</title>

<body>
    <h1 style="text-align: center; font-size:2cm">Function in PHP</h1>
    <h1>
        <?php

        function hour_minute($hr)
        {

            $minute = $hr * 60;
            return $minute;
            // echo $minute;
        }

        $min = hour_minute(1);
        // echo $min;


        function minute_sec($m)
        {

            $seconds = $m * 60;
            return $seconds;
        }

        $sec = minute_sec($min);
        echo $sec . "seconds";
        ?>



    </h1>
</body>

</html>