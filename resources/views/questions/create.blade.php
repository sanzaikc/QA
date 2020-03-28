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
                    <form action=" {{ route('questions.store') }} " method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="text-muted" id="title"><h5>Title of the question</h5></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter the title of your question" value=" {{ old('title') }} ">

                            @error('title')
                                <p class="invalid-feedback"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="text-muted" id="body"><h5>Your Question</h5></label>
                            <textarea name="body"  class="form-control @error('title') is-invalid @enderror"  cols="30" rows="8" placeholder="Elaborate your question"> {{ old('body') }} </textarea>

                            @error('body')
                                <p class="invalid-feedback"> {{ $errors->first('body') }} </p>
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
