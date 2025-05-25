<?php


include "../view/model.php";
session_start();

if (isset($_POST["submit"])) {
    $conn = createcon();

    $providerName = $_POST["providerName"];
    $providerPassword = $_POST["providerPassword"];

    $res = checklogin($conn, $providerName, $providerPassword);

    if ($res && mysqli_num_rows($res) > 0) {
        $user = mysqli_fetch_assoc($res);
        
        // session setup
        $_SESSION["providerName"] = $user["providerName"]; 
        $_SESSION["providerEmail"] = $user["providerEmail"];
        $_SESSION["providerPhone"] = $user["providerPhone"];
        $_SESSION["providerAddress"] = $user["providerAddress"];  

        header("Location: ../view/profile.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid username or password</p>";
    }

    closecon($conn);
}


?>