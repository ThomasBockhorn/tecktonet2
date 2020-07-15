@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form" action="{{ route('posts.update', $Blog_Post->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @honeypot
                    <div class="form-group">
                        <input class="form-control" type="text" value="{{ $Blog_Post->title }}" name="title">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" value="{{ $Blog_Post->author }}" name="author">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="summary-ckeditor" name="text">
                             {!! $Blog_Post->text !!}
                         </textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection