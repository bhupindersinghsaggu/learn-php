<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>Learn in html</title>

<body>
    <h1 style="text-align: center; font-size:2cm">Asso Array in PHP</h1>
    <h1>
        <?php
        $student = [15, "rohit", "Delhi", 8];
        $student_two = ["roll" => 15, "name" => "rohit", "city" => "delhi", "class" => 8];
        echo "<pre>";
        print_r($student);
        echo "<br";
        echo "</pre>";
        echo "<pre>";
        print_r($student_two);
        echo "<br>";
        echo "</pre>";
        echo $student_two["city"];
        ?>
    </h1>
</body>

</html>