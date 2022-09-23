<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>マイページ </title>
</head>

<body>
</body>
<link href="{{asset('css/index.css')}}" rel="stylesheet">

<div id="gallery">
    <div class="main">
    </div>
    <div class="thumb">
    </div>
</div>
<Br>
<Br>
<script>


    //表示する画像
var album = [
    { src: 'https://www.bing.com/th?id=OIP.LpFjBXLTcq2qMURWTdI1HgHaE8&w=200&h=133&rs=1&qlt=80&o=6&dpr=1.5&pid=3.1'},
    { src: 'https://th.bing.com/th/id/OIP.bT48HdFiAfFS8fTHz1VXagHaE6?w=203&h=134&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
    { src: 'https://th.bing.com/th/id/OIP.G31UnHQnkw_-Zqz9n6zrHwHaHa?w=186&h=186&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
    { src: 'https://th.bing.com/th/id/OIP._hNRGLVvQKNpVG0rt4ZyOQHaGI?w=186&h=154&c=7&r=0&o=5&dpr=1.5&pid=1.7'},
    { src: 'https://th.bing.com/th/id/OIP.RCWeSNGE2ALao-Q7szWiXwHaEK?w=186&h=104&c=7&r=0&o=5&dpr=1.5&pid=1.7'}
  ];
  
  // 最初のデータを表示しておく
  var mainImage = document.createElement('img');
  //画像部分を持ってくる
  mainImage.setAttribute('src', album[0].src);
  
  
  
  var mainFlame = document.querySelector('#gallery .main');
  mainFlame.insertBefore(mainImage, null);
  
  // サムネイル画像の表示
  var thumbFlame = document.querySelector('#gallery .thumb');
  for (var i = 0; i < album.length; i++) {
    var thumbImage = document.createElement('img');
    thumbImage.setAttribute('src', album[i].src);
    thumbFlame.insertBefore(thumbImage, null);
  }
  
  // クリックした画像をメインにする
  thumbFlame.addEventListener('click', function(event) {
    if (event.target.src) {
      mainImage.src = event.target.src;
  
    }
  });
  
  function sendPost(event) {
    event.preventDefault();
    var form = document.createElement('form');
    form.action = event.target.href;
    form.method = 'post';
    document.body.appendChild(form);
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


<script>


        //表示する画像
    
    var album2 = [
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
      
      
      
      var mainFlame2 = document.querySelector('#gallery2 .main2');
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

vrgabhuaekbIIIIIIalbum = 1;//window.aの略
vrgabhuaekbmainImage = 1;//window.aの略
vrgabhuaekbIIIIIImainFlame = 1;//window.aの略
vrgabhuaekbIIIIIIthumbFlame = 1;//window.aの略
vrgabhuaekbIIIIIIevent = 1;//window.aの略
vrgabhuaekbIIIIIImethod = 1;//window.aの略