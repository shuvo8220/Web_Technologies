<?php
include "../view/model.php"; // Optional if you want DB insertion

$providerName = $providerEmail = $providerPhone = $providerAddress = $providerGender = $providerCategory = $providerPassword = "";
$terms = "";

$nameErr = $emailErr = $phoneErr = $addressErr = $genderErr = $categoryErr = $passwordErr = $termsErr = "";

$hasError = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    function clean_input($data) {
        return htmlspecialchars(trim($data));
    }

    // Business Name
    if (empty($_POST['providerName'])) {
        $nameErr = "Business Name is required.";
        $hasError = 1;
    } else {
        $providerName = clean_input($_POST['providerName']);
    }

    // Email
    if (empty($_POST['providerEmail']) || !filter_var($_POST['providerEmail'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Valid Email is required.";
        $hasError = 1;
    } else {
        $providerEmail = clean_input($_POST['providerEmail']);
    }

    // Phone
    if (empty($_POST['providerPhone']) || !preg_match("/^\d{10,15}$/", $_POST['providerPhone'])) {
        $phoneErr = "Phone must be 10-15 digits.";
        $hasError = 1;
    } else {
        $providerPhone = clean_input($_POST['providerPhone']);
    }

    // Address
    if (empty($_POST['providerAddress'])) {
        $addressErr = "Business Address is required.";
        $hasError = 1;
    } else {
        $providerAddress = clean_input($_POST['providerAddress']);
    }

    // Gender
    if (!isset($_POST['providerGender'])) {
        $genderErr = "Please select your gender.";
        $hasError = 1;
    } else {
        $providerGender = $_POST['providerGender'];
    }

    // Category
    if (empty($_POST['providerCategory'])) {
        $categoryErr = "Please select a business category.";
        $hasError = 1;
    } else {
        $providerCategory = $_POST['providerCategory'];
    }

    // Password
    if (empty($_POST['providerPassword']) || strlen($_POST['providerPassword']) < 6) {
        $passwordErr = "Password must be at least 6 characters.";
        $hasError = 1;
    } else {
        $providerPassword = $_POST['providerPassword'];
    }

    // Terms
    if (!isset($_POST['providerTerms'])) {
        $termsErr = "You must agree to the Terms & Conditions.";
        $hasError = 1;
    } else {
        $terms = $_POST['providerTerms'];
    }

    if ($hasError === 0) {
        echo "<div class='success'><h2>Registration Successful</h2>";
        echo "<p>Business Name: $providerName</p>";
        echo "<p>Email: $providerEmail</p>";
        echo "<p>Phone: $providerPhone</p>";
        echo "<p>Address: $providerAddress</p>";
        echo "<p>Gender: $providerGender</p>";
        echo "<p>Category: $providerCategory</p>";
        echo "<p>Password: $providerPassword</p>";
        echo "<p>Terms Accepted: Yes</p></div>";

        // Optional DB Insertion
        // $conn = createcon();
        // insertdata($conn, $providerName, $providerEmail, $providerPhone, $providerAddress, $providerGender, $providerCategory, $providerPassword);
        // closecon($conn);
    } else {
        echo "<div class='error'>";
        echo "<p>$nameErr</p>";
        echo "<p>$emailErr</p>";
        echo "<p>$phoneErr</p>";
        echo "<p>$addressErr</p>";
        echo "<p>$genderErr</p>";
        echo "<p>$categoryErr</p>";
        echo "<p>$passwordErr</p>";
        echo "<p>$termsErr</p>";
        echo "</div>";
    }


if ($hasError === 0) {
    // Insert into DB
    $conn = createcon();
    if (insertprovider($conn, $providerName, $providerEmail, $providerPhone, $providerAddress, $providerGender, $providerCategory, $providerPassword)) {
        header("Location: ../view/login.php");
        exit(); // Important to stop execution after redirect
    } else {
        echo "<div class='error'>Database Error: " . mysqli_error($conn) . "</div>";
    }
    closecon($conn);
}

}
?>

