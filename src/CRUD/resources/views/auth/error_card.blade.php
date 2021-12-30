<div class="card  text-white mb-4 col-8 mx-auto" style="background-color:#fda5b2;">
  <div class="card-body">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </div>
</div>