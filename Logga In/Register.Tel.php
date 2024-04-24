<?php

include "DataBas_Koppling.php";
$conn = connectToDataBase();
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    //telefonnummer

    $telefonnummer = $_POST["telefonnummer"];

    // Insert user into the database
    $sql = "UPDATE id set telefonnummer = $telefonnummer where id = $_SESSION[id]";
    
    if ($conn->query($sql)) 
    {
        header("Location: LoggaIn.php"); // Redirect to login page after successful registration
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
