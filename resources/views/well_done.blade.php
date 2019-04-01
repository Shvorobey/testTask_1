@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1> Данные обновлены: </h1>
            {{--{{dd($user)}}--}}
{{$user->name}}
            {{$user->email}}
        </div>
    </div>
@endsection