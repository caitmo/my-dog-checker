<?php
session_start();

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dog Checker</title>
    <style>
     <?php include "style.css" ?>
    </style>
</head>

<body class="background">

    <div class="container">
       
    <div>
        
    </div>

        

        <main class="main-format">
            <h1> Dog Checker </h1>

            <iframe width="640" height="480"
            src="http://192.168.1.152:8081/">
            </iframe>
         

        <section class="section is-large">
                </section>

        </main>

        <footer class="copyright">
            <p>My Dog Checker</p>
        </footer>
</div>
        

    


</body>

</html>