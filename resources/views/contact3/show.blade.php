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
                    
                    showです
                    {{ $contact->your_name }}
                    {{ $contact->email }}
                    {{ $contact->url }}
                    {{ $gender }}
                    {{ $contact->age }}
                    {{ $contact->contact }}

                    <?php
                    //保存をするには、POST形式にする
                    //CRUDの、storeで、保存に関する処理をする
                    ?>
                    <form method="GET" action="{{route('contact3.edit', ['id' => $contact->id] )}}">
                    @csrf
                    <input class="btn btn-info" type="submit" value="変更する">
                    <a href="{{route('contact3.index')}}" class="btn btn-info">戻る</a>
                    </form>
                    <Br>

                    <?php //routeでは、IDで飛ばす先を指定しているため、
                    //$contact->idと指定する。
                    ?>

                    <form method="POST" action="{{route('contact3.destroy', ['id' => $contact->id] )}}" id="delete_{{ $contact->id}}" >
                    @csrf
                    <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);" >削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    <!--
    /************************************
    削除ボタンを押してすぐにレコードが削除
    されるのも問題なので、一旦javascriptで
    確認メッセージを流します。
    *************************************/
    //-->
    function deletePost(e) {
        'use strict';
        if (confirm('本当に削除していいですか?')) {
        document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
    </script>

@endsection
