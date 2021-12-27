@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card" style="background-color:#ffffff;">
        <div class="card-body">
          <h3 class="card-title">My Profile</h3>
          <form method="POST" action="{{ route('userprofile.update') }}">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="img-box col-3">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="128"
                  width="128" alt="" />
              </div>
              <div class="col-9">
                <h3>Your Name</h3>
                <div class="form-outline mb-4">
                  <input type="name" class="form-control" name="name" value="{{ $user->name }}" />
                  <label class="form-label" for="form1Example1">Your Name</label>
                </div>
                <h3>Email</h3>
                <div class="form-outline mb-4">
                  <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
                  <label class="form-label" for="form1Example1">Email address</label>
                </div>
                {{-- passwordのアップデート処理も一応ここで行えるようにしたい --}}

                {{-- <div class="form-outline mb-4 col-8 mx-auto">
                  <input type="password" class="form-control" name="password" autocomplete="new-password" />
                  <label class="form-label" for="form1Example2">Password</label>
                </div>
                <div class="form-outline mb-4 col-8 mx-auto">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    autocomplete="new-password" />
                  <label class="form-label" for="form1Example2">Confirm
                    Password</label>
                </div> --}}
              </div>
            </div>
            <button type="submit" class="btn btn-outline-primary btn-rounded mb-4" data-mdb-ripple-color="#000000">
              UPDATE
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection