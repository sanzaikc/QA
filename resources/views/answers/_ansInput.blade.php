<div class="card mt-3">
    <div class="card-body">
        <div class="card-title">
            <h2> {{ $title }} </h2>
        </div>
        <form action=" {{ route($route, $para) }} " method="post">    
            @csrf
            @method($method)
            <textarea name="body" id="" cols="30" rows="7" class="form-control  @error('body') is-invalid @enderror"></textarea>
            @error('body')
                <p class="invalid-feedback"> {{ $errors->first('body') }} </p>
            @enderror
            <input type="submit" class="btn btn-outline-success rounded-pill mt-2" value="{{ $btnTxt }}">
        </form>
    </div>
</div>
