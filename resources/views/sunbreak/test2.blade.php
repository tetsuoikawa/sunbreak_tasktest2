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
$count = ['1','2','3','4','5','6','7','8','9','10'];

$gallery2 = "'#gallery";
$main2 = ".main";
$count1  = 1;
$vacuum = " ";
$line = "'";
//'#gallery1 .main1'
foreach ($count as $value){
  $gallery_main = $gallery2 . $count1 . $vacuum . $main2 . $count1 . $line;
  echo $gallery_main;
  echo '<Br>';
}

?>

<?php
$a = 1;
$bag = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20'];


 
foreach ($bag as $value){
    echo $value. '<br/>';
    
    $c = 'testn';
    $d = $c . $a;
    $gallery_main = $gallery2 . $count1 . $vacuum . $main2 . $count1 . $line;

    $album = "album1";
    $gallery = "'gallery' . $a";
    echo $gallery;
    ?>


<Br>
  <Br>
      <div id="gallery1">
          <div class="main1" >
          </div>
          <div class="thumb1">
          </div>
      </div>
  
  
  <script>

  
  
          //表示する画像
      
      var <?php  echo $album ?> = [
          { src: 'https://www.bing.com/th?id=OIP.LpFjBXLTcq2qMURWTdI1HgHaE8&w=200&h=133&rs=1&qlt=80&o=6&dpr=1.5&pid=3.1'},
          { src: 'https://th.bing.com/th/id/OIP.bT48HdFiAfFS8fTHz1VXagHaE6?w=203&h=134&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
          { src: 'https://th.bing.com/th/id/OIP.G31UnHQnkw_-Zqz9n6zrHwHaHa?w=186&h=186&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
          { src: 'https://th.bing.com/th/id/OIP._hNRGLVvQKNpVG0rt4ZyOQHaGI?w=186&h=154&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
          { src: 'https://th.bing.com/th/id/OIP.RCWeSNGE2ALao-Q7szWiXwHaEK?w=186&h=104&c=7&r=0&o=5&dpr=1.5&pid=1.7'}
        ];
        
        // 最初のデータを表示しておく
        var <?php  echo "mainImage1" ?> = document.createElement('img');
        //画像部分を持ってくる
        mainImage1.setAttribute('src', <?php  echo "album1" ?>[0].src);
        
        
        
        var <?php  echo "mainFlame1" ?> = document.querySelector(<?php  echo $gallery_main; ?>);
        mainFlame1.insertBefore(<?php  echo "mainImage1" ?>, null);
        
        // サムネイル画像の表示
        var <?php  echo "thumbFlame1" ?> = document.querySelector('#gallery1 .thumb1');
        for (var i = 0; i < <?php  echo "album1" ?>.length; i++) {
          var <?php  echo "thumbImage1" ?> = document.createElement('img');
          <?php  echo "thumbImage1" ?>.setAttribute('src', <?php  echo "album1" ?>[i].src);
          <?php  echo "thumbFlame1" ?>.insertBefore(<?php  echo "thumbImage1" ?>, null);
        }
        
        // クリックした画像をメインにする
        <?php  echo "thumbFlame1" ?>.addEventListener('click', function(<?php  echo "event1" ?>) {
          if (<?php  echo "event1" ?>.target.src) {
            <?php  echo "mainImage1" ?>.src = <?php  echo "event1" ?>.target.src;
        
          }
        });
        
        function sendPost(<?php  echo "event1" ?>) {
          <?php  echo "event1" ?>.preventDefault();
          var <?php  echo "form1" ?> = document.createElement(<?php  echo "'form1'" ?>);
          <?php  echo "form1" ?>.action = <?php  echo "event1" ?>.target.href;
          <?php  echo "form1" ?>.<?php  echo "method1" ?> = 'post';
          document.body.appendChild(<?php  echo "form1" ?>);
          form.submit();
        }
  </script>
  

<Br>
<Br>
    <div id="gallery2">
        <div class="main2" >
        </div>
        <div class="thumb2">
        </div>
    </div>
    <?php
}
?>

<script>



        //表示する画像
    
    var <?php  echo "album2" ?> = [
        { src: 'https://www.bing.com/th?id=OIP.LpFjBXLTcq2qMURWTdI1HgHaE8&w=200&h=133&rs=1&qlt=80&o=6&dpr=1.5&pid=3.1'},
        { src: 'https://th.bing.com/th/id/OIP.bT48HdFiAfFS8fTHz1VXagHaE6?w=203&h=134&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
        { src: 'https://th.bing.com/th/id/OIP.G31UnHQnkw_-Zqz9n6zrHwHaHa?w=186&h=186&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
        { src: 'https://th.bing.com/th/id/OIP._hNRGLVvQKNpVG0rt4ZyOQHaGI?w=186&h=154&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
        { src: 'https://th.bing.com/th/id/OIP.RCWeSNGE2ALao-Q7szWiXwHaEK?w=186&h=104&c=7&r=0&o=5&dpr=1.5&pid=1.7'}
      ];
      
      // 最初のデータを表示しておく
      var mainImage2 = document.createElement('img');
      //画像部分を持ってくる
      mainImage2.setAttribute('src', album2[0].src);
      
      
      
      var <?php  echo "mainFlame2" ?> = document.querySelector('#gallery2 .main2');
      mainFlame2.insertBefore(mainImage2, null);
      
      // サムネイル画像の表示
      var thumbFlame2 = document.querySelector('#gallery2 .thumb2');
      for (var i = 0; i < album2.length; i++) {
        var thumbImage2 = document.createElement('img');
        thumbImage2.setAttribute('src', album2[i].src);
        thumbFlame2.insertBefore(thumbImage2, null);
      }
      
      // クリックした画像をメインにする
      thumbFlame2.addEventListener('click', function(event2) {
        if (event2.target.src) {
          mainImage2.src = event2.target.src;
      
        }
      });
      
      function sendPost(event2) {
        event2.preventDefault();
        var form2 = document.createElement('form2');
        form2.action = event2.target.href;
        form2.method2 = 'post';
        document.body.appendChild(form2);
        form.submit();
      }
</script>

