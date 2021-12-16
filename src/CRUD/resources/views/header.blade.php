<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">APPNAME</a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">example</a>
          <a class="nav-link" href="#">example</a>
          <a class="nav-link" href="#">example</a>
          <a class="nav-link disabled">example</a>
        </div>
      </div>
    </div>
    <ul class="navbar-nav">
      @auth
      <!-- Avatar -->
      {{-- 認証を使う際、アバターに関してはログインしていない時は時はアバターは表示されず、登録画面に遷移する記述を追加してほしい(sign inや会員登録など) --}}
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button"
          data-mdb-toggle="dropdown" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="48"
            alt="Portrait of a Woman" loading="lazy" />
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            {{-- onclickの後はスクリプト文なのでここの処理をresources/js/app.jsに移行し、Jqueryの記述にする必要がある --}}
            <a class="dropdown-item logout" href="{{ route('logout') }}">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </li>
      @endauth
      @guest
      <a class="nav-link" href="{{ route('register') }}">register</a>
      @endguest
    </ul>
  </nav>
  <!-- Navbar -->
</header>