@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form" action="{{ route('projects.update', $Project->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @honeypot
                    <div class="form-group">
                        <input class="form-control" type="text" value="{{ $Project->title }}" name="title">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" value="{{ $Project->customer }}" name="customer">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="summary-ckeditor" name="description">
                             {!! $Project->description !!}
                         </textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" aria-labelledby="dropdownMenuButton" name="category_id"
                            id="category_list">
                            @foreach($ProjectCategories as $projectCategory)
                            <option value="{{ $projectCategory->id }}" class="dropdown-item">
                                {{ $projectCategory->category }}</option>
                            @endforeach
                        </select>
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