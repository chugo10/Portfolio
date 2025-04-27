<?php
    require_once 'models/homeModel.php';
    require_once 'controller/homeController.php';
    require_once 'models/navbarmodel.php';
    require_once 'controller/navbarcontroller.php';
    require_once 'models/bandemodel.php';
    require_once 'controller/bandecontroller.php';
    require_once 'models/contact1model.php';
    require_once 'controller/contact1controller.php';

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
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.php">
    <link rel="stylesheet" href="contact1.php">
    <link rel="stylesheet" href="index.php">

    <title>contact</title>
</head>
<body>
    
<style> 

    .contact-section { 

      background-color: rgba(23, 48, 88, 1); 

      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); 

      display: flex; 

      flex-direction: column; 

      overflow: hidden; 

      padding: 16px 18px 47px; 

      border: 1px solid rgba(0, 0, 0, 1);
      min-height: 100vh; 

    } 

     

    .header-wrapper { 

      display: flex; 

      align-items: start; 

      gap: 24px; 

      color: rgba(241, 234, 226, 1); 

      flex-wrap: wrap; 

    } 

     

    .logo { 

      aspect-ratio: 1.18; 

      object-fit: contain; 

      object-position: center; 

      width: 64px; 

    } 

     

    .brand-title { 

      flex-grow: 1; 

      width: 343px; 

      font: 32px Inter, sans-serif; 

    } 

     

    .brand-name { 

      font-family: Roboto Serif, -apple-system, Roboto, Helvetica, sans-serif; 

      color: rgba(241, 234, 226, 1); 

    } 

     

    .brand-type { 

      font-family: Playfair Display, -apple-system, Roboto, Helvetica, sans-serif; 

      color: rgba(241, 234, 226, 1); 

    } 

     

    .nav-container { 

      align-self: stretch; 

      display: flex; 

      flex-direction: column; 

      justify-content: center; 

      padding: 10px; 

      font: 24px Roboto Serif, sans-serif; 

    } 

     

    .nav-links { 

      display: flex; 

      width: 100%; 

      align-items: start; 

      gap: 16px 54px; 

      overflow: hidden; 

      justify-content: space-between; 

      flex-wrap: wrap; 

    } 

     

    .nav-link { 

      color: rgba(239, 230, 222, 1); 

      width: 140px; 

    } 

     

    .form-container { 

      align-self: center; 

      position: relative; 

      display: flex; 

      margin-top: 22px; 

      width: 100%; 

      max-width: 946px; 

      align-items: end; 

      gap: 59px 76px; 

      overflow: hidden; 

      color: rgba(0, 0, 0, 1); 

      justify-content: start; 

      flex-wrap: wrap; 

      padding: 21px 16px; 

      font: 32px Roboto Serif, sans-serif; 

    } 

     

    .message-area { 

      z-index: 0; 

      display: flex; 

      min-width: 240px; 

      flex-direction: column; 

      overflow: hidden; 

      justify-content: center; 

      flex-grow: 1; 

      width: 708px; 

      padding: 3px 8px; 

    } 

     

    .input-group { 

      background-color: rgba(217, 217, 217, 1); 

      display: flex; 

      gap: 20px; 

      flex-wrap: wrap; 

      justify-content: space-between; 

      padding: 7px 10px; 

    } 

     

    .message-box { 

      background-color: rgba(217, 217, 217, 1); 

      z-index: 0; 

      display: flex; 

      min-width: 240px; 

      width: 700px; 
 

      flex-grow: 1; 

    } 

     

    .form-field { 

      align-self: stretch; 

      width: 249px; 

      background-color: rgba(217, 217, 217, 1); 

      min-width: 240px; 

      min-height: 42px; 

      gap: 10px; 

      overflow: hidden; 

      white-space: nowrap; 

      flex-grow: 1; 

    } 

     

    .submit-btn { 

      align-self: stretch; 

      width: 146px; 

      background-color: rgba(217, 217, 217, 1); 

      min-height: 49px; 

      gap: 10px; 

      overflow: hidden; 

      white-space: nowrap; 

      flex-grow: 1; 

    } 

     

    .visually-hidden { 

      position: absolute; 

      width: 1px; 

      height: 1px; 

      padding: 0; 

      margin: -1px; 

      overflow: hidden; 

      clip: rect(0, 0, 0, 0); 

      border: 0; 

    } 

     

    @media (max-width: 991px) { 

      .nav-container, 

      .nav-links, 

      .form-container, 

      .message-area, 

      .input-group, 

      .form-field { 

        max-width: 100%; 

      } 

       

      .form-field { 

        white-space: initial; 

      } 

    } 

    </style> 

     

    <div class="contact-section"> 

      <div class="header-wrapper"> 

        <img class="logo" src="<?=$logo?>" alt="Company Logo" /> 

        <div class="brand-title"> 

          <span class="brand-name"><?=$title?></span> 

          / 

          <span class="brand-type"><?=$title2?></span> 

        </div> 

        <nav class="nav-container"> 

          <div class="nav-links"> 

            <a href="contact1.php" class="nav-link" tabindex="0"><?=$lien1?></a> 

            <a href="contact.php" class="nav-link" tabindex="0"><?=$lien2?></a> 

            <a href="index.php" class="nav-link" tabindex="0"><?=$lien3?></a> 

          </div> 

        </nav> 

      </div> 

       

      <form class="form-container"> 

        <div class="message-area"> 

          <div class="input-group"> 

            <label for="name" class="visually-hidden"> <?=$nom?></label> 

            <input type="text" id="name" class="form-field" placeholder="<?=$nom?>" /> 

            <label for="message" class="visually-hidden">" <?=$message?>"</label> 

            <textarea id="message" class="form-field" placeholder=" <?=$message?>"></textarea> 

          </div> 

          <div class="message-box"></div> 

        </div> 

         

        <label for="email" class="visually-hidden"> <?=$email?></label> 

        <input type="email" id="email" class="form-field" placeholder="Email" /> 

         

        <label for="number" class="visually-hidden"> <?=$numero?></label> 

        <input type="tel" id="number" class="form-field" placeholder="n°" /> 

         

        <button type="submit" class="submit-btn"> <?=$envoyer?></button> 

      </form> 

    </div>
</body>
</html> 

 
 
