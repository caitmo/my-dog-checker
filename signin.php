<?php
//Check if session is set/user is logged in and redirect to index if so
if(isset($_SESSION['username']))
	{ 
		header("Location: index");
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

    <body class ="background">

        <div class="container">

            <div class="web-title">
                <p> My Dog Checker </p>
            </div>

            <main class ="main-format-login">

                <div class="login-form">

                    <h1 class="big-text"> Log in to check your dog! </h1>
                
                    <!-- Login form -->
                    <form name="login" action="" method="post">
                        
                    <label for="username">Username:</label>
                    
                    <input id="username" type="text" name="username" value="" required/><br/>

                     <label for="password">Password:</label>

                     <input id="password" type="password" name="password" value="" required/><br/>

                     <input type="submit" name="submit" value="Log In" class="button is-warning is-large is-dark"/>
                     </form>
                </div> 

                <!-- Adapted from code in reference 15-->
                <?php
                session_start();
                //Array to store usernames and passwords
                 $userinfo = array(
                    'caitm'=>'dogwatch23',
                    'danc'=>'dogwatch07'
                     );

                //If user is already logged in, redirect to index
                if(isset($_GET['logout'])) {
                $_SESSION['username'] = '';
                header('Location: "index.php" ' . $_SERVER['PHP_SELF']);
                }

                //Checks if username and password match and redirects to index if they do. Sets the session
                 if(isset($_POST['username'])) {
                     if($userinfo[$_POST['username']] == $_POST['password']) {
                        $_SESSION['username'] = $_POST['username'];
                        header('Location: "index.php" ');
                     } else {
                        //Invalid Login - redirects back to login page
                        echo "<p class='big-text'> Invalid login details, try again </p>";
                    }
                }
            ?>

            </main>

            <div class = "footer-wrap">
                <footer class="footer-banner">
                    <p>My Dog Checker</p>
                </footer>

            </div>

     </body>

</html>