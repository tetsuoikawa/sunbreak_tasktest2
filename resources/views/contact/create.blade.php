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

                    CREATEです
                    <form method="POST" action="{{route('contact.store')}}">
                    @csrf
                    タイトル
                    <input type="text" name="title">
                    <Br>
                    <Br>
                    武器名
                    <input type="text" name="buki">
                    <Br>
                    <Br>
                    頭装備
                    <input type="text" name="soubi-1">
                    <Br>
                    <Br>
                    胴装備
                    <input type="text" name="soubi-2">
                    <Br>
                    <Br>
                    腕装備
                    <input type="text" name="soubi-3">
                    <Br>
                    <Br>
                    腰装備
                    <input type="text" name="soubi-4">
                    <Br>
                    <Br>
                    足装備
                    <input type="text" name="soubi-5">
                    <Br>
                    <Br>
                    説明欄
                    <textarea name="contact"></textarea>
                    <Br>
                    <Br>
                    性別
                    <input type="radio" name="gender" value="0">男性</input>
                    <input type="radio" name="gender" value="1">女性</input>
                    <Br>
                    <Br>
                    <input class="btn btn-info" type="submit" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
