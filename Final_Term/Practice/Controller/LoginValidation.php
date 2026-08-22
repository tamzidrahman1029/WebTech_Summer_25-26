<?php

session_start();

$name = "";

$email = "";

$gender = "";

$message = "";

$remember = false;


if(isset($_COOKIE["remember_user"]))
{
    $name = $_COOKIE["remember_user"];

    $remember = true;
}


$valid = true;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["username"] ?? "");

    $email = trim($_POST["email"] ?? "");

    $gender = $_POST["gender"] ?? "";

    $remember = isset($_POST["rememberuser"]) &&
                $_POST["rememberuser"] === "1";


    if(empty($name) || strlen($name) < 5)
    {
        $message .= "Name Must be at least 5 Char\n";

        $valid = false;
    }


    if(empty($email))
    {
        $message .= "Email Must be Required\n";

        $valid = false;
    }


    if(empty($gender))
    {
        $message .= "Please Select a Gender\n";

        $valid = false;
    }


    if($valid)
    {
        $_SESSION["logged_In"] = true;

        $_SESSION["username"] = $name;

        $_SESSION["email"] = $email;

        $_SESSION["gender"] = $gender;


        if($remember)
        {
            setcookie(
                "remember_user",
                $name,
                time() + 86400 * 30,
                "/"
            );
        }


        $jsonfile = "../Model/user.json";

        $users = [];


        if(file_exists($jsonfile))
        {
            $jsonData = file_get_contents($jsonfile);

            $users = json_decode($jsonData, true) ?? [];
        }


        $users[] = [

            "username" => $name,

            "email" => $email,

            "gender" => $gender,

            "timestamp" => time()

        ];


        file_put_contents(
            $jsonfile,
            json_encode($users, JSON_PRETTY_PRINT)
        );
    }
}

?>