@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        <h2 class="">{{ $question->title }}</h2>
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary ml-auto">Back to all questions</a>
                    </div>
                </div>

                <div class="card-body">
                    {!! $question->html_body !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
