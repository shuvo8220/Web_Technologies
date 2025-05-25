<?php 
include '../view/Action.php';
//session_start();
setcookie("user","1",time()+86400);
if(isset($_COOKIE['user'])){
    echo "you have visited the site";
}
else{
    echo "Welcome to site";
}
$_SESSION["user"]= "abc";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>ShopEase - Registration</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
  <h2>ShopEase Registration</h2>
  <h3>Service Provider Registration</h3>


  <form method="post" action="">
    <label>Business Name:</label>
    <input type="text" name="providerName" value="<?= $_POST['providerName'] ?? '' ?>" />
   

    <label>Email:</label>
    <input type="email" name="providerEmail" value="<?= $_POST['providerEmail'] ?? '' ?>" />

    <label>Phone Number:</label>
    <input type="tel" name="providerPhone" value="<?= $_POST['providerPhone'] ?? '' ?>" />

    <label>Business Address:</label>
    <input type="text" name="providerAddress" value="<?= $_POST['providerAddress'] ?? '' ?>" />

    <label>Gender:</label>
    <input type="radio" name="providerGender" value="Male" <?= (($_POST['providerGender'] ?? '') === "Male") ? "checked" : "" ?> /> Male
    <input type="radio" name="providerGender" value="Female" <?= (($_POST['providerGender'] ?? '') === "Female") ? "checked" : "" ?> /> Female

    <label>Business Category:</label>
    <select name="providerCategory">
      <option value="">-- Select Category --</option>
      <option value="Clothing" <?= ($_POST['providerCategory'] ?? '') == 'Clothing' ? 'selected' : '' ?>>Clothing</option>
      <option value="Electronics" <?= ($_POST['providerCategory'] ?? '') == 'Electronics' ? 'selected' : '' ?>>Electronics</option>
      <option value="Grocery" <?= ($_POST['providerCategory'] ?? '') == 'Grocery' ? 'selected' : '' ?>>Grocery</option>
      <option value="Home Decor" <?= ($_POST['providerCategory'] ?? '') == 'Home Decor' ? 'selected' : '' ?>>Home Decor</option>
    </select>

    <label>Password:</label>
    <input type="password" name="providerPassword" />

    <label>
      <input type="checkbox" name="providerTerms" <?= isset($_POST['providerTerms']) ? 'checked' : '' ?> />
      I agree to the Terms & Conditions
    </label>

    <div class="button-group">
      <input type="reset" value="Reset" />
      <input type="submit" value="Register as Provider" />
    </div>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $nameError = $emailError = $phoneError = $genderError = $typeError = $passwordError = $termsError = "";

    $errors = [];
    $success = false;

    $providerName = clean_input($_POST["providerName"] ?? "");
    $providerEmail = clean_input($_POST["providerEmail"] ?? "");
    $providerPhone = clean_input($_POST["providerPhone"] ?? "");
    $providerAddress = clean_input($_POST["providerAddress"] ?? "");
    $providerGender = $_POST["providerGender"] ?? "";
    $providerCategory = $_POST["providerCategory"] ?? "";
    $providerPassword = $_POST["providerPassword"] ?? "";
    $providerTerms = isset($_POST["providerTerms"]);

    // Validation
    if (empty($providerName)) $errors[] = "Business Name is required.";
    if (!filter_var($providerEmail, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
    if (!preg_match("/^\d{10,15}$/", $providerPhone)) $errors[] = "Phone must be 10-15 digits.";
    if (empty($providerAddress)) $errors[] = "Business Address is required.";
    if (empty($providerGender)) $errors[] = "Please select your gender.";
    if (empty($providerCategory)) $errors[] = "Please select a business category.";
    if (strlen($providerPassword) < 6) $errors[] = "Password must be at least 6 characters.";
    if (!$providerTerms) $errors[] = "You must agree to the Terms & Conditions.";

    if (!empty($errors)) {
      echo "<div class='error'><ul>";
      foreach ($errors as $e) {
        echo "<li>$e</li>";
      }
      echo "</ul></div>";
    } else {
      echo "<div class='success'><h4>Registration Successful!</h4>
            <p>Thank you, <strong>$providerName</strong>, your registration has been received.</p></div>";
    }
  }
  ?>
</div>
</body>
</html>



