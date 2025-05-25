<?php

function createcon(){
    return new mysqli("localhost", "root", "", "data"); // Make sure '
}

function insertprovider($conn, $name, $email, $phone, $address, $gender, $category, $password){
    $stmt = $conn->prepare("INSERT INTO reg 
        (providerName, providerEmail, providerPhone, providerAddress, providerGender, providerCategory, providerPassword) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $address, $gender, $category, $password);

    if ($stmt->execute()) {
        echo "<p>Data inserted into database.</p>";
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
}

function closecon($conn){
    $conn->close();
}

/*function checklogin($conn, $providerName, $providerPassword)
{
    $sql = "SELECT providerName , password FROM EVENT WHERE providerName = '$providerName' AND providerPassword = '$providerPassword'";
    return mysqli_query($conn, $sql);
}

function fetchuserdata($conn, $providerName){
    $sql = "SELECT * FROM EVENT WHERE providerName = '$providerName'";
    return mysqli_query($conn, $sql);
}
*/

function checklogin($conn, $providerName, $providerPassword)
{
    $sql = "SELECT * FROM reg WHERE providerName = ? AND providerPassword = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $providerName, $providerPassword);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function fetchuserdata($conn, $providerName){
    $sql = "SELECT * FROM reg WHERE providerName = '$providerName'";
    return mysqli_query($conn, $sql);

}



?>
