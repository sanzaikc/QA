@extends('layouts.app')

@section('content')
<div class="container flex">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <h2>Ask Your Question</h2>
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-primary rounded-pill ml-auto">Back to all questions</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action=" {{ route('questions.store') }} " method="POST">
                       @include('questions._form', ['btnText' => 'Ask Question'])
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
