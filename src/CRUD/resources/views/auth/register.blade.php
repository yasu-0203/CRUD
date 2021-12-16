@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center align-items-center animate__animated animate__fadeIn">
    <div class="col-sm-6">
        <div class="card text-center border shadow-4" style="background-color:#ffffff;">
            {{-- Form --}}
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h4 class="card-title">Register</h4>
                @include('auth.error_card')
                <!-- Email入力-->
                <div class="form-outline mb-4 col-8 mx-auto">
                    <input type="name" class="form-control" name="name" value="{{ old('name') }}" />
                    <label class="form-label" for="form1Example1">Your Name</label>
                </div>
                <div class="form-outline mb-4 col-8 mx-auto">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
                    <label class="form-label" for="form1Example1">Email address</label>
                </div>
                <!-- Password入力-->
                <div class="form-outline mb-4 col-8 mx-auto">
                    <input type="password" class="form-control" name="password" autocomplete="new-password" />
                    <label class="form-label" for="form1Example2">Password</label>
                </div>
                <div class="form-outline mb-4 col-8 mx-auto">
                    <input type="password-confirm" class="form-control" name="password_confirmation"
                        autocomplete="new-password" />
                    <label class="form-label" for="form1Example2">Confirm
                        Password</label>
                </div>
                <p class="card-text">
                    登録済みの方は
                    <a href="{{ route('login') }}">こちら<a>
                    から
                </p>
                {{-- Registerボタン --}}
                <button type="submit" class="btn btn-outline-primary btn-rounded mb-4 " data-mdb-ripple-color="#000000">
                    Register
                </button>
            </form>
        </div>
    </div>
</div>
@endsection