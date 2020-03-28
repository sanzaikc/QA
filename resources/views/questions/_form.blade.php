@csrf
<div class="form-group">
    <label class="text-muted" id="title"><h5>Title of the question</h5></label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter the title of your question" value=" {{ old('title', $question->title) }} ">

    @error('title')
        <p class="invalid-feedback"> {{ $message }} </p>
    @enderror
</div>
<div class="form-group">
    <label class="text-muted" id="body"><h5>Your Question</h5></label>
    <textarea name="body"  class="form-control @error('title') is-invalid @enderror"  cols="30" rows="8" placeholder="Elaborate your question"> {{ old('body', $question->body) }} </textarea>

    @error('body')
        <p class="invalid-feedback"> {{ $errors->first('body') }} </p>
    @enderror
</div>
<div class="form-group">
    <input type="submit" class="btn btn-outline-success rounded-pill" value="{{ $btnText }}">
</div>