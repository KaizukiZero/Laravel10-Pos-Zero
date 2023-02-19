@extends('layouts.master')

@section('contents')

    <div class="login-container">
        <div class="login-form">
            <div class="login-title">
                Welcome <br>
                {{env("APP_NAME")}}
            </div>
            <form action="" method="post">
                <div class="login-field">
                    <input type="text" name="username" id="username" class="login-input" placeholder="Username">
                    <input type="password" name="password" id="password" class="login-input" placeholder="Password">
                    <button type="submit" class="btn btn-login">Login</button>
                </div>

            </form>
        </div>
    </div>

@endsection
