<?php

session_start();
$isLoggedIn=isset($_SESSION['userId']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <ul>
                    
                    <?php if (!$isLoggedIn): ?>
                    <h1>Blog Website</h1>


                    <li><a href="login.php" id="login">Login</a></li>
                    <li><a href="signup.php" id="signup">Sign Up</a></li>
                    <li><a href="login.php" id="write_blog">Create your own Blog</a></li>

                    <?php else: ?>
                    <h1>Blog Website</h1>
                    <h1>Hello <?php echo $_SESSION['userName']; ?></h1>
                    
                    <li><a href="logout.php" id="logout">Log Out</a></li>
                    <li><a href="blog.php" id="write_blog">Create your own Blog</a></li>
                    <?php endif;?>
                    
                </ul>
            </nav>
        </header>
        <main>

            <section id="blogs" class="blogs">
                <!-- <div class="blog-card">
                    <div class="blog">
                        <h3>Blog Title 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus gravida ligula in turpis
                            tempus, vel feugiat metus fermentum. Sed auctor ex sed nibh sollicitudin ultricies.</p>
                    </div>
                </div> -->
                <!-- Additional blog cards go here -->
            </section>

        </main>
    </div>
    <script src="app.js"></script>
</body>

</html>
