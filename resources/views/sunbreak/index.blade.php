<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>TOPページ </title>
</head>

<body>
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

<div class="container">
         
            <div class="card">
              <div style="text-align:center">

               <img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/1782859/69f8d57b-ffe4-2843-02ca-9665569fbab1.png" class="img-fluid"> 
              </div>
              <Br>
              <div class="row justify-content-center">
                <div class="col-md-10" >
                  <div class="pakuri">

                    <div><a href="">Topページ</a>&nbsp;|&nbsp;&nbsp; </div>

                    <form method="GET" name="form3" id="head_create" action="{{route('sunbreak.create')}}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="sunbreak" value="新規投稿ページ">
                      <a href="javascript:form3.submit()">新規投稿</a>&nbsp;|&nbsp;&nbsp;
                    </form>

                    <div id="head_login"><a href="/login">ログイン</a>&nbsp;|&nbsp;&nbsp; </div>
                    <div id="head_register"><a href="/register">ユーザー登録</a></div>

                    <form method="POST" name="form1" id="head_mypage" action="{{route('sunbreak.mypage')}}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="user_name" value="名前">
                      <a href="javascript:form1.submit()">マイページ</a>
                    </form>

                    <?php
                    $un = optional(Auth::user())->name;
                    ?>

                    <script>
                       var ert = '<?php echo $un;  ?>';

                      if(ert !== ''){
                        head_login.style.display = 'none';
                        head_register.style.display = 'none';
                      }

                      if(ert == ''){                    
                        head_mypage.style.display = 'none';
                      }
                    </script>
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
                    <Br>
                      <Br>
                        <div class="card">
                          <div class="card-header">絞り込み</div>
                          <div class="card-body">
                            <blockquote class="blockquote mb-0">                         


                          <form method="GET" action="{{ route('sunbreak.index2') }}">
                            <select name="series2" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> 

                              <option value="0" selected>シリーズ選択</option>
                              <option value="2">サンブレイク</option>
                              <option value="3">ライズ</option>
                              <option value="4">アイスボーン</option>
                              <option value="5">ワールド</option>
                              <option value="6">ストーリーズ</option>
                              <option value="7">ダブルクロス</option>
                              <option value="8">クロス</option>
                              <option value="9">4G</option>
                              <option value="10">4</option>
                              <option value="11">ポータブル 3nd</option>
                              <option value="12">G（Wii版）</option>
                              <option value="13">3（トライ）</option>
                              <option value="14">ポータブル 2nd</option>
                              <option value="15">ポータブル</option>
                              <option value="16">２（ドス）</option>
                              <option value="17">G</option>
                              <option value="18">初代</option>
                            </select>

                            <select name="gender2" class="form-select" aria-label="Default select example">
                              <option selected value="2">ハンターの性別</option>
                              <option value="0">男性</option>
                              <option value="1">女性</option>
                            </select>
                            
                            &nbsp;
                            <button type="submit" class="btn btn-primary">
                              絞り込む
                            </button>

                          </form>

                              <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                          </div>
                        </div>
                        <Br> 

                      

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
                                                  <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                                </div>
                                               <Br>
                                               <Br>
                                                <a href="" class="btn btn-border">送信する</a>
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
