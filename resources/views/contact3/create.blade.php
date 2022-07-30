@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

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
                    
                    createです
                    <?php
                    //保存をするには、POST形式にする
                    //CRUDの、storeで、保存に関する処理をする
                    ?>
                    <form method="POST" action="{{route('contact3.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">タイトル</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="your_name">
                      </div>
                    <br>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">タイトル</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="title">
                      </div>
                    <br>
                    メールアドレス
                    <input type="email" name="email">
                    <br>
                    ホームページ	
                    <input type="url" name="url">
                    <br>
                    性別
                    <input type="radio" name="gender" value="0">男性</input>
                    <input type="radio" name="gender" value="1">女性</input>
                    <br>
                    シリーズ
                    <select name="age">
                    <option value="">選択してください</option>
                    <option value="1">〜19歳</option>
                    <option value="2">20歳〜29歳</option>
                    <option value="3">30歳〜39歳</option>
                    <option value="4">40歳〜49歳</option>
                    <option value="5">50歳〜59歳</option>
                    <option value="6">60歳〜</option>
                    </select>
                    <br>
                    お問い合わせ内容
                    <textarea name="contact"></textarea>
                    <br>

                    <input type="checkbox" name="caution" value="1">注意事項に同意する
                    <br>

                    <input class="btn btn-info" type="submit" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  
@endsection

