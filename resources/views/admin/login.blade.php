@extends('layouts.app-admin')

@section('title', 'Login')

@section('body')

<div class="login-page">
    <h2 class="login-page-title">Mon portfolio</h2>
    @if(session('error'))
        <div class="login-page-error">{{ session('error') }}</div>
    @endif
    <div class="login-page-content">        
        <div class="login-page-body">            
            <h2 class="login-page-title">Connectez-vous</h2>
            <form action="{{ route('admin.login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" class="form-control" placeholder="Votre nom d'utilisateur" name="username" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" class="form-control" placeholder="Votre mot de passe" name="password">
                </div>
                <button type="submit" class="btn w-100">Se connecter</button>
            </form>
        </div>
    </div>
</div>
@endsection