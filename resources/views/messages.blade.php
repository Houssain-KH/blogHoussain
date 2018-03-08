@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    @if(count($messages) > 0 )
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Nom:{{$message->name}}</li>
                <li class="list-group-item">Email:{{$message->email}}</li>
                <li class="list-group-item">Message:{{$message->message}}</li>
            </ul>
            </br>
        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent <!-- pour montrer le parent-->
    <p>This is l'enfant de sidebar</p>
@endsection
