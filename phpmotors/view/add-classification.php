<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Classification</title>
    <link rel="stylesheet" href="../css/style.css">
<<<<<<< HEAD
</head>
<body>
    <div class="bg">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/cse340/phpmotors/snippets/header.php';?>
        </header>
        <nav>
            <?php echo $navList;?>
=======
    <link rel="stylesheet" href="../css/vehicles.css">
</head>
<body>
    <div class="bg">
    <header>
            <img src="../images/site/logo.png" alt="phpmotor_logo">
            <div class="myaccount" >
            <?php    
                
                echo $account;
                
            ?>
            </div>
        </header>

        <nav>
            <?php    
                
                echo $navList;
                
            ?>
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
        </nav>
        <div class="container-vehicles">
            <a href="?action=return">Management Menu</a> 
        </div>
<<<<<<< HEAD
            <?php
                if (isset($message)) {
                echo $message;
                }
            ?>
            <form method="post" action="../vehicles/index.php">
=======
        <?php
                if (isset($message)) {
                    echo $message;
                    }
            ?>
            
           
           <form method="post" action="../vehicles/index.php">
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
                <div class="container">
                <label>Add Classification</label>
                <input type="text" name="classificationName" id="cname"  <?php if (isset($classificationName)){echo "value='$classificationName'";}?> required>
                <input type="submit" name="submit" id="regbtn" value="Add Classification">
                <input type="hidden" name="action" value="add-class" >
                </div>
            </form>

<<<<<<< HEAD
            <?php    
                include 'footer.php';
            ?>
    </div>
    <script src="../js/script.js"></script>
</body>
=======
        <?php    
            include 'footer.php';
        ?>
        
    </div>
   
    <script src="../js/script.js"></script>
</body>

>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
</html>