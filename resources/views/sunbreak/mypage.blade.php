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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" >

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">

     
      <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">
          {{ Auth::user()->name }}
        </h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <Br>
        <h5 class="card-title">ランキング</h5>
        <Br>
        <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-light list-group-small">
            <li class="list-group-item px-3">Cras justo odio</li>
            <li class="list-group-item px-3">Dapibus ac facilisis in</li>
            <li class="list-group-item px-3">Vestibulum at eros</li>
            <li class="list-group-item px-3">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
      <Br>
        <Br>
    </div>
  </div>
</div>
</div>
</div>
<Br>
  <Br>
          
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <Br>
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
