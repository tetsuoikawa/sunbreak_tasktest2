<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>マイページ</title>
</head>

<body>
  <script src='js/test.js'></script>
</body>


<link href="{{asset('css/index.css')}}" rel="stylesheet">
@extends('layouts.app')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    </div>
  </div>
</div>
@section('content')

<div class="card">


<div class="container">

    <div class="row justify-content-center">
      <div class="col-md-12" >

        <div class="card mb-3">
          <img src="http://127.0.0.1:8000/storage/img/image_cap.png" class="card-img-top" alt="Wild Landscape"/>
          <div class="card-body">
            <img src ="http://127.0.0.1:8000/storage/img/profile_icon.png" id = 'profile_icon'>
          <div class="header_left">
            <h3 class="card-title">{{ Auth::user()->name }}</h3>
            <h4>1534いいね</h4>
            <p class="card-text">
              This is a wider card with supporting text below as a natural lead-in to additional
            
            </p>
          </div>
          <button type="submit" class="btn btn-primary">
            編集する
          </button>
    
            <Br>
            <Br>
            <Br>
          </div>
        </div>


<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#!">投稿した記事</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#!">いいねした記事</a>
      </li>
    </ul>
  </div>

      <div class="card-body">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

            
      
          </form>
          <article>
          <section>

            

                <?php //<a href="#" class="btn btn-primary">{{ $sunbreak->contact}}</a>?>

                <Br>
                  <?php
                  $gallery2 = "'#gallery";
                  $main2 = ".main";
                  $thumb2 = ".thumb";
                  $count1  = 1;
                  $vacuum = " ";
                  $line = "'";

                  $i = 0;
                  $ib2 = 1;
                  ?>
                  @foreach($sunbreaks as $sunbreak)

                  



                  
                  <?php
                  $i++;
                  ?>
                  <div class="card mb-3">
                    <Br>
                  <div style="text-align: center;" >
                    <h4 class="card-title">{{ $sunbreak->title }}</h4>
                    <p class="card-title">
                      <?php
                      if( optional($sunbreak)->username  !== null){
                        echo 'written by ' , optional($sunbreak)->username;
                      }else{
                        echo 'written by 名無しのユーザー';
                      };
                      ?>
                    </p>
                  
                    <Br>
                    <img src = "{{ asset('storage/' . $sunbreak->photo) }}" class="card-img-top" alt="Wild Landscape" style="max-width: 400px;" style="max-height:400px;" >
                  
                      <div class="card-body">
                      
                        <p class="card-text">
                          <div style="display: flex">
                          
                        <div style="text-align:left">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?= $i ?>">
                            詳細を見る
                          </button>
                        </div>
                      

                          <?php 
                          $i2 = $sunbreak->id;
                          ?>
                          <div style="text-align:right">
                            <input type="checkbox" id=<?php echo "favorite" . $sunbreak->id;?> name="favorite-checkbox" value="favorite-button">
                              <label for=<?php echo "favorite" . $sunbreak->id;?> class="container">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                              <div class="action">
                                 <span class="option-2">129</span>
                                 <span class="option-1">128</span>
                              </div>
                              </label>
                            </div>

                            
                          <div class="modal fade" id="modal<?= $i ?>" tabindex="-1"
                                role="dialog" aria-labelledby="label1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="label1">{{ $sunbreak->id }} {{ $sunbreak->title }}</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>


                        
                                
                                  <?php
                                  $a = 1;

                                  
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
                                    
                                      ?>
                                  

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
                                          var picture_1 = '{{ ($sunbreak->photo) }}';
                                          var picture_2 = '{{ ($sunbreak->photo2) }}';
                                          var picture_3 = '{{ ($sunbreak->photo3) }}';
                                          var picture_4 = '{{ ($sunbreak->photo4) }}';
                                          var picture_5 = '{{ ($sunbreak->photo5) }}';
                                          var picture_6 = '{{ ($sunbreak->photo6) }}';
                                          var kara = '';
                                          console.log(picture_6);
                                          var g = 1;

                                          if(picture_1 !== kara ){
                                            var <?php  echo $album; ?> = [
                                            { src: '{{ asset('storage/' . $sunbreak->photo) }}'}
                                          ];
                                          };

                                          if(picture_1 !== kara && picture_2 !== kara && picture_3 !== kara){
                                            var <?php  echo $album; ?> = [
                                            { src: '{{ asset('storage/' . $sunbreak->photo) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo3) }}'}
                                          ];
                                          };

                                          if(picture_1 !== kara && picture_2 !== kara && picture_3 !== kara && picture_4 !== kara){
                                            var <?php  echo $album; ?> = [
                                            { src: '{{ asset('storage/' . $sunbreak->photo) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo3) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo4) }}'}
                                          ];
                                          };

                                          if(picture_1 !== kara && picture_2 !== kara && picture_3 !== kara && picture_4 !== kara && picture_5 !== kara){
                                            var <?php  echo $album; ?> = [
                                            { src: '{{ asset('storage/' . $sunbreak->photo) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo3) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo4) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo5) }}'}
                                          ];
                                          };

                                          
                                          if(picture_1 !== kara && picture_2 !== kara && picture_3 !== kara && picture_4 !== kara && picture_5 !== kara && picture_6 !== kara){
                                            var <?php  echo $album; ?> = [
                                            { src: '{{ asset('storage/' . $sunbreak->photo) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo3) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo4) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo5) }}'},
                                            { src: '{{ asset('storage/' . $sunbreak->photo6) }}'}
                                          ];
                                          };










                                          
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
                                  <div class="modal-body">
                                  
                                  <Br>
                                  <Br>
                                  


                                    <Br>   
                                    <hr>
                                    <?php
                                    if( $sunbreak->photo2 !== null){

                                    }  
                                    ?>

                                    <Br>
                                  <div style="text-align:left">
                                    <h3 id="fewleft">装備詳細</h4>
                                  </div>
                                  <Br>
                                  <Br>
                                  <img src = "{{ asset('storage/' . $sunbreak->photo) }}" 
                                  class="card-img-top" alt="Wild Landscape" id="soubi_image">
                                  </img>
                                  <Br>
                                  <Br>

                              
                                      <div class="card w-100">
                                        <div class="card-body">
                                        <div style="text-align:left">
                                          <h5 class="card-title">制作者のコメント</h5>
                                          <p class="card-text">{{ $sunbreak->contact }}</p>
                                        </div>
                                        </div>
                                     </div>
                                     <Br>
                                     <Br>
                                    <div style="text-align:left">
                                      <h3 id="fewleft">コメント欄</h3>
                                    </div>
                                      <Br>
                                  
                                      <div class="form-outline">
                                        <textarea class="form-control" id="textAreaExample" rows="4">sample</textarea>
                                      </div>
                                     <Br>
                                     <Br>
                                      <button class="btn btn-border" id="btn-submit-comment">送信する</button>
                                      <Br>
                                      <Br>
                                     <Br>
                                  <div style="text-align:left">
                                     <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">コメント０</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      </div>
                                    </div>
                                    <Br>

                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title">コメント１ </h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                      </div>
                                      <Br>
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">コメント２</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          </div>
                                        </div>
                                   </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        









                           </div>
                           </div>
                              

                      </div>
                    </div>
                  @endforeach
                <Br>
                {{ $sunbreaks->links() }}
              </div>
      </div>
   </div>
  </div>
</div>


</div>

</div>




</section>
</article>
@endsection