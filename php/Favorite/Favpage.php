<?php
    session_start();
    require_once '../../classes/dbh.classes.php';

    // Check if the user is logged in
    if (!isset($_SESSION['userid'])) {
        header('Location: ../Home/home.php?notlogin');
        exit();
    }

    $userId = $_SESSION['userid'];
    $db = new Dbh();
    $conn = $db->conn;

    $stmt = $conn->prepare('SELECT B.*, F.*
    FROM book B
    JOIN favorites F ON B.book_id = F.book_id
    WHERE F.users_id = ?');
    $stmt->execute([$userId]);
    $userFavorites = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook Emporium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Favpage.css"> 
    <style>
        /* Add your custom styles here */

        .search-container {
            position: relative;
        }

        .search-bar {
            width: 0;
            overflow: hidden;
            transition: width 0.3s ease;
        }

        .search-bar input {
            width: 100%;
            padding: 5px;
        }

        .custom-signup-btn {
            margin-left: 10px;
        }

        .image-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
        }

        #changeColor {
            color: #007bff; /* Change color as needed */
        }

        .album {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .card {
            margin-bottom: 1.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body> 
    <div class="container">
        <header class="border-bottom lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="../Profile/profile.php">Profile</a>
                </div>

                <div class="col-4 text-center">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Ebook Emporium</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center search-container">
                    <a class="link-secondary" href="#" aria-label="Search" onclick="toggleSearch()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                    </a>
                    <div class="search-bar">
                        <form action="../Search/search.php" method="post">
                            <input type="text" name="usersearch" placeholder="Search..." onkeypress="submitOnEnter(event)">
                        </form>
                    </div>
                    <?php
                        if(isset($_SESSION["userid"])) {
                    ?>
                        <a class="btn btn-sm btn-outline-secondary custom-signup-btn" href="../../includes/logout.inc.php">Logout</a>
                    <?php
                        } else {
                    ?>
                        <a class="btn btn-sm btn-outline-secondary custom-signup-btn" href="../Signup/SignUp.php">Sign up</a>
                    <?php
                        }
                    ?>


            </div>
        </header>
    </div>

    <script>
        function toggleSearch() {
            var searchContainer = document.querySelector('.search-container');
            var searchBar = document.querySelector('.search-bar');

            if (searchContainer.classList.contains('expanded')) {
                // Close the search bar
                searchContainer.classList.remove('expanded');
                searchBar.style.width = 0;
            } else {
                // Expand the search bar
                searchContainer.classList.add('expanded');
                searchBar.style.width = '200px'; // You can adjust the width as needed
            }
        }
    </script>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-center">
            <a class="nav-item nav-link link-body-emphasis" href="../Home/home.php">Home</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Trending</a>
            <a class="nav-item nav-link link-body-emphasis" href="../Author/Authorpage.php">Author</a>
            <a class="nav-item nav-link link-body-emphasis active " href="Favpage.php">Favourite</a>
        </nav>
    </div>

        <main>
        <div class="container">
            <div class="album py-5 bg-body-tertiary">
                <h1>Favorites Book</h1>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-2">
                    <?php foreach ($userFavorites as $favorite): ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <a href="../BookPage/Bookpage.php?id=<?php echo urlencode($favorite["book_id"]); ?>">
                                    <img src="<?php echo $favorite["book_image"]; ?>" class="card-img-top" alt="Book Image">
                                </a>
                                <div class="card-body">
                                    <p class="book_name"><b><?php echo $favorite["book_name"]; ?></b></p>
                                    <p class="author_name"><?php echo $favorite["book_author"]; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <footer class="my-5 pt-5 text-body-secondary text-center text-small">
                <p class="mb-1">&copy; 2017–2023 Ebook Eporium</p>
             </footer>
        </div>
    </footer>