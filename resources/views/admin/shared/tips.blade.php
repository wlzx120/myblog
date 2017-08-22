@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(session()->has($msg))
  <div class="callout callout-info">
    <h5>Tip!</h5>
    <p>{{ session()->get($msg) }}</p>
  </div>
  @endif
@endforeach
@if(count($errors) > 0)
<div class="callout callout-info">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif
