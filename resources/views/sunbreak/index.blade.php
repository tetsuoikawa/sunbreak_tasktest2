<link href="{{asset('css/index.css')}}" rel="stylesheet">
@extends('layouts.app')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="" />
    </div>
  </div>
</div>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" >



          
            <div class="card">
              <div style="text-align:center">

               <img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/1782859/69f8d57b-ffe4-2843-02ca-9665569fbab1.png" class="img-fluid"> 

              </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <Br>
                    
                    <form method="GET" action="{{ route('sunbreak.create') }}">
                        <button type="submit" class="btn btn-primary">
                          新規登
                        </button> 
                
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
                            $i = 0;
                            ?>
                            @foreach($sunbreaks as $sunbreak)



                            
                            <?php
                            $i++;
                            ?>
                            <div class="card mb-3">
                              <Br>
                            <div style="text-align: center;" >
                              <h4 class="card-title">{{ $sunbreak->title }}</h4>
                            
                              <Br>
                              <img src = "{{ asset('storage/' . $sunbreak->photo) }}" class="card-img-top" alt="Wild Landscape" style="max-width: 80%;">
                            
                                <div class="card-body">
                                
                                  <p class="card-text">
                                    <div style="display: flex">
                                    
                                  <div style="text-align:right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?= $i ?>">
                                      詳細を見る
                                    </button>
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
                                              
                                              <img src = "{{ asset('storage/' . $sunbreak->photo) }}" class="card-img-top" alt="Wild Landscape"/>
                                              <Br>
                                              <Br>
                                                <div class="card" style="width: 100%;">
                                                  <ul class="list-group list-group-flush">
                                                  <div style="text-align:left">
                                                    <li class="list-group-item">武器名：　{{ $sunbreak->buki }}</li>
                                                    <li class="list-group-item">頭装備：　{{ $sunbreak->soubi1 }}</li>
                                                    <li class="list-group-item">肩装備：　{{ $sunbreak->soubi2 }}</li>
                                                    <li class="list-group-item">腕装備：  {{ $sunbreak->soubi3 }}</li>
                                                    <li class="list-group-item">腰装備：  {{ $sunbreak->soubi4 }}</li>
                                                    <li class="list-group-item">足装備：  {{ $sunbreak->soubi5 }}</li>
                                                  </div>
                                                  </ul>
                                                </div>
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
