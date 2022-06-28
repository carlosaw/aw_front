@extends('layouts.app')

@section('title', 'Página Home')

@section('content')
<a href="/logout" style="float: right">Sair</a>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Página Home</h1>
                    {{ __('You are logged in!') }} - <strong>{{$name}}</strong>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection