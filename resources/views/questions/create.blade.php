@extends('layouts.app')

@section('content')
<div class="container flex">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <h2>Ask Your Question</h2>
                        <button class="btn btn-outline-primary btn-sm ml-auto"><a href="{{ route('questions.index') }}">Back to all questions</a></button>
                    </div>
                </div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="text-muted" id="title"><h5>Title of the question</h5></label>
                            <input type="text" class="form-control" name="title" placeholder="Enter the title of your question">

                            @error('title')
                                <p class="invalid-feedback"> {{ $error->first('title') }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-muted" id="body"><h5>Your Question</h5></label>
                            <textarea name="body"  class="form-control"  cols="30" rows="8" placeholder="Elaborate your question"></textarea>

                            @error('body')
                                <p class="invalid-feedback"> {{ $error->first('body') }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Ask Question">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
