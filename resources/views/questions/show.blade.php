@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('layouts._flashMsg')

               <div class="card-body">
                <div class="card-title">
                    <div class="d-flex">
                        <h2 class="">{{ $question->title }}</h2>
                        <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary rounded-pill ml-auto">Back to all questions</a>
                        <hr>
                    </div>
                </div>

                <div class="media">
                    <div class="flex-column vote-controls">
                        <a href="" title="Mark as useful" class="vote-up">
                            <i class="fas fa-caret-up fa-3x"></i>
                        </a>
                        <span class="votes-count">1423</span>
                        <a href="" title="Not useful" class="vote-down off">
                            <i class="fas fa-caret-down fa-3x"></i>
                        </a>
                        <a href="" title="Mark as favourite" class="favourite mt-2 favourited">
                            <i class="fas fa-star fa-2x"></i>
                            <span class="favourite-count ">1423</span>
                        </a>
                    </div>
                    <div class="media-body">
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
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        @include('answers._index', [ 'answerCount' => $question->answers_count, 'answers' => $question->answers ])
    </div>

</div>
@endsection
