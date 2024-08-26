<?php
echo "This is login page <br>";
session_start();

$_SESSION['name'] = "Bhupinder";

echo $_SESSION['name'];
