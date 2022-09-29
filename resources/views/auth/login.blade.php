@extends('auth.auth')
@section('title')
Login
@endsection

@section('content')


<div class="wrapper">

    <div class="text-center mt-4 name p-3">
        Login
    </div>

        <form class="p-3 mt-3" action="{{ route('validatelogin') }}" method="POST">
            @csrf

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" id="email" placeholder="Enter your Email Address" required autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
            <div class="container my-3 ">
                <div class="col-md-12 text-center">
                    <button class="btn mt-3" type="submit">Login</button>
                </div>
            </div>
        </form>

        <div class="box">
            <a href="#">Forget password?</a>

        </div>
        <div class="box reg-button">
            <a href="{{route('registration')}}">Registration</a>
        </div>

</div>


@endsection
