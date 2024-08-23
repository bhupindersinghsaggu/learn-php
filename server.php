<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<title>Learn in html</title>

<body>
    <h1 style="text-align: center; font-size:2cm">Request in PHP</h1>
    <h1>


        <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
            <input type="text" name="title_1" placeholder="book_title" value="">
            <input type="text" name="password_1" placeholder="enter your password" value="">
            <input type="submit" name="enter" value="Submit">
        </form>
        <pre>
        <?php
        print_r($_SERVER);
        ?>
</pre>
    </h1>
</body>

</html>