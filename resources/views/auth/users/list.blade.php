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

                        <h2>{{ __('Lista dos usuários do sistema!') }} </h2>
                        @foreach ($usuarios as $u)
                            <p> [{{ $u->id }}] &nbsp;{{ $u->name }} | {{ $u->email }} </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
