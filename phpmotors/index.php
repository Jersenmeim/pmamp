<?php


      // Get the database connection file
      require_once 'library/connections.php';
      // Get the PHP Motors model for use as needed
      require_once 'model/main-model.php';
      // Get the functions library
      require_once 'library/functions.php';

      // get the classifications
      $classifications = getClassifications();
      //populate navbar
      $navList = navBarPopulate($classifications).nav2($classifications);
      
      if(isset($_COOKIE['firstname'])){
         $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
        }

      $action = filter_input(INPUT_POST, 'action');
      if ($action == NULL){
      $action = filter_input(INPUT_GET, 'action');
      }

      switch ($action){


         case 'template':
            include 'view/template.php';
            break;
            default:
               include 'view/home.php';
      }
?>