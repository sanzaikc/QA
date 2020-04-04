<div class="col-md-12">
            <div class="card">
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

                                <div class="row">
                                    <div class="col-4 ">
                                        @can('update', $answer)
                                            <a href=" {{ route('questions.answers.edit', [$question, $answer]) }} " class="btn btn-sm btn-outline-info" role="button"> Edit </a>
                                        @endcan

                                        @can('update', $answer) 
                                        <form class="form-delete" action=" {{ route('questions.answers.destroy', [$question, $answer]) }} " method="post" >
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-sm btn-outline-danger" onclick="confirm('Are you sure you want to delete?')" value="Delete">
                                        </form>
                                        @endcan                     
                                    </div>
    
                                    <div class="col-md-4"></div>
    
                                    <div class="col-md-4">
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
                </div>

                @include('answers._ansInput', [
                    'title' => 'Your Answer', 
                    'btnTxt' => 'Sumbit Answer', 
                    'route' => 'questions.answers.store', 
                    'para'=> $question , 
                    'method'=> ''])
            </div>
        </div>