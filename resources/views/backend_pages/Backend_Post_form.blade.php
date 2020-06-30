@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form" action="{{ route('posts.store')}}" action='POST' enctype="multipart/form-data">
                {{csrf_field()}}    
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
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection