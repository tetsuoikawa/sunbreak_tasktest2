<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>マイページ </title>
</head>

<body>
</body>
<link href="{{asset('css/index.css')}}" rel="stylesheet">

<?php

$gallery2 = "'#gallery";
$main2 = ".main";
$thumb2 = ".thumb";
$count1  = 1;
$vacuum = " ";
$line = "'";

?>

<?php
$a = 1;
$bag = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20'];


 
foreach ($bag as $value){

    $gallery = $line . "gallery" . $count1 . $line;
    $main = $line . "main" . $count1 . $line;
    $thumb = $line . "thumb" . $count1 . $line;
    
    $gallery_main = $gallery2 . $count1 . $vacuum . $main2 . $count1 . $line;
    $gallery_thumb = $gallery2 . $count1 . $vacuum . $thumb2 . $count1 . $line;
    $form_mk2 = $line . "form" . $count1 . $line;

    $album = "album" . $count1;
    $mainImage = "mainImage" . $count1;
    $mainFlame = "mainFlame" . $count1;
    $thumbFlame = "thumbFlame" . $count1;
    $thumbImage = "thumbImage" . $count1;
    $event = "event" . $count1;
    $form = "form" . $count1;
    $method = "method" . $count1;
    
    echo $gallery_main;
    echo '<Br>';
    echo $album;
    ?>


<Br>
  <Br>
      <div id= <?php  echo $gallery; ?>>
          <div class= <?php  echo $main; ?> >
          </div>
          <div class= <?php  echo $thumb; ?>>
          </div>
      </div>
  
  
<script>
//$gallery_main = $gallery2 . $count1 . $vacuum . $main2 . $count1 . $line;

//$album = "album" . $count1;
//$mainImage = "mainImage" . $count1;
//$mainFlame = "mainFlame" . $count1;
//$thumbFlame = "thumbFlame" . $count1;
//$thumbImage = "thumbImage" . $count1;
//$event = "event" . $count1;
//$form = "form" . $count1;
//$method = "method" . $count1;


  
  
          //表示する画像
      
      var <?php  echo $album; ?> = [
          { src: 'https://www.bing.com/th?id=OIP.LpFjBXLTcq2qMURWTdI1HgHaE8&w=200&h=133&rs=1&qlt=80&o=6&dpr=1.5&pid=3.1'},
          { src: 'https://th.bing.com/th/id/OIP.bT48HdFiAfFS8fTHz1VXagHaE6?w=203&h=134&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
          { src: 'https://th.bing.com/th/id/OIP.G31UnHQnkw_-Zqz9n6zrHwHaHa?w=186&h=186&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
          { src: 'https://th.bing.com/th/id/OIP._hNRGLVvQKNpVG0rt4ZyOQHaGI?w=186&h=154&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
          { src: 'https://th.bing.com/th/id/OIP.RCWeSNGE2ALao-Q7szWiXwHaEK?w=186&h=104&c=7&r=0&o=5&dpr=1.5&pid=1.7'}
        ];
        
        // 最初のデータを表示しておく
         var <?php  echo $mainImage; ?> = document.createElement('img');
        //画像部分を持ってくる
        <?php  echo $mainImage; ?>.setAttribute('src', <?php  echo $album; ?>[0].src);
        
        
        
        var <?php  echo $mainFlame; ?> = document.querySelector(<?php  echo $gallery_main; ?>);
        <?php  echo $mainFlame; ?>.insertBefore(<?php  echo $mainImage; ?>, null);
        
        // サムネイル画像の表示
        var <?php  echo $thumbFlame; ?> = document.querySelector(<?php  echo $gallery_thumb; ?>);
        for (var i = 0; i < <?php  echo $album; ?>.length; i++) {
          var <?php  echo $thumbImage; ?> = document.createElement('img');
          <?php  echo $thumbImage; ?>.setAttribute('src', <?php  echo $album; ?>[i].src);
          <?php  echo $thumbFlame; ?>.insertBefore(<?php  echo $thumbImage; ?>, null);
        }
        
        // クリックした画像をメインにする
        <?php  echo $thumbFlame; ?>.addEventListener('click', function(<?php  echo $event; ?>) {
          if (<?php  echo $event; ?>.target.src) {
            <?php  echo $mainImage; ?>.src = <?php  echo $event; ?>.target.src;
        
          }
        });
        
        function sendPost(<?php  echo $event; ?>) {
          <?php  echo $event; ?>.preventDefault();
          var <?php  echo $form; ?> = document.createElement(<?php  echo $form_mk2; ?>);
          <?php  echo $form; ?>.action = <?php  echo $event; ?>.target.href;
          <?php  echo $form; ?>.<?php  echo $method; ?> = 'post';
          document.body.appendChild(<?php  echo $form; ?>);
          <?php  echo $form; ?>.submit();
        }
        <?php  
        $count1 += 1;

         ?>
  </script>
  

<Br>
<Br>

    <?php
}
?>


