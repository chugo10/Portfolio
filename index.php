<?php
    require_once 'models/homeModel.php';
    require_once 'controller/homeController.php';
    require_once 'models/navbarmodel.php';
    require_once 'controller/navbarcontroller.php';
    require_once 'models/bandemodel.php';
    require_once 'controller/bandecontroller.php';
    require_once 'models/contact1model.php';
    require_once 'controller/contact1controller.php';
    require_once 'models/contactmodel.php';
    require_once 'controller/contactcontroller.php';

    $pdo = require 'models/connect.php';
    // execute a query home
    $homeModel = new HomeModel($pdo);
    $homeController = new HomeController($homeModel);
    $title = $homeController->getTitle();
    $title2 = $homeController->getTitle2();
    $subtitle = $homeController->getSubtitle();
    $logo = $homeController->getLogo();

    $navbarmodel = new navbarmodel($pdo);
    $navbarcontroller = new navbarcontroller($navbarmodel);
    $lien1 = $navbarcontroller->getLien1();
    $lien2 = $navbarcontroller->getLien2();
    $lien3 = $navbarcontroller->getLien3();

    $bandemodel = new bandemodel($pdo);
    $bandecontroller = new bandecontroller($bandemodel);
    $bande2text1 = $bandecontroller->getBande2text1();
    $bande2text2 = $bandecontroller->getBande2text2();
    $imagebande1 = $bandecontroller->getimagebande1();
    $imagebande2 = $bandecontroller->getimagebande2();

    $contact1model = new contact1model($pdo);
    $contact1controller = new contact1controller($contact1model);
    $nom = $contact1controller->getNom();
    $message = $contact1controller->getmessage();
    $email = $contact1controller->getemail();
    $numero = $contact1controller->getnumero();
    $envoyer = $contact1controller->getenvoyer();

    $contactmodel = new contactmodel($pdo);
    $contactcontroller = new contactcontroller($contactmodel);
    $image1gauche = $contactcontroller->getimage1gauche();
    $text = $contactcontroller->gettext();
    $image2droite = $contactcontroller->getimage2droite();
?> 

<!DOCTYPE html> 

<html lang="fr-FR"> 

<head> 

    <meta charset="UTF-8"> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.php">
    <link rel="stylesheet" href="contact1.php">

    <title>portfolio</title> 

</head> 

<body> 

     

<style> 
    </style> 

     

    <div class="portfolio-container"> 

      <div class="header-wrapper"> 

        <nav class="nav-container"> 

          <div class="logo-wrapper"> 

            <img loading="lazy" src="<?=$logo?>" class="logo-image" alt="Portfolio Logo" /> 

          </div> 

          <div class="header-title"> 

            <span class="title-roboto"> <?=$title?></span> 

     

          </div>
          <div class="nav-menu"> 

            <div class="menu-items"> 
  
              <a href="contact1.php" class="menu-link"><?=$lien1?></a> 
  
              <a href="contact.php" class="menu-link"><?=$lien2?></a> 
  
              <a href="#portfolio" class="menu-link"><?=$lien3?></a> 
  
            </div> 
  
          </div>  

        </nav> 

        

      </div> 

      <main class="main-content"> 

        <section class="intro-card"> 

          <div class="intro-wrapper"> 

            <div class="intro-image-wrapper"> 

              <img loading="lazy" src="<?=$imagebande1?>" class="intro-image" alt="Introduction Visual" /> 

            </div> 

            <p class="intro-text"><?=$subtitle?></p> 

          </div> 

        </section> 

        <section class="profile-card"> 

          <div class="profile-content"> 

            <h1 class="profile-text"><?=$bande2text1?></h2>
            
            <nav>
                <a href="profile.php" class="profile-text">PROFILE</a>
                <a href="project.php" class="project-text">PROJECT</a>
            </nav>


            <h1 class="project-text"><?=$bande2text2?></h2> 

            <img loading="lazy" src="<?=$imagebande2?>" class="profile-image" alt="Profile Project Showcase" /> 

          </div> 

        </section> 

      </main> 

    </div> 

</body> 

</html> 

