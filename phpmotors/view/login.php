<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="/cse340/phpmotors/css/style.css">
=======
    <link rel="stylesheet" href="../css/style.css">
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
    
</head>
<body>
    <div class="bg">
<<<<<<< HEAD
        
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/cse340/phpmotors/snippets/header.php'; ?>
=======
        <header>
            <img src="../images/site/logo.png" alt="phpmotor_logo">
            <div class="myaccount" >
            <?php    
                echo $maccount;
            ?>
            </div>
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
        </header>

        <nav>
            <?php    
<<<<<<< HEAD
                echo $navList;
=======
                
                echo $navList;
                
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
            ?>
        </nav>

        <?php
<<<<<<< HEAD
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
        ?>
            <form method="post" action="/cse340/phpmotors/accounts/">

                <div class="container">
                <label for="clientEmail"><b>Username</b></label>
                <input type="email" name="clientEmail" id = "clientEmail" <?php if (isset($clientEmail)){echo "value='$clientEmail'";}?> required placeholder="Enter a valid email address">
=======
        if (isset($message)) {
        echo $message;
        }
        ?>
            <form action="#">

                <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="email" name="clientEmail" <?php if (isset($clientEmail)){echo "value='$clientEmail'";}?> required placeholder="Enter a valid email address">
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20

                
                <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> 
                <input type="password" name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">

                <button type="submit">Login</button>
                <input type="hidden" name="action" value="Login">
                <a href="?action=register-form">not a member yet?</a>

                </div>
        
            </form>
            

            <?php    
<<<<<<< HEAD
                include 'footer.php';
=======
            include 'footer.php';
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
            ?>
        
    </div>
   
<<<<<<< HEAD
    <script src="/cse340/phpmotors/js/script.js"></script>
   
</body>

</html>
<?php unset($_SESSION['message']); ?>
=======
    <script src="../js/script.js"></script>
</body>

</html>
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
