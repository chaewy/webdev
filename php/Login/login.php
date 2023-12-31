
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

<form id="signup-form" action="../../includes/login.inc.php" method="post">
<?php
session_start();

    if(isset($_SESSION['error'])) {
        $errorMessage = $_SESSION['error'];
            
        // Display the error message
        echo "<p style='color: red;'>$errorMessage</p>";
            
        // Clear the error message from the session to avoid displaying it on subsequent visits
        unset($_SESSION['error']);
    }
?>
    <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none"><h1>Ebook Emporium</h1></a>
    </div>

    <label for="username">Username:</label>
    <input type="text" id="username" name="uid" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="pwd" required>

    <button type="submit" name="submit">Login</button>
</form>

  <!-- <script>
    function validateForm() {
      var username = document.getElementById('username').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;

      // Simple validation, you can add more checks as needed
      if (!username || !email || !password) {
        document.getElementById('error-message').innerText = 'All fields are required.';
      } else {
        document.getElementById('error-message').innerText = '';

        // If all fields are filled, you can proceed with further actions, e.g., sending data to the server.
        // For a real-world scenario, you would perform server-side validation and store user data securely.
        // Example: sendUserDataToServer(username, email, password);
      }
    }
  </script> -->

</body>
</html>
