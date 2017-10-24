<?php
include 'functions.php';
$dir = 'img/Polymerclay/small/';
$bdir = 'img/Polymerclay/big/';
$images = get_images($dir);

require_once 'pagination.php';

?>


<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Polymerclay</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/lightbox.css" >
</head>
<body>

  <div class="conteiner">
        <div class="header">
        
          <div class="name">
                <div class="name-1"><strong>Мастерская</strong><br> "SVeToCHeK"</div>
                <div class="name-2">Подарки и украшения ручной работы</div>
          </div>
               <div class="promo">Если Вы затрудняетесь с выбором подарка или хотите подарить что-то необычное, то чего не купишь в магазине. Добро пожаловать к нам!!!
               </div>       
          <div class="logo"><img src="img/logo.png"></div>
        
        </div>
  </div>

  <div class="conteiner">
	  
		<div class="gallery">
        <ul class="menu">
                  <li><a href="index.php">Изделия из фетра</a> </li>                   
                           
                  <li><a href="Scrapbooking.php">Скрапбукинг</a>
                      
                  </li>
                  <li><a class="active" href="Polymerclay.php">Полимерная глина</a>
                      
                  </li>
                  <li><a href="Knitwear.php">Вязаные изделия</a>
                      
                  </li>


              </ul>
        <div class="wrapper" >
           
                        <?php if($images): $i = $start_pos+1; ?> 
                        <?php for ($j = $start_pos; $j < $end_pos; $j++):  ?>
                               <div class="item">
                                   <div>
                                        <a href="<?=$bdir . $images[$j]?>" data-lightbox="lightbox">
                                            <img class="front" src="<?=$dir . $images[$j]?>" alt="">
                                            
                                        </a>
                                   </div>
                               </div>
                         <?php $i++; endfor; ?>
                         <?php else:  ?>
                           <p>В данной галерее нет картинок</p>
                         <?php endif; ?>
                      
                      <div class="clear"></div>  
                        <?php if( $count_pages > 1): ?>
                             <div class="pagination"><?=$pagination?></div>
                        <?php endif; ?>  

                         </div> 
              </div>
    </div>   

    <div class="conteiner">
        <div class="footer">
           <div class="contact">г.Челябинск +7-951-814-79-16</div>
           <div class="socseti">
             <a href="https://vk.com/svetochek_84"> <img src="img/vk.png" width="40"></a>
             <a href="https://www.instagram.com/svetochek_84/?hl=ru"><img src="img/instagram.png" width="40"></a>
             <a href="https://www.livemaster.ru/svetochek84"><img src="img/livemaster.png" width="40"></a>
           </div>
        </div>
    </div> 

                  
                  <script src="lightbox-plus-jquery.js"></script>
                  <script>
                  	lightbox.option({
                  		'showImageNumberLabel': false

                  	})
                  </script>

              </body>


              </html>