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
                    INDEXです
                    <a href="{{ route('contact.create')}}">新規登録（createに移動）</a>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">soubi1</th>
                            <th scope="col">created_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <th>{{ $contact->id}}</th>
                                <td>{{ $contact->{'soubi-1'} }}</td>
                                <td>{{ $contact->{'created_at'} }}</td>
                            </tr>
                                @endforeach
                        
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
