@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        <h2 class="">{{ $question->title }}</h2>
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary rounded-pill ml-auto">Back to all questions</a>
                    </div>
                </div>

                <div class="card-body">
                    {!! $question->html_body !!}

                    <div class="float-right">
                        <span class="text-muted">
                            Asked {{ $question->created_date }}
                        </span>
                        <div class="media mt-2">
                            <a href=" {{ $question->user->url }} " class="pr-2">
                                <img src="{{ $question->user->avatar }} " alt="" class="rounded-circle">
                            </a>
                            <div class="media-body mt-1">
                                <a href=" {{ $question->user->url }} "> {{ $question->user->name }} </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2> {{ $question->answers_count ." ". Str::plural('Answer',$question->answers_count) }} </h2>
                    </div>

                    <br>

                    @foreach ($question->answers as $answer)
                        <div class="media">
                            <div class="media-body">
                                {!! $answer->html_body !!}
                                
                                <div class="float-right">
                                    <span class="text-muted">
                                        Answered {{ $answer->created_date }}
                                    </span>
                                    <div class="media mt-2">
                                        <a href=" {{ $answer->user->url }} " class="pr-2">
                                            <img src="{{ $answer->user->avatar }} " alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body mt-1">
                                            <a href=" {{ $answer->user->url }} "> {{ $answer->user->name }} </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
