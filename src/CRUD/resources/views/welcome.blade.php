@extends('layouts.app')
@section('content')
<!-- Background image -->
<div class="p-5 text-center bg-image" style="
          background-image: url('https://pixabay.com/get/g0edf9a7dadce2d79b95547cde6944529f43e16a17aa75a38d34bfbe156df726546721cc3ae63de414df0a5458fdf3ce48b8622b6d8d1f3b3aa31383d490327ac7f1b9765b917e268618c25ee54ac155d_1920.jpg');
          height: 1000px;
        ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white animate__animated animate__backInDown">
                <h1 class="mb-3">Heading</h1>
                <h4 class="mb-3">Subheading</h4>
                <a class="btn btn-outline-light btn-lg " href="#!" role="button"
                    data-mdb-ripple-color="#2dbfd2">START</a>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->
@endsection