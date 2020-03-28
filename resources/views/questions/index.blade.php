@extends('layouts.app')

@section('content')
<div class="container flex">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        <h2>All Questions</h2>
                        <button  class="ml-auto btn btn-outline-secondary btn-sm"><a href="{{ route('questions.create') }}">Ask your question!</a></button>
                    </div>
                </div>

                <div class="card-body">
                    @include('layouts._flashMsg')
                    
                    @foreach ($questions as $question )
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong> {{ $question->votes }} </strong> {{ Str::plural('vote', $question->votes) }}
                                </div>
                                <div class="status {{ $question->status }}">
                                    <strong> {{ $question->answers }} </strong> {{ Str::plural('answer', $question->answers) }}
                                </div>
                                <div class="view">
                                     {{ $question->views ." ". Str::plural('view', $question->views) }}
                                </div>
                            </div>

                            <div class="media-body">
                                    <div class="d-flex">
                                        <h3 class="mt-0"> <a href="{{ $question->url}}">{{ $question->title }}</a> </h3>
                                        <a href=" {{ route('questions.edit', $question) }} " class="btn btn-outline-info ml-auto"> Edit </a>
                                    </div>
                                    <p class="lead">
                                        Asked by <a href="{{ $question->user->url}}"> {{$question->user->name}} </a>
                                        <small class="text-muted"> {{ $question->created_date }} </small>
                                    </p>
                                    {{  Str::limit($question->body , 250) }}


                            </div>

                        </div>
                        <hr>
                    @endforeach

                    <div class="mx-auto">
                        {{ $questions->links() }}
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
