@extends('layouts.app')
@section('content')
    @if (\Illuminate\Support\Facades\Auth::check())
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <strong> Пользователь:</strong> <br>
                            <hr>
                            <strong>Имя:</strong> <br>
                            <input type="text" name="name"
                                   value="{{old ('name', $user->name )}}"/><br>
                            @if ($errors->any('name'))
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->get('name') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <hr>
                            <strong>Email:</strong> <br>
                            <input type="text" name="email"
                                   value="{{old ('email', $user->email )}}"/><br>
                            @if ($errors->any('name'))
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->get('name') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <input type="submit" value="Сохранить"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection