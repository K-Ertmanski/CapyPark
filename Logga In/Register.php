<?php

include "DataBas_Koppling.php";
$conn = connectToDataBase();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["uname"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

    // Insert user into the database
    $sql = "INSERT INTO id (user_name, 'password') VALUES ('$username', '$password')";
    
    if ($conn->query($sql)) {
        header("Location: LoggaIn.php"); // Redirect to login page after successful registration
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
