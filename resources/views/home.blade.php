@extends('layouts.app')

@section('title', 'Página Home')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('aw-1.0.0') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Programa AW Regulagens</h1>
                    {{ __('Bem vindo!') }} - <strong>{{$name}}</strong>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection