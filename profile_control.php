<?php


include "../view/model.php";
session_start();

// Validate session
if (!isset($_SESSION["providerName"])) {
    header("Location: login.php");
    exit();
}

$Name = $_SESSION["providerName"];

// Connect to database
$conobj = createcon();

// Fetch user data
$result = fetchuserdata($conobj, $Name);

$userData = null;
if ($result && mysqli_num_rows($result) > 0) {
    $userData = mysqli_fetch_assoc($result); // Get the first row (there should only be one)
} else {
    echo "No user data found.";
}

// Close connection
closecon($conobj);
?>
