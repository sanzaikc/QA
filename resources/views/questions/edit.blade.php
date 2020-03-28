@extends('layouts.app')

@section('content')
<div class="container flex">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <h2>Update Your Question</h2>
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-primary rounded-pill ml-auto">Back to all questions</a>
                </div>

                <div class="card-body">
                    <form action=" {{ route('questions.update', $question) }} " method="POST">
                        @method('PUT')
                       @include('questions._form', ['btnText' => 'Update Question'])
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
