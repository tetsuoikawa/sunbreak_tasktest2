<link href="{{asset('css/index.css')}}" rel="stylesheet">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
              <div style="text-align:center">

                <img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/1782859/69f8d57b-ffe4-2843-02ca-9665569fbab1.png" class="img-fluid"> 
               </div>
               <Br>
               <div class="row justify-content-center">
                 <div class="col-md-10" >
                   <div class="pakuri">



                    <form method="GET" name="form_create" id="head_create" action="{{route('sunbreak.index')}}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="sunbreak" value="TOPページ">
                      <a href="javascript:form_create.submit()">TOPページ</a>&nbsp;|&nbsp;&nbsp;
                    </form>

                  

                    <div><a href="">新規投稿</a>&nbsp;|&nbsp;&nbsp;</div>
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

                <Br>
 
                 <div class="card-body">
                     @if (session('status'))
                         <div class="alert alert-success" role="alert">
                             {{ session('status') }}
                         </div>
                     @endif
 
                       
                 
                     </form>
                <div class="card-header">投稿フォーム</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <?php
                    
                    function h($str){
                      //XSS無効か（入力欄でコードを書くのを無効か）
                      // <?php echo h($_POST['url'])みたいな形で入ってる
                      return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
                    }
                    
                    ?>
                  

                    <?php
                    //保存をするには、POST形式にする
                    //CRUDの、storeで、保存に関する処理をする
                    ?>
                    <form method="POST" action="{{route('sunbreak.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">

                  </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">タイトル</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"   value="{{ old('title') }}" name="title">
                      </div>
                      
                    <br>
                    <select class="custom-select custom-select-lg" id="inputGroupSelect01" name="series">
                      <option>シリーズ選択</option>
                      <option value="2" @if(2 === (int)old('series')) selected @endif style="margin-bottom: 50px;">サンブレイク</option>
                      <option value="3" @if(3 === (int)old('series')) selected @endif>ライズ</option>
                      <option value="4" @if(4 === (int)old('series')) selected @endif>アイスボーン</option>
                      <option value="5" @if(5 === (int)old('series')) selected @endif>ワールド</option>
                      <option value="6" @if(6 === (int)old('series')) selected @endif>ストーリーズ</option>
                      <option value="7" @if(7 === (int)old('series')) selected @endif>ダブルクロス</option>
                      <option value="8" @if(8 === (int)old('series')) selected @endif>クロス</option>
                      <option value="9" @if(9 === (int)old('series')) selected @endif>4G</option>
                      <option value="10" @if(10 === (int)old('series')) selected @endif>4</option>
                      <option value="11" @if(11 === (int)old('series')) selected @endif>ポータブル 3nd</option>
                      <option value="12" @if(12 === (int)old('series')) selected @endif>G（Wii版）</option>
                      <option value="13" @if(13 === (int)old('series')) selected @endif>3（トライ）</option>
                      <option value="14" @if(14 === (int)old('series')) selected @endif>ポータブル 2nd</option>
                      <option value="15" @if(15 === (int)old('series')) selected @endif>ポータブル</option>
                      <option value="16" @if(16 === (int)old('series')) selected @endif>２（ドス）</option>
                      <option value="17" @if(17 === (int)old('series')) selected @endif>G</option>
                      <option value="18" @if(18 === (int)old('series')) selected @endif>初代</option>
                    </select>
          <br>
          <Br>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" >説明文</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ old('contact') }}" name="contact">{{ old('contact') }}</textarea>
          </div>
          <Br>
            <p>ハンターの性別</p>
                      <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary">
                          <input type="radio" name="gender" id="flexRadioDefault1" value="0" autocomplete="off"> 男性
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="gender" id="flexRadioDefault2" value="1" autocomplete="off"> 女性
                        </label>
                      </div>
                    <Br>
                    <Br>
                    <Br>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-text">装備画像</h5>
                      </div>
                      <img src="../storage/img/IMG_0205.JPG" class="card-img-top" alt="Fissure in Sandstone"/>
                      <div class="card-body">
                        <h5 class="card-text">こんな感じで、装備名がわかる画像を選択してください</h5>
                        <div class="form-group">
                          <label for="inputFile"></label>
                          <input type="file" class="form-control-file" id="inputFile" name="photo" accept='image/*' onchange="previewImage1(this);">
                          <p>
                          Preview:<br>
                          <img id="preview1" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
                          </p>
                          <script>
                          function previewImage1(obj)
                          {
                            var fileReader = new FileReader();
                            fileReader.onload = (function() {
                              document.getElementById('preview1').src = fileReader.result;
                            });
                            fileReader.readAsDataURL(obj.files[0]);
                          }
                          </script>
                        </div>
                      </div>
                    </div>

                    <Br>
                      <Br>
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-text">TOP画像</h5>
                        </div>

                        <div class="card-body">

                          <div class="form-group">
                            <label for="inputFile"></label>
                            <input type="file" class="form-control-file" id="inputFile2" name="photo2" accept='image/*' onchange="previewImage2(this);">
                            <p>
                            Preview:<br>
                            <img id="preview2" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
                            </p>
                            <script>
                            function previewImage2(obj)
                            {
                              var fileReader = new FileReader();
                              fileReader.onload = (function() {
                                document.getElementById('preview2').src = fileReader.result;
                              });
                              fileReader.readAsDataURL(obj.files[0]);
                            }
                            </script>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="card-text">サブ画像(４枚まで)</h5>
                          <div class="form-group">
                            <label for="inputFile"></label>
                            <input type="file" class="form-control-file" id="inputFile3" name="photo3" accept='image/*' onchange="previewImage3(this);">
                            <p>
                            Preview:<br>
                            <img id="preview3" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
                            </p>
                            <script>
                            function previewImage3(obj)
                            {
                              var fileReader = new FileReader();
                              fileReader.onload = (function() {
                                document.getElementById('preview3').src = fileReader.result;
                              });
                              fileReader.readAsDataURL(obj.files[0]);
                            }
                            </script>
                          </div>
      
      
                          <div class="form-group">
                            <label for="inputFile"></label>
                            <input type="file" class="form-control-file" id="inputFile4" name="photo4" accept='image/*' onchange="previewImage4(this);">
                            <p>
                            Preview:<br>
                            <img id="preview4" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
                            </p>
                            <script>
                            function previewImage4(obj)
                            {
                              var fileReader = new FileReader();
                              fileReader.onload = (function() {
                                document.getElementById('preview4').src = fileReader.result;
                              });
                              fileReader.readAsDataURL(obj.files[0]);
                            }
                            </script>
                          </div>
      
      
                          <div class="form-group">
                            <label for="inputFile"></label>
                            <input type="file" class="form-control-file" id="inputFile5" name="photo5" accept='image/*' onchange="previewImage5(this);">
                            <p>
                            Preview:<br>
                            <img id="preview5" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
                            </p>
                            <script>
                            function previewImage5(obj)
                            {
                              var fileReader = new FileReader();
                              fileReader.onload = (function() {
                                document.getElementById('preview5').src = fileReader.result;
                              });
                              fileReader.readAsDataURL(obj.files[0]);
                            }
                            </script>
                          </div>
      
      
                          <div class="form-group">
                            <label for="inputFile"></label>
                            <input type="file" class="form-control-file" id="inputFile6" name="photo6" accept='image/*' onchange="previewImage6(this);">
                            <p>
                            Preview:<br>
                            <img id="preview6" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
                            </p>
                            <script>
                            function previewImage6(obj)
                            {
                              var fileReader = new FileReader();
                              fileReader.onload = (function() {
                                document.getElementById('preview6').src = fileReader.result;
                              });
                              fileReader.readAsDataURL(obj.files[0]);
                            }
                            </script>
                          </div>
                        </div>
                        
                      </div>





                  


                 
                    <input type="hidden" value="{{  optional(Auth::user())->name }}" name="username">
                    <Br>
                      <Br>
                    <input class="btn btn-outline-primary" type="submit" value="登録する">
                    </form>
                    <pre><code>{{ var_dump(session()->get('_old_input')) }}</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection

