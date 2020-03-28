@extends('layouts.app')

@section('content')
<div class="container flex">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        <h2>All Questions</h2>
                        <a href="{{ route('questions.create') }}" class="ml-auto btn btn-outline-secondary">Ask your question!</a>
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
                                        <h3 class="mt-0"> <a href="{{ $question->url}}" class="bg-light">{{ $question->title }}</a> </h3>
                                        <a href=" {{ route('questions.edit', $question) }} " class="btn btn-outline-info ml-auto"> Edit </a>
                                        <form action=" {{ route('questions.destroy', $question) }} " method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-outline-danger ml-1" onclick="confirm('Are you sure you want to delete?')" value="Delete">
                                        </form>
                                    </div>
                                    <p class="lead">
                                        Asked by <a href="{{ $question->user->url}}" class="text-info"> {{$question->user->name}} </a>
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
