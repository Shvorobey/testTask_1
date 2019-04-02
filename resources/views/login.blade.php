@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Поздравляю !!!</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Вы вошли под именем <strong>{{Auth::user ()->name}}</strong>
                    </div>
                </div>
                <a href={{route('form-action-update')}} > Изменить мои данные </a>
            </div>
        </div>
    </div>
@endsection