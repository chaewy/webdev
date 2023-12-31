<?php
session_start();

// Include the Dbh class definition
require_once "../../classes/dbh.classes.php";

// Check if the user is logged in
if (!isset($_SESSION["userid"])) {
    header('Location: ../Home/home.php?notlogin');
    exit();
}

// Fetch user data from the database
try {
    $dbh = new Dbh();

    $id = $_SESSION["userid"];
    $query = "SELECT users_uid, users_pwd, users_email FROM users WHERE users_id = :id";
    $stmt = $dbh->conn->prepare($query);
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    // Fetch the user data
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .profile-container h1 {
            color: #333;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        .profile-info span {
            display: block;
            margin-top: 5px;
        }

        .edit-profile-btn {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .edit-profile-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>User Profile</h1>
        <div class="profile-info">
            <label for="username">Username:</label>
            <span id="username"><?php echo htmlspecialchars($userData['users_uid']); ?></span>
        </div>
        <div class="profile-info">
            <label for="email">Email:</label>
            <span id="email"><?php echo htmlspecialchars($userData['users_email']); ?></span>
        </div>
        <div class="profile-info">
            <label for="password">Password:</label>
            <span id="password">********</span>
        </div>
        <button class="edit-profile-btn" onclick="editProfile()">Edit Profile</button>

        <div class="text-center">
                <br><a href="../Home/home.php" class="btn btn-secondary">Return to Home Page</a>
        </div>
    </div>

    <script>
        function editProfile() {
            // Redirect to the editprofile.php page
            window.location.href = 'editprofile.php';
        }
    </script>
</body>
</html>
