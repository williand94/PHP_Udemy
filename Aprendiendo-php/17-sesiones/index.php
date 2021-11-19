<?php

session_start();

$variable_normal = "Hi broth, i'm a normal variable ";

$_SESSION['session'] = "I'm a fucking session variable";

echo $variable_normal."<br>";
echo  $_SESSION['session'];