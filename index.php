<?php

   require 'functions.php'; 

   $hero_titles = ["Home", "Contact"];
   $hero_titles = do_filter('hero_section', $hero_titles);

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style type="text/css">
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style> 

     <main style="max-width: 1000px;margin: auto; padding: 4px;">
        <h1>This is a plugin website</h1>
        <div style="display: flex;">
            <div style="flex: 4; background-color: #eee;">
                <div style="padding: 10px;">

                    <?php foreach ($hero_titles as $title):?>
                       <a href="" style="color: red"><?=$title?></a> |
                       <?php endforeach ?>
                       
                </div>
                <img src="https://www.velocitymicro.com/img/PC/sx3/fullset.jpg" alt="" style="max-width: 100%; padding: 10px;">
            </div>
            <div style="flex: 1; background-color: #ddd;">
                <img src="images/bart.jpg" alt="" style="max-width: 100%;">
                <img src="images/flowar.webp" alt="" style="max-width: 100%;">
                <?php do_action('images_section'); ?>
                <img src="images/free-nature-images.jpg" alt="" style="max-width: 100%;">
                <img src="images/flowar.webp" alt="" style="max-width: 100%;">
            </div>
        </div>

     </main>
</body>
</html>