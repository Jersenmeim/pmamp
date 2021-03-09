<?php
// Build the navigation option list
function navBarPopulate($carclassifications) {
   // Build a navigation bar using the $classifications array
   $navList = '<ul>';
   $navList .= "<li><a href='/cse340/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
   foreach ($carclassifications as $classification) {
      $navList .= "<li><a href='/cse340/phpmotors/vehicles/?action=classification&classificationName=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] lineup of vehicles'>$classification[classificationName]</a></li>";
   }
   $navList .= '</ul>';
   return $navList;
}

// Check Email
   function checkEmail($clientEmail){
      $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
      return $valEmail;
   }

//Check Password

   function checkPassword($clientPassword){
      $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
   return preg_match($pattern, $clientPassword);
   }

// Build the classifications option list
   function buildClassificationList($classifications){ 
      $classificationList = '<select name="classificationId" id="classificationList">'; 
      $classificationList .= "<option>Choose a Classification</option>"; 
      foreach ($classifications as $classification) { 
      $classificationList .= "<option value='$classification[classificationId]'>$classification[classificationName]</option>"; 
      } 
      $classificationList .= '</select>'; 
      return $classificationList; 
   }

   function getInventoryByClassification($classificationId){ 
      $db = phpmotorsConnect(); 
      $sql = ' SELECT * FROM inventory WHERE classificationId = :classificationId'; 
      $stmt = $db->prepare($sql); 
      $stmt->bindValue(':classificationId', $classificationId, PDO::PARAM_INT); 
      $stmt->execute(); 
      $inventory = $stmt->fetchAll(PDO::FETCH_ASSOC); 
      $stmt->closeCursor(); 
      return $inventory; 
   }

   //Build Vehicle Display
   function buildVehiclesDisplay($vehicles){
      $dv = '<ul id="inv-display">';
      foreach ($vehicles as $vehicle) {
      $dv .= '<li>';
      $dv .= "<a href='/cse340/phpmotors/vehicles/?action=pullVehicleData&vehicleId={$vehicle["invId"]}'>";
      $dv .= "<img src='$vehicle[invThumbnail]' alt='Image of $vehicle[invMake] $vehicle[invModel] on phpmotors.com'>";
      $dv .= "</a>";
     
      $dv .= "<a href='/cse340/phpmotors/vehicles/?action=pullVehicleData&vehicleId={$vehicle["invId"]}'><h2>$vehicle[invMake] $vehicle[invModel]</h2></a>";
      $dv .= "<span>$$vehicle[invPrice]</span>";
      $dv .= '</li>';
     
      }
      $dv .= '</ul>';
      return $dv;
   }
   function vehicleDetailPage($vehicle) {
      $money = number_format($vehicle['invPrice'], 2, ".", ",");
      $dv = "<h1>$vehicle[invMake] $vehicle[invModel]</h1>";
      $dv .= "<img src='$vehicle[invImage]' alt='Image of $vehicle[invMake] $vehicle[invModel] on phpmotors.com'>";
      $dv .= "<p>Price: $$money</p>";
      $dv .= '<hr>';
      $dv .= "<h2>$vehicle[invMake] $vehicle[invModel] Details</h2>";
      $dv .= "<p>$vehicle[invDescription]</p>";
      $dv .= "<p><b>Color: </b>$vehicle[invColor]</p>";
      $dv .= "<p><b>Quantity in Stock: </b>$vehicle[invStock]</p>";
     
      return $dv;
   }

?>  

