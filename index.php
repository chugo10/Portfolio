<?php
    // connect to the database to get the PDO instance
    $pdo = require 'include/connect.php';

    $sql = 'SELECT * FROM home,navbar,bande';
    $statement = $pdo->query($sql);
    $user_data = $statement->fetch(PDO::FETCH_ASSOC);
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

    <title>portfolio</title> 

</head> 

<body> 

     

<style> 
    </style> 

     

    <div class="portfolio-container"> 

      <div class="header-wrapper"> 

        <nav class="nav-container"> 

          <div class="logo-wrapper"> 

            <img loading="lazy" src="<?=$user_data['logo']?>" class="logo-image" alt="Portfolio Logo" /> 

          </div> 

          <div class="header-title"> 

            <span class="title-roboto"> <?=$user_data['title']?></span> 

            / 

            <span class="title-playfair"><?=$user_data['title2']?></span>
     

          </div>
          <div class="nav-menu"> 

            <div class="menu-items"> 
  
              <a href="contact1.html" class="menu-link"><?=$user_data['lien1']?></a> 
  
              <a href="contact.html" class="menu-link"><?=$user_data['lien2']?></a> 
  
              <a href="#portfolio" class="menu-link"><?=$user_data['lien3']?></a> 
  
            </div> 
  
          </div>  

        </nav> 

        

      </div> 

      <main class="main-content"> 

        <section class="intro-card"> 

          <div class="intro-wrapper"> 

            <div class="intro-image-wrapper"> 

              <img loading="lazy" src="<?=$user_data['imagebande1']?>" class="intro-image" alt="Introduction Visual" /> 

            </div> 

            <p class="intro-text"><?=$user_data['subtitle']?></p> 

          </div> 

        </section> 

        <section class="profile-card"> 

          <div class="profile-content"> 

            <h2 class="profile-text"><?=$user_data['bande2text1']?></h2> 

            <h2 class="project-text"><?=$user_data['bande2text2']?></h2> 

            <img loading="lazy" src="<?=$user_data['imagebande2']?>" class="profile-image" alt="Profile Project Showcase" /> 

          </div> 

        </section> 

      </main> 

    </div> 

</body> 

</html> 
