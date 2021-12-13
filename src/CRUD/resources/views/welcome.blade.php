@extends('layouts.app')
@section('content')
<!-- Background image -->
<div class="p-5 text-center bg-image" style="
          background-image: url('');
          height: 1000px;
        ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white animate__animated animate__backInDown">
                {{-- 見出しとテキストになるので考えよう(後回しでOK) --}}
                <h1 class="mb-3">Heading</h1>
                <h4 class="mb-3">Subheading</h4>
                {{-- ログインしていない場合ははSTARTを押した際、登録画面に遷移するようにしたい --}}
                <a class="btn btn-outline-light btn-lg " href="#!" role="button"
                    data-mdb-ripple-color="#2dbfd2">START</a>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->
@endsection