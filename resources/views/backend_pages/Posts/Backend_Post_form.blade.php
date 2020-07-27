@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @honeypot
                    <div class="form-group">
                        <input class="form-control" type="text" value="title" name="title">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" value="Thomas Bockhorn" name="author">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="summary-ckeditor" name="text"></textarea>
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