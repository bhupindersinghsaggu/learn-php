<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>Learn in html</title>

<body>
    <h1 style="text-align: center; font-size:2cm">Global in PHP</h1>
    <h1>
        <?php

        $a = "out";
        function convert()
        {
            global $a;
            $a = "in";
        }

        convert();
        echo $a;
        ?>



    </h1>
</body>

</html>