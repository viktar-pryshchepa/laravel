@extends('layouts.app')

@section('content')

    <div class="panel-body">
        @include('common.errors')
        <form action="/auth/login" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="login-email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="login-password">
            </div>

            <div>
                <button type="submit" class="btn btn-default">
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection