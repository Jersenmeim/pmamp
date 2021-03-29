<?php
     // Build the classifications option list
     $classifList = '<select name="classificationId" id="classificationId">';
     foreach ($classifications as $classification) {
     $classifList .= "<option value='$classification[classificationId]'";
     if(isset($classificationId)){
     if($classification['classificationId'] === $classificationId){
     $classifList .= ' selected ';
     }
     } elseif(isset($invInfo['classificationId'])){
     if($classification['classificationId'] === $invInfo['classificationId']){
     $classifList .= ' selected ';
     }
     }
     $classifList .= ">$classification[classificationName]</option>";
     }
     $classifList .= '</select>';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vehicle</title>
    <link rel="stylesheet" href="../css/style.css">
<<<<<<< HEAD
</head>
<body>
    <div class="bg">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/cse340/phpmotors/snippets/header.php'; ?>
        </header>

        <nav>
            <?php echo $navList; ?>
        </nav>

        <div class="container-vehicles">
            <a href="?action=return">Management Menu</a> 
        </div>

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

        <nav><?php echo $navList; ?></nav>
        <div class="container-vehicles">
            <a href="?action=return">Management Menu</a> 
        </div>
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
        <?php
            if (isset($message)) {
                echo $message;
                }
        ?>
<<<<<<< HEAD

=======
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
        <form method="post" action="../vehicles/index.php">
                <div class="container">
                <h3>Add Vehicle</h3>
                <label>Choose a car Classification</label>
<<<<<<< HEAD
                <br>
                <?php echo $classifList;?>
=======
               <br>
                <?php echo $classifList;?>
              
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
                <br>
                <label>Make</label>
                <input type="text" name="invMake" id="mname" <?php if (isset($invMake)){echo "value='$invMake'";}?> required>
                <label>What Model?</label>
                <input type="text" name="invModel" id="moname" <?php if (isset($invModel)){echo "value='$invModel'";}?> required>
                <label>Description</label>
                <textarea name="invDescription" id="dcname" cols="30" rows="5" required><?php if (isset($invDescription)){echo "$invDescription";}?></textarea>
                <label>Image</label>
<<<<<<< HEAD
                <input type="text" name="invImage" id="imagefile" <?php if (isset($invImage)){echo "value='$invImage'";}?> value="/cse340/phpmotors/images/vehicles/no-image.png" required>
                <!-- value="/cse340/phpmotors/images/vehicles/no-image.jpg" -->
                <label>Thumbnail</label>
                <input type="text" name="invThumbnail" id="thumbnailfile" value="/cse340/phpmotors/images/vehicles/no-image.png" <?php if (isset($invThumbnail)){echo "value='$invThumbnail'";}?> required>
                <!-- value="/cse340/phpmotors/images/vehicles/no-image.jpg" -->
=======
                <input type="text" name="invImage" id="imagefile" <?php if (isset($invImage)){echo "value='$invImage'";}?> value="/images/no-image.jpg" required>
                <!-- value="/images/no-image.jpg" -->
                <label>Thumbnail</label>
                <input type="text" name="invThumbnail" id="thumbnailfile" value="/images/no-image.jpg" <?php if (isset($invThumbnail)){echo "value='$invThumbnail'";}?> required>
                <!-- value="/images/no-image.jpg" -->

>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20

                <label>Price</label>
                <input type='number'  step="1" min="0" name="invPrice" id="prname" <?php if (isset($invPrice)){echo "value='$invPrice'";}?> required>
                <label>Color</label>
                <input type="text" name="invColor" id="coname" pattern="[^0-9]*" <?php if (isset($invColor)){echo "value='$invColor'";}?> required>
                <label>Stocks left?</label>
                <input type="number"  min="0" name="invStock" id="stockname" <?php if (isset($invStock)){echo "value='$invStock'";}?> required>
<<<<<<< HEAD
=======
                
                
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20

                <input type="submit" name="submit" id="regbtn" value="Add Vehicle">
                <input type="hidden" name="action" value="add-vehicle" >
                </div>
            </form>

        <?php    
            include 'footer.php';
        ?>
        
    </div>
<<<<<<< HEAD
=======
   
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
    <script src="../js/script.js"></script>
</body>

</html>