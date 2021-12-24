@extends('layouts.app')
@section('content')
<!-- Background image -->
<div class="p-5 text-center bg-image" style="
          background-image: url('https://www.photock.jp/photo/middle/photo0000-2786.jpg');
          height: 1000px;
        ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="animate__animated animate__fadeInRight bg-secondary text-white mt-5 w-75">
            <div class="p-1">
                <h2>This app is</h2>
                <p>Wouldn't it be nice to write an explanation about what you can do with this app?</p>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center h-75">
            <div class="text-white animate__animated animate__backInDown">
                <h1 class="mb-3">Please</h1>
                <h4 class="mb-3">Press the button</h4>
                <a class="btn btn-outline-light btn-lg " href="{{ route('home') }}" role="button"
                    data-mdb-ripple-color="#2dbfd2">START</a>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->
@endsection