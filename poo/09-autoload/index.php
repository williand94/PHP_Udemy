<?php

    require_once "./autoload/autoload.php";

    $user = new Users();
    echo $user->name."<br>";
    echo $user->email."<br><br>";

    $input = new Input();
    echo $input->title."<br>";
    echo $input->date."<br><br>";

    $categories = new Categories();
    echo $categories->name."<br>";
    echo $categories->description."<br><br>";
