<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>マイページ</title>
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
                    <?php
                    $un = optional(Auth::user())->name;
                    if( $un !== null){
                      echo '
                    <div><a href="">Topページ</a> &nbsp;|&nbsp;&nbsp;</div>
                    <div><a href="sunbreak/create">新規投稿</a> &nbsp;|&nbsp;&nbsp;</div>
                    <div><a href="./mypage"  onclick="sendPost(event)"> マイページ</a> &nbsp;|&nbsp;&nbsp;</div>
                      ';
                    }else{
                      echo '
                    <div><a href="">Topページ</a> &nbsp;|&nbsp;&nbsp;</div>
                    <div><a href="sunbreak/create">新規投稿</a> &nbsp;|&nbsp;&nbsp;</div>
                    <div><a href="/login">ログイン</a> &nbsp;|&nbsp;&nbsp;</div>
                    <div><a href="/register">ユーザー登録</a></div>
                      ';   
                    };
                    
                    ?>

                       
                </div>
                <form method="POST" action="{{route('sunbreak.mypage')}}" enctype="multipart/form-data">
                  @csrf
                  <input class="btn btn-outline-primary" type="submit" value="マイページ">
                </form>

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
                            <script>
                            $ib = 1;
                            </script>
                            <?php
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
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="label1">{{ $sunbreak->id }} {{ $sunbreak->title }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>





                                  
                                          <div class="modal-body">
                                              
                                              <img src = "{{ asset('storage/' . $sunbreak->photo) }}" class="card-img-top" alt="Wild Landscape" style="max-width: 400px;" style="max-height:400px;"/>
                                              <Br>
                                              <Br>
                                                <Br>
                                              <h5>装備詳細</h5>
                                                <img src = "{{ asset('storage/' . $sunbreak->photo2) }}" class="card-img-top" alt="" style="max-width: 400px;" style="max-height:400px;"/>
                                              <Br>
                                              <Br>
                                                <hr>
                                                <img src = "{{ asset('storage/' . $sunbreak->photo3) }}" class="card-img-top" alt="" style="max-width: 400px;" style="max-height:400px;"/>
                                              <Br>
                                              <Br>
                                                <Br>
                                                <img src = "{{ asset('storage/' . $sunbreak->photo4) }}" class="card-img-top" alt="" style="max-width: 400px;" style="max-height:400px;"/>
                                              <Br>
                                              <Br>
                                                <Br>
                                                <img src = "{{ asset('storage/' . $sunbreak->photo5) }}" class="card-img-top" alt="" style="max-width: 400px;" style="max-height:400px;"/>
                                              <Br>
                                              <Br>
                                                <Br>
                                                <img src = "{{ asset('storage/' . $sunbreak->photo6) }}" class="card-img-top" alt="" style="max-width: 400px;" style="max-height:400px;"/>
                                              <Br>
                                              <Br>   
                                              <hr>
                                              <?php
                                              if( $sunbreak->photo2 !== null){

                                              }  
                                              ?>

                                          


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
                                                <h3>コメント欄</h3>
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
