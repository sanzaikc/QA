<div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   <div class="card-body">
                    <div class="card-title">
                        <h2> {{ $answerCount ." ". Str::plural('Answer',$answerCount) }} </h2>
                    </div>
                    @foreach ($answers as $answer)
                    <hr>
                    <div class="media">
                        <div class="flex-column vote-controls">
                            <a href="" title="Mark as useful" class="vote-up">
                                <i class="fas fa-caret-up fa-3x"></i>
                            </a>
                            <span class="votes-count">1423</span>
                            <a href="" title="Not useful" class="vote-down off">
                                <i class="fas fa-caret-down fa-3x"></i>
                            </a>
                            <a href="" title="Mark as best answer" class=" mt-2 bestAns ">
                                <i class="fas fa-check fa-2x"></i>
                            </a>
                        </div>
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
                   </div>
                    @endforeach
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>Your Answer</h2>
                        </div>
                        <form action=" {{ route('questions.answers.store', $question) }} " method="post">
                           @include('answers._form', ['btnTxt' => 'Submit Answer'])
                        </form>
                    </div>
                </div>
            </div>
        </div>