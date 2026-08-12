
<?php

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Get form data
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $website = trim($_POST["website"] ?? "");
    $comment = trim($_POST["comment"] ?? "");
    $gender = $_POST["gender"] ?? "";


    // Store all error messages
    $errors = "";


    // =========================
    // Name Validation
    // =========================

    if (empty($name))
    {
        $errors .= "Name is required.\n";
    }
    else if (strlen($name) < 5)
    {
        $errors .= "Name must be at least 5 characters.\n";
    }


    // =========================
    // Email Validation
    // =========================

    if (empty($email))
    {
        $errors .= "E-mail is required.\n";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors .= "Invalid E-mail.\n";
    }


    // =========================
    // Website Validation
    // =========================

    if (empty($website))
    {
        $errors .= "Website is required.\n";
    }


    // =========================
    // Comment Validation
    // =========================

    if (empty($comment))
    {
        $errors .= "Comment is required.\n";
    }


    // =========================
    // Gender Validation
    // =========================

    if (empty($gender))
    {
        $errors .= "Gender is required.\n";
    }


    // =========================
    // Show All Errors Together
    // =========================

    if (!empty($errors))
    {
        echo "<script>";

        echo "alert(" . json_encode($errors) . ");";

        echo "window.history.back();";

        echo "</script>";
    }


    // =========================
    // If Everything Is Correct
    // =========================

    else
    {
        echo "<script>";

        echo "alert('Form submitted successfully!');";

        echo "</script>";


        echo "<h2>Submitted Information</h2>";

        echo "Name: " . htmlspecialchars($name);

        echo "<br><br>";

        echo "E-mail: " . htmlspecialchars($email);

        echo "<br><br>";

        echo "Website: " . htmlspecialchars($website);

        echo "<br><br>";

        echo "Comment: " . htmlspecialchars($comment);

        echo "<br><br>";

        echo "Gender: " . htmlspecialchars($gender);
    }
}

?>

