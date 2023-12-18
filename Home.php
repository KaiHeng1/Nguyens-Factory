<?php
include "logo1.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">


    <style>
        .top-img {
            overflow: hidden;
            cursor: pointer;
            position: relative;

        }

        .bestseller-img,
        .supersales-img {
            width: 100%;
            height: 100%;
            transition: transform 0.5s;

        }

        .top-img p {
            position: absolute;
            color: white;
            left: 35%;
            bottom: 45%;
            background-color: rgba(0, 0, 0, 0.4);
            padding: 5px 15px 5px 15px;
            font-size: 40px;
            font-weight: bold;
        }

        .top-img:hover .bestseller-img,
        .top-img:hover .supersales-img {
            transform: scale(1.1);
        }

        .top-img:hover .top-img p {
            opacity: 1;
        }

        .slide img {
            width: 1478px;
            height: 620px;
            display: block;
        }

        .img1 {
            position: relative;
            margin-left: 19px;
        }

        .img1 button {
            position: absolute;
            bottom: 20%;
            left: 15%;
            padding: 20px 60px 20px 60px;
            font-size: 15px;
            background-color: black;
            color: white;
            border-radius: 18px;
            border: none;
            transition: all 0.3s;
            opacity: 0.8;
            font-weight: bold;
            box-shadow: 3px 3px 10px black;
        }

        .img2 {
            position: relative;
            margin-left: 19px;
        }

        .img2 button {
            position: absolute;
            bottom: 32%;
            left: 82%;
            padding: 20px 60px 20px 60px;
            font-size: 15px;
            background-color: black;
            color: white;
            border-radius: 18px;
            border: none;
            transition: all 0.3s;
            opacity: 0.8;
            font-weight: bold;
            box-shadow: 3px 3px 10px black;
        }

        .img3 {
            position: relative;
            margin-left: 19px;  
        }

        .img3 button {
            position: absolute;
            bottom: 26%;
            left: 44%;
            padding: 20px 60px 20px 60px;
            font-size: 15px;
            background-color: black;
            color: white;
            border-radius: 18px;
            border: none;
            transition: all 0.3s;
            opacity: 0.8;
            font-weight: bold;
            box-shadow: 3px 3px 10px black;
        }

        .img1 button:hover {
            background-color: rgb(176, 94, 108);
        }

        .img2 button:hover {
            background-color: rgb(254, 201, 201)
        }

        .img3 button:hover {
            background-color: white;
            color: black;
        }
    
    </style>
</head>

<body>

    <div style=" 
     display: grid;
     grid-template-columns: 1fr 1fr;
     width: auto;
     height: 600px;
     margin-top: 100px;
     ">
        <div class="top-img">
            <img class="bestseller-img" src="Bestseller.jpg">
            <p>Bestseller</p>
        </div>
        <div class="top-img">
            <img class="supersales-img" src="Bestseller.jpg">
            <p>Supersales</p>
        </div>
    </div>

    <div class="slide">
        <div class="img1">
            <img src="s.dalili.jpeg" alt="">
            <a href="BajuKurung.php">
            <button>Shop Now</button>
        </a>
        </div>

        <div class="img2">
            <img src="Hijab-bigimg.png" .jpeg alt="">
            <a href="Hijab.php">
                <button>Shop Now</button>
            </a>
        </div>

        <div class="img3">
            <img src="LAILA-SUITE.png" alt="">
            <button>Shop Now</button>
        </div>
    </div>

</body>

<?php
include "footer.php";
?>
</html>