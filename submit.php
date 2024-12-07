<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $address = htmlspecialchars($_POST["address"]);

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Submission Successful</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='form-container'>";
    echo "<h2>Submission Successful!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<a href='index.html'>Go back to the form</a>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    header("Location: index.html");
    exit();
}
?>
