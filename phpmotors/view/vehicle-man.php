<<<<<<< HEAD
<?php
    if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('location: /phpmotors/');
    exit;
    }
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
    }
?>

=======
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Management</title>
    <link rel="stylesheet" href="../css/style.css">
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="../css/vehicles.css">
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
</head>
<body>
    <div class="bg">
        <header>
<<<<<<< HEAD
            <?php require $_SERVER['DOCUMENT_ROOT'].'/cse340/phpmotors/snippets/header.php'; ?>
=======
            <img src="../images/site/logo.png" alt="phpmotor_logo">
            <div class="myaccount"><?php echo $account;?></div>
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
        </header>

        <nav>
            <?php echo $navList;?>
        </nav>

<<<<<<< HEAD
     
        <div class="container-vehicles">
            <a href="?action=add-classification">Add Classification</a> 
            <a href="?action=add-vehicles">Add Vehicle</a> 

            <?php
                if (isset($message)) { 
                echo $message; 
                } 
                if (isset($classificationList)) { 
                echo '<h2>Vehicles By Classification</h2>'; 
                echo '<p>Choose a classification to see those vehicles</p>'; 
                echo $classificationList; 
                }
            ?>
        </div>
        

    <noscript>
        <p><strong>JavaScript Must Be Enabled to Use this Page.</strong></p>
    </noscript>

    <table id="inventoryDisplay"></table>
        <?php    
            include 'footer.php';
        ?>
    </div>
    <script src="../js/inventory.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>
<?php unset($_SESSION['message']); ?>
=======
        <?php
                if (isset($message)) {
                    echo $message;
                    }
        ?>
            
        <div class="container-vehicles">
            <a href="?action=add-classification">Add Classification</a> 
            <a href="?action=add-vehicles">Add Vehicle</a> 
        </div>
            

        <?php    
            include 'footer.php';
        ?>
        
    </div>
   
    <script src="../js/script.js"></script>
</body>

</html>
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
