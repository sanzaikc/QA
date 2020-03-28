@if(session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey,{{ auth()->user()->name }} !</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif

@if(session('error'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy {{ auth()->user()->name }} !</strong> {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif