<?php
//Start the session for the user
session_start();

//If the user is not logged in, redirect to sign in page
if(!isset($_SESSION['username']))
	{ 
		header("Location: signin.php");
} else {
        
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Meta tags for device responsiveness --->
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">

        <title>My Dog Checker Login</title>

        <link rel="stylesheet" href="style.css">
        <!-- Stylesheet for Special Elite font -->
        <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Stylesheet for Bulma framework - buttons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    </head>

<body class="background">
   
    <div class="container">
       
        <div class = "web-title">
            <h1> My Dog Checker </h1>
        </div>
        
        <main class="main-format">
            <p class = "big-text"> Have a look at us! </p>
            <div class ="video-container">

                <!--- iframe with ip address and port for the Raspberry Pi camera --->
                <iframe title="Live feed of Raspberry Pi camera" class="responsive-iframe"
                src="http://86.162.87.69:8080/">
                </iframe>
            </div>

            <!-- Function to create playmusic.txt, that the Bash script detectfile will search for -->
            <?php
            function myFunction() {
                shell_exec("cd /var/www/html/ ; sudo touch playmusic.txt");
                }
            if (isset($_GET['submit'])) {
                myFunction();
                }
            ?>

            <div class = "home-buttons">
                <div class = "button-options">
                    
                    <!-- Button to play music -->
                    <a href='index.php?submit=true' type='submit' name='submit' class='button is-warning is-large is-responsive is-dark'>Play Music</a>
    
                    <?php
                    //Button to sign out of My Dog Checker
		            echo "<a class='button is-warning is-large is-responsive is-dark' type='submit' href='signout.php'>
		            Log Out </a>";
	                ?>

                </div>
            </div>
        </main>

        <div class = "footer-wrap">
            <footer class="footer-banner">
                <p>My Dog Checker</p>
            </footer>
        </div>
    </div>
</body>

</html>