@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div> --}}
            <div class="card">
                <div class="card-header h4">Dashboard</div>
                <div class="card-body text-center ">
                    <h5 class="card-title">example</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the
                        card's content.
                    </p>
                    <div class="card-icon d-flex justify-content-evenly">
                        {{-- カレンダー一覧 --}}
                        <a href="#">
                            <i class="far fa-calendar-alt fa-3x" style="color: #7ee845"></i>
                        </a>
                        {{-- 1日ずつの予定 --}}
                        <a href="#">
                            <i class="far fa-calendar fa-3x" style="color: #1af0ff"></i>
                        </a>
                        {{-- 予定追加 --}}
                        <a href="#">
                            <i class="fas fa-pen-alt fa-3x" style="color: #f0fe2f"></i>
                        </a>
                        {{-- ユーザー編集画面へ --}}
                        <a href="#">
                            <i class="fas fa-user-alt fa-3x" style="color: #fe2f2f"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection