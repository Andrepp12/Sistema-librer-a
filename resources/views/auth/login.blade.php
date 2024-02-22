 
@extends('layouts.app')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="login-right">
    <div class="login-right-wrap">
        <h1>Libreria Mis Angelitos</h1>
        {{-- <p class="account-subtitle">Necesita una cuenta? <a href="{{ route('register') }}">Registrate</a></p> --}}
        <h2>Iniciar Sesion</h2>
        <form action="{{route('identificacion')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>USUARIO<span class="login-danger">*</span></label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="name">
                <span class="profile-views"><i class="fas fa-envelope"></i></span>
            </div>
            <div class="form-group">
                <label>Contraseña <span class="login-danger">*</span></label>
                <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password">
                <span class="profile-views feather-eye toggle-password"></span>
            </div>
            {{-- <div class="forgotpass">
                <div class="remember-me">
                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Recordar Contraseña
                        <input type="checkbox" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <a href="forgot-password.html">Se olvido su contraseña?</a>
            </div> --}}
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
        </form>
        <div class="login-or">
            <span class="or-line"></span>
            <span class="span-or">or</span>
        </div>
        <div class="social-login">
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</div>

@endsection
