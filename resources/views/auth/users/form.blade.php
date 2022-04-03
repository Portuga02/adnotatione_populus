@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{ url('users') }}">Voltar</a></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        @if (Request::is('*/edit'))
                            <form action="{{ url('users/update') }}/{{ $usuario->id }} " method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ 'Seu nome completo' }}</label>
                                    <input type="text" name="name" class="form-control" value="{{ $usuario->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ 'Endereço de Email' }}</label>
                                    <input type="email" name="email" class="form-control" value="{{ $usuario->email }}">
                                </div>
                                <BR>
                                <button type="submit" class="btn btn-primary">{{ 'Atualizar' }}</button>
                            </form>
                        @else
                            <form action="{{ url('users/add') }} " method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ 'Seu nome completo' }}</label>
                                    <input type="text" name="name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ 'Endereço de Email' }}</label>
                                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                                </div>
                                <BR>
                                <button type="submit" class="btn btn-primary">{{ 'Cadastrar' }}</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
