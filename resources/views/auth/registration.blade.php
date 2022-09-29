@extends('auth.auth')
@section('title')
Registration
@endsection

@section('content')

<div class="wrapper">

    <div class="text-center mt-4 name">
        Registration
    </div>


    <form class="p-3 mt-3" action="{{route('registrationprocess')}}" method="POST">
        @csrf
        <div class="flex-container">
            <div class="flex-item-left">

                <div class="form-field d-flex align-items-center">
                    <span><i class="far fa-user"></i></span>
                    <input type="text" name="fname" id="fname" placeholder="Enter your First Name" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                    @endif
                </div>
            </div>

            <div class="flex-item-right">
                <div class="form-field d-flex align-items-center">
                    <span><i class="far fa-user"></i></span>
                    <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('lname') }}</span>
                    @endif
                </div>



            </div>
        </div>
        <div class="form-field d-flex align-items-center">
            <span><i class="far fa-envelope"></i></span>
            <input type="email" name="email" id="email" placeholder="Enter your Email Address" required autofocus>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-field d-flex align-items-center">
            <span><i class="fad fa-mobile-alt"></i></span>
            <input type="number" name="contactno" id="contactno" placeholder="Enter your Mobile Number" required
                autofocus>
            @if ($errors->has('contactno'))
            <span class="text-danger">{{ $errors->first('contactno') }}</span>
            @endif
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Password">
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Confirm Password">
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
                <button type="submit" class="btn mt-3">Registration Now</button>
            </div>
        </div>
    </form>
    <div class="container col-md-12 text-center">
        Already have an account. <a href="{{route('login')}}">Login Now</a>
    </div>
</div>




@endsection
