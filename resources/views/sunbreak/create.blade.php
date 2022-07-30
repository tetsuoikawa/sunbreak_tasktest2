@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
                    <select class="form-select" aria-label="Default select example" name="series"> 

                      <option>シリーズ選択</option>
                      <option value="2" @if(2 === (int)old('series')) selected @endif>サンブレイク</option>
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
                  </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">タイトル</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"  value="{{ old('title') }}" name="title">
                      </div>
                    <br>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">武器名</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"  value="{{ old('buki') }}" name="buki">
                      </div>
                    <br>
                    <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label">頭装備</label>
                      <input type="text" class="form-control" id="formGroupExampleInput"  value="{{ old('soubi1') }}" name="soubi1">
                    </div>
                  <br>
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">肩装備</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"  value="{{ old('soubi2') }}" name="soubi2">
                  </div>
                <br>
                <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">腕装備</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" value="{{ old('soubi3') }}"  name="soubi3">
                </div>
              <br>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">腰装備</label>
                <input type="text" class="form-control" id="formGroupExampleInput"  value="{{ old('soubi4') }}" name="soubi4">
              </div>
            <br>
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label" >足装備</label>
              <input type="text" class="form-control" id="formGroupExampleInput"  value="{{ old('soubi5') }}" name="soubi5">
              <input type="hidden" class="form-control" id="formGroupExampleInput" name="soubi5-1" >
            </div>
          <br>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" >説明文</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ old('contact') }}" name="contact">{{ old('contact') }}</textarea>
          </div>
          <Br>
            <p>ハンターの性別
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="0" >
                <label class="form-check-label" for="flexRadioDefault1">
                  男性
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="1">
                <label class="form-check-label" for="flexRadioDefault2">
                  女性
                </label>
              </div>
                    <br>
                    <div class="form-group">
                      <label for="inputFile">File input</label>
                      <input type="file" class="form-control-file" id="inputFile" name="photo">
                    </div>

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

