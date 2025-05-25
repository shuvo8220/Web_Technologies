<?php include "../view/profile_control.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <h2>Profile</h2>
    <p>Hello, <?php echo htmlspecialchars($userData["providerName"]); ?> | 
       <a href="../view/logout.php">Logout</a>
    </p>

    <?php if (!empty($userData)): ?>
        <h3>Your Details:</h3>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Category</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($userData['providerName']); ?></td>
                <td><?php echo htmlspecialchars($userData['providerEmail']); ?></td>
                <td><?php echo htmlspecialchars($userData['providerPhone']); ?></td>
                <td><?php echo htmlspecialchars($userData['providerAddress']); ?></td>
                <td><?php echo htmlspecialchars($userData['providerGender']); ?></td>
                <td><?php echo htmlspecialchars($userData['providerCategory']); ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>User data not found.</p>
    <?php endif; ?>
</body>
</html>