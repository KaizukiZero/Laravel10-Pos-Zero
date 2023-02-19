@extends('layouts.master')

@section('contents')

    <div class="login-container">
        <div class="login-form">
            <div class="login-title">
                Welcome <br>
                {{env("APP_NAME")}}
            </div>
            <form action="{{route('admins_login')}}" method="post">
                <div class="login-field">
                    @csrf
                    @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    <input type="text" name="username" id="username" class="login-input" placeholder="Username">

                    <input type="password" name="password" id="password" class="login-input" placeholder="Password">
                    <button type="submit" class="btn btn-login">Login</button>
                </div>

            </form>
        </div>
    </div>

@endsection
