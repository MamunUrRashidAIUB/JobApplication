<?php
include("db_connect.php");

if (isset($_POST["submit"])) { 
    $username = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $letter = mysqli_real_escape_string($conn, $_POST["letter"]);
    $sql = "INSERT INTO application (name, email, phone, letter) VALUES ('$username', '$email', '$phone', '$letter')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>
        window.location.href = "application.php";
        alert(" successful!");
      </script>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
