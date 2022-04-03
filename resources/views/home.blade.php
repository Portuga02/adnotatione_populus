@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home do Sistema!') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1> Seja bem vindo </h1>
                        <h2>{{ __('Você está Logado em nosso sistema!') }} </h2>

                        <a href="{{ url('users') }}"> <i>Lista de usuários do sistema </i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
