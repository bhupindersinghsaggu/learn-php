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
        function calc($num1, $num2, $add)
        {

            $sum = $num1 + $num2;
            echo $add . ":" . $sum;
        }

        calc(25, 56, "Addition");

        ?>



    </h1>
</body>

</html>