<?php

$name = $email = $password = "";
$nameErr = $emailErr = $passErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email";
        }
    }

    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < 6) {
            $passErr = "Password must be at least 6 characters";
        }
    }

    if ($nameErr == "" && $emailErr == "" && $passErr == "") {
        echo "Form submitted<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
    } else {
        echo "$nameErr<br>";
        echo "$emailErr<br>";
        echo "$passErr<br>";
    }
}
?>
