// アルバムデータの作成
var album = [
    { src: '../storage/img/1dN65XP66o9FZcPGeGkTB4Ja57XzB8axxdStKHbn.jpg'},
    { src: '../storage/img/AbpBNSvXUchPO9rcOsfUlKQJB9PSDcoMtEN5wnBu.jpg'},
    { src: '../storage/img/AU30jId4GaNH6L0Ti8YmTMtVaXDBxfy1RW5YD0mT.jpg'},
    { src: '../storage/img/CtOySc2j3Bz7aHgutBp3Ll1pYj3CGGyBxezR2Wcy.jpg'},
    { src: '../storage/img/1dN65XP66o9FZcPGeGkTB4Ja57XzB8axxdStKHbn.jpg'}
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