<?php
    
    if($_SESSION['clientData']['clientLevel'] < 2){
        header('location: /phpmotors/');
        exit;
       }
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($invInfo['invMake'])){ 
	echo "Delete $invInfo[invMake] $invInfo[invModel]";} ?> | PHP Motors</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/vehicles.css">
</head>
<body>
    <div class="bg">
    <header>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/cse340/phpmotors/snippets/header.php'; ?>
        </header>

        <nav><?php echo $navList; ?></nav>
        <div class="container-vehicles">
            <a href='/cse340/phpmotors/vehicles?action=return'>Management Menu</a> 
        </div>
        <?php
            if (isset($message)) {
                echo $message;
                }
        ?>
            <h1><?php if(isset($invInfo['invMake'])){ 
	echo "Delete $invInfo[invMake] $invInfo[invModel]";} ?> | PHP Motors</h1>
    <p>Confirm Vehicle Deletion. The delete is permanent.</p>
        <form method="post" action="../vehicles/index.php">
                <div class="container">
        
                <label for="invMake">Make</label>
                <input type="text" readonly name="invMake" id="invMake" <?php
            if(isset($invInfo['invMake'])) {echo "value='$invInfo[invMake]'"; }?>>

                <label for="invModel">Vehicle Model</label>
                <input type="text" readonly name="invModel" id="invModel" <?php
            if(isset($invInfo['invModel'])) {echo "value='$invInfo[invModel]'"; }?>>

                <label for="invDescription">Vehicle Description</label>
                <textarea name="invDescription" readonly id="invDescription"><?php
            if(isset($invInfo['invDescription'])) {echo $invInfo['invDescription']; }
            ?></textarea>
            
                

                <input type="submit" id="regbtn" name="submit" value="Delete Vehicle">

                <input type="hidden" name="action" value="deleteVehicle">
                <input type="hidden" name="invId" value="<?php if(isset($invInfo['invId'])){
                echo $invInfo['invId'];} ?>">
                </div>
            </form>

        <?php    
            include 'footer.php';
        ?>
        
    </div>
   
    <script src="../js/script.js"></script>
</body>

</html>