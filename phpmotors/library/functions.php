<<<<<<< HEAD
<?php
// Build the navigation option list
function navBarPopulate($carclassifications) {
   // Build a navigation bar using the $classifications array
   $navList = '<ul id="ul">';
   $navList .= "<li id='click' ><a>Menu</a></li>";
   $navList .= "<li class='link' ><a href='/cse340/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
   foreach ($carclassifications as $classification) {
      $navList .= "<li class='link'><a href='/cse340/phpmotors/vehicles/?action=classification&classificationName=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] lineup of vehicles'>$classification[classificationName]</a></li>";
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
      $dv .= "<div><a href='/cse340/phpmotors/vehicles/?action=pullVehicleData&vehicleId={$vehicle["invId"]}'>";
      $dv .= "<img src='$vehicle[invThumbnail]' alt='Image of $vehicle[invMake] $vehicle[invModel] on phpmotors.com'>";
      $dv .= "</a></div>";
      $dv .= "<hr>";
      $dv .= '<div class="container">';
      $dv .= "<a href='/cse340/phpmotors/vehicles/?action=pullVehicleData&vehicleId={$vehicle["invId"]}'><h2>$vehicle[invMake] $vehicle[invModel]</h2></a>";
      $dv .= "<span>Price: $$vehicle[invPrice]</span>";
      $dv .= '</div>';
      $dv .= '</li>';
     
      }
      $dv .= '</ul>';
      return $dv;
   }
   function vehicleDetailPage($vehicle) {
      $money = number_format($vehicle['invPrice'], 2, ".", ",");
      $dv = "<h2>$vehicle[invMake] $vehicle[invModel]</h2>";
      $dv .= "<div class='vehicle-details'>";
      $dv .= "<img src='$vehicle[invImage]' alt='Image of $vehicle[invMake] $vehicle[invModel] on phpmotors.com'>";
      $dv .= "<p>Price: $$money</p>";
      $dv .= '<hr>';
      $dv .= "<h2>$vehicle[invMake] $vehicle[invModel] Details</h2>";
      $dv .= "<p>$vehicle[invDescription]</p>";
      $dv .= "<p><b>Color: </b>$vehicle[invColor]</p>";
      $dv .= "<p><b>Quantity in Stock: </b>$vehicle[invStock]</p>";
      $dv .= "</div>";
     
      return $dv;
   }
=======


<?php
$account = '<a href="../phpmotors/accounts/index.php?action=login-form">My Account</a>';
$maccount = '<a href="../accounts/index.php?action=login-form">My Account</a>';

// Build the navigation option list


function navBarPopulate($classifications) {
   // Build a navigation bar using the $classifications array
  
   
   function nav1($classifications){
      $navList = '<ul>';
      $navList .= '<li>
      <a href="../index.php?action="  title="View the PHP Motors home page">Home</a></li>';
      foreach ($classifications as $classification) {
       $navList .= "<li><a href='../index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
      }
      $navList .= '</ul>';
      return $navList;
   }

   function nav2($classifications){

      $navList = '<ul>';
      $navList .= '<li>
      <a href="./index.php?action="  title="View the PHP Motors home page">Home</a></li>';
      foreach ($classifications as $classification) {
       $navList .= "<li><a href='./index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
      };
      $navList .= '</ul>';
      return $navList;

      }

   

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
      return  $classifList;
}


>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20

?>  

