@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(session()->has($msg))
  <div class="container-xl">
    <div class="flash-message">
      <p class="alert alert-{{ $msg }}">
        {{ session()->get($msg) }}
      </p>
    </div>
  </div>

  @endif
@endforeach