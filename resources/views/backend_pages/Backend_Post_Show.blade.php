@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h3>{{ $Blog_Post->title }}</h3>
                <h6>{{ $Blog_Post->author }}</h6>
                <date>{{ $Blog_Post->created_at->format('d-m-Y') }}<date>
                <br>
                <hr>
                <div>
                {!! $Blog_Post->text !!}
                </div>
                <hr>
                <div>
                    <a href="{{ route('posts.edit', $Blog_Post->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('posts.destroy', $Blog_Post->id) }}" method="POST">
                        @method(" DELETE")    
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection