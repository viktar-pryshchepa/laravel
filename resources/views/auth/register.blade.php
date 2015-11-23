@extends('layouts.app')

@section('content')

    <div class="panel-body">
        @include('common.errors')
        <form action="/auth/register" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div>
                <label for="email">Name</label>
                <input type="text" name="name" id="register-name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="register-email">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="register-password">
            </div>
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="register-password-confirm">
            </div>

            <div>
                <button type="submit" class="btn btn-default">
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection