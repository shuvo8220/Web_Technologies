<?php 
include '../view/login_control.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEase Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="sticky-header">ShopEase - Login</h1>

    <form id="loginForm" action="login_control.php " method="post">
        <fieldset id="loginFieldset">
            <legend>Login</legend>
            <table>
                <tr>
                    <td><label for="providerName">providerName:</label></td>
                    <td><input type="text"  name="providerName" required></td>
                </tr>
                <tr>
                    <td><label for="providerPassword">providerPassword:</label></td>
                    <td><input type="password"  name="providerPassword" required></td>
                </tr>
            </table>
        </fieldset>
        <input type="submit"  name = "submit" value="Login">
    </form>

</body>
</html>
