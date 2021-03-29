<?php
<<<<<<< HEAD
      //create a session
      session_start();
=======


>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
      // Get the database connection file
      require_once 'library/connections.php';
      // Get the PHP Motors model for use as needed
      require_once 'model/main-model.php';
      // Get the functions library
      require_once 'library/functions.php';

      // get the classifications
      $classifications = getClassifications();
      //populate navbar
<<<<<<< HEAD
      $navList = navBarPopulate($classifications);
=======
      $navList = navBarPopulate($classifications).nav2($classifications);
      


>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
      $action = filter_input(INPUT_POST, 'action');
      if ($action == NULL){
      $action = filter_input(INPUT_GET, 'action');
      }

      switch ($action){
<<<<<<< HEAD
         case 'template':
            include 'view/template.php';
         break;
         default:
=======


         case 'template':
            include 'view/template.php';
            break;
            default:
>>>>>>> bd9a50abed3269661b68cd183e82b7e85bdffd20
               include 'view/home.php';
      }
?>