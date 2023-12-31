<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <!-- Add your script tags and other meta tags here -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile · Bootstrap v5.3</title>

    <!-- Add your link tags here -->

    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
</head>
<body class="bg-body-tertiary">       
    <div class="container">
        <main>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Edit Profile</h4>

                <form class="needs-validation" novalidate action="../../includes/update.inc.php" method="post">
                    <div class="row g-3">

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name ="uid" id="username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-body-secondary"></span></label><br>
                            <input type="email" class="form-control" name ="email" id="email" placeholder="you@example.com">
                        </div>
                        <div class="col-12">
                            <label for="username" class="form-label">Password</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text"></span>
                                <input type="text" class="form-control" name ="pwd" id="username" placeholder="Username" required>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Submit</button>

                    </div>
                </form>


            </div>
            <!-- Buttons to return to the home page and submit the form -->
            <div class="text-center">
                <a href="../Home/home.php" class="btn btn-secondary">Return to Home Page</a>
            </div>
            <div class="text-center">
                <a href="profile.php" class="btn btn-secondary">Return to Profile Page</a>
            </div>
                
        </main>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p class="mb-1">&copy; 2017–2023 Ebook Eporium</p>
        </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="checkout.js"></script>
</body>
</html>
