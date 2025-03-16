<?php
    // connect to the database to get the PDO instance
    $pdo = require 'include/connect.php';

    $sql = 'SELECT * FROM home,navbar,main';
    $statement = $pdo->query($sql);
    $user_data = $statement->fetch(PDO::FETCH_ASSOC);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>about me</title>
  
</head>
<body>
  
<style> 

    .portfolio-container { 

      background-color: rgba(23, 48, 88, 1); 

      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); 

      display: flex; 

      flex-direction: column; 

      overflow: hidden; 

      padding: 17px 18px 38px; 

      border: 1px solid rgba(0, 0, 0, 1); 
      min-height: 100vh; 

    } 

    .header-wrapper { 

      display: flex; 

      width: 100%; 

      gap: 22px; 

      color: rgba(241, 234, 226, 1); 

      font-weight: 400; 

    } 

    .logo { 

      aspect-ratio: 1.18; 

      object-fit: contain; 

      object-position: center; 

      width: 64px; 

    } 

    .title-text { 

      align-self: start; 

      flex-grow: 1; 

      width: 343px; 

      font: 32px Inter, sans-serif; 

    } 

    .nav-menu { 

      display: flex; 

      align-items: start; 

      gap: 16px 54px; 

      overflow: hidden; 

      justify-content: space-between; 

      flex-wrap: wrap; 

      margin: auto 0; 

      font: 24px Roboto Serif, sans-serif; 

    } 

    .nav-contact { 

      color: rgba(239, 230, 222, 1); 

      width: 125px; 

    } 

    .nav-about { 

      width: 135px; 

      color: rgba(241, 234, 226, 1); 

    } 

    .nav-portfolio { 

      width: 152px; 

      color: rgba(241, 234, 226, 1); 

    } 

    .content-wrapper { 

      display: flex; 

      margin-top: 13px; 

      width: 100%; 

      gap: 40px 74px; 

      flex-wrap: wrap; 

    } 

    .text-section { 

      align-self: start; 

      margin-top: 14px; 

      flex-grow: 1; 

      flex-basis: auto; 

    } 

    .content-row { 

      gap: 20px; 

      display: flex; 

    } 

    .image-column { 

      display: flex; 

      flex-direction: column; 

      line-height: normal; 

      width: 27%; 

      margin-left: 0px; 

    } 

    .moon-image-wrapper { 

      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25); 

      display: flex; 

      min-height: 143px; 

      align-items: start; 

      gap: 10px 0px; 

      align-self: stretch; 

      overflow: hidden; 

      justify-content: space-between; 

      flex-wrap: wrap; 

      margin: auto 0; 

      border: 2px solid rgba(203, 186, 158, 1); 

    } 

    .moon-image { 

      aspect-ratio: 1.51; 

      object-fit: contain; 

      object-position: center; 

      width: 216px; 

      flex: 1; 

      flex-basis: 0%; 

    } 

    .text-column { 

      display: flex; 

      flex-direction: column; 

      line-height: normal; 

      width: 73%; 

      margin-left: 20px; 

    } 

    .greeting-text { 

      flex-grow: 1; 

      overflow: hidden; 

      color: rgba(255, 255, 255, 1); 

      white-space: nowrap; 

      padding: 12px 12px 358px; 

      font: 400 24px Inter, sans-serif; 

      border: 1px solid rgba(241, 234, 226, 1); 

    } 

    .sea-image-wrapper { 

      transform: rotate(3.141592653589793rad); 

      box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25); 

      display: flex; 

      height: 407px; 

      align-items: center; 

      gap: 10px; 

      overflow: hidden; 

      justify-content: start; 

      border: 2px solid rgba(203, 186, 158, 1); 

    } 

    .sea-image { 

      aspect-ratio: 0.64; 

      object-fit: contain; 

      object-position: center; 

      width: 260px; 

      align-self: stretch; 

      min-width: 240px; 

      margin: auto 0; 

    } 

    .title-roboto { 

      font-family: Roboto Serif, -apple-system, Roboto, Helvetica, sans-serif; 

      color: rgba(241, 234, 226, 1); 

    } 

    .title-playfair { 

      font-family: Playfair Display, -apple-system, Roboto, Helvetica, sans-serif; 

      color: rgba(241, 234, 226, 1); 

    } 

    @media (max-width: 991px) { 

      .portfolio-container { 

        padding-right: 20px; 

      } 

      .header-wrapper { 

        max-width: 100%; 

      } 

      .nav-menu { 

        max-width: 100%; 

      } 

      .content-wrapper { 

        max-width: 100%; 

      } 

      .text-section { 

        max-width: 100%; 

      } 

      .content-row { 

        flex-direction: column; 

        align-items: stretch; 

        gap: 0px; 

      } 

      .image-column { 

        width: 100%; 

      } 

      .moon-image-wrapper { 

        margin-top: 40px; 

      } 

      .text-column { 

        width: 100%; 

      } 

      .greeting-text { 

        max-width: 100%; 

        margin-top: 20px; 

        white-space: initial; 

        padding: 0 20px 100px 0; 

      } 

    } 

  </style> 

   

  <div class="portfolio-container"> 

    <div class="header-wrapper"> 

      <img loading="lazy" src="<?=$user_data['logo']?>" class="logo" alt="Portfolio logo" /> 

      <div class="title-text"> 

        <span class="title-roboto"><?=$user_data['title']?></span> / 

        <span class="title-playfair"><?=$user_data['title2']?></span> 

      </div> 

      <nav class="nav-menu" role="navigation"> 

        <div class="nav-contact" tabindex="0"><?=$user_data['lien1']?></div> 

        <div class="nav-about" tabindex="0"><?=$user_data['lien2']?></div> 

        <div class="nav-portfolio" tabindex="0"><?=$user_data['lien3']?></div> 

      </nav> 

    </div> 

    <div class="content-wrapper"> 

      <div class="text-section"> 

        <div class="content-row"> 

          <div class="image-column"> 

            <div class="moon-image-wrapper"> 

              <img loading="lazy" src="<?=$user_data['image1gauche']?>" class="moon-image" alt="Moon landscape illustration" /> 

            </div> 

          </div> 

          <div class="text-column"> 

            <div class="greeting-text"><?=$user_data['text']?></div> 

          </div> 

        </div> 

      </div> 

      <div class="sea-image-wrapper"> 

        <img loading="lazy" src="<?=$user_data['image2droite']?>" class="sea-image" alt="Sea landscape view" /> 

      </div> 

    </div> 

  </div> 
