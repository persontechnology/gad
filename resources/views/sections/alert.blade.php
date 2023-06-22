@foreach (['success','danger','info','primary','warning','dark'] as $msg)
    @if (Session::has($msg))
        
        <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
            <strong>{{ Session::get($msg) }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif
@endforeach

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
            <strong>{{ $error }}</strong>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif