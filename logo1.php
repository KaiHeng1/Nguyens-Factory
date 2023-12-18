<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Nguyens  Factory</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://kit.fontawesome.com/8f27d68390.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <link href="Header.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8f27d68390.js" crossorigin="anonymous"></script>
  <style>
    .image-container {
      position: fixed;
      /* set container to a relative position */
      left: 95%;
      min-width: 30px;
      max-width: 30px;
      /* set your desired width */
      top: 42%;
      height: 100px;
      /* set your desired height */
      z-index: 1000;
    }

    .image-container:hover {
      .contacts {
        transform: scale(1.14);
        transition-duration: 1s;
        border-radius: 20% 20% 0% 0%;
        background-color: black;
      }

      img.contacts_img1{
        transition-duration: 1s;
        opacity: 0;
      }
      img.contacts_hover {
        transition-duration: 0.5s;
        opacity: 1;
      }

      .contact_but {
        transform: scale(1.14);
        transition-duration: 1s;
        border-radius: 0% 0% 20% 20%;
        background-color: black;
        color: white;
      }
    }

    .contact_but {
      position: fixed;
      /* set button to an absolute position */
      height: 8.3%;
      width: 5%;
      top: 51%;
      /* adjust the top position of the button */
      left: 95%;
      /* adjust the left position of the button */
      background-color: rgb(250, 250, 250);
      /* set your desired background color */
      color: black;
      /* set your desired text color */
      border: 1px solid black;
      /* remove button border */
      padding: 10px 20px;
      /* set your desired padding */
      cursor: pointer;
      /* change mouse cursor on hover */
      border-radius: 0% 0% 20% 20%;
      font-size: 10px;
      font-family: 'Lora', arial;
    }


    .contacts {
      position: fixed;
      /* set button to an absolute position */
      height: 8.3%;
      width: 5%;
      top: 43%;
      /* adjust the top position of the button */
      left: 95%;
      /* adjust the left position of the button */
      background-color: rgb(250, 250, 250);
      /* set your desired background color */
      color: black;
      /* set your desired text color */
      border: 1px solid black;
      /* remove button border */
      padding: 10px 20px;
      /* set your desired padding */
      cursor: pointer;
      /* change mouse cursor on hover */
      border-radius: 20% 20% 0% 0%;
      font-size: 10px;
      font-family: 'Lora', arial;
      justify-content: center;
    }

    img.contacts_hover{
      opacity: 0;
      position:absolute; 
      display: block; 
      width: 40px; 
      top: 50%; 
      left:50%; 
      -webkit-transform: translate(-50%, -50%); 
      -ms-transform: translate(-50%, -50%); 
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body>
  <header class="header">
    <div class="headers" style="position: fixed; z-index: 1000; background-color: white; width:100%">
    <div class="home-button">
      <a href="Home.php">
        <img src="Logo.png" alt="Logo" style="width: 160px; height: 100px;">
      </a>
    </div>
    <a class="supersales" href="Supersales.php">Supersales</a>
    <a class="bestseller" href="Bestseller.php">Bestseller</a>
    <div class="category">
      <p class="category-button">Category</p>
      <div class="category-dropdown">
        <a href="Women.php">Women</a>
        <a href="Men.php">Men</a>
        <a href="Boys.php">Boys</a>
        <a href="Girl.php">Girls</a>
        <a href="Babies.php">Babies</a>
      </div>
    </div>
    <a class="preorder" href="OEM.php">Preorder</a>
    <a class="contact" href="ContactUs.php">Contact Us</a>

    <div class="image-container">
      
      <a href="contactus.php"> <button  class="contacts"><img style="position:absolute; display: block; width: 40px; top: 50%; left:50%; -webkit-transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);" class="contacts_img1" src="contact us.png" alt="Contact Us!">
        <img class="contacts_hover" src="contactus_onclick.jpg" alt="Contact Us!">
        </button>
      </a>

      <a href="contactus.php"><button class="contact_but" style="font-family: 'Lora', arial;">Contact Us Now!</button>
      </a>

    </div>
    </div>
  </header>

</body>

</html>