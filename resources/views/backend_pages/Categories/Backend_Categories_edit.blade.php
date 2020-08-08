@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form class="form" action="{{ route('categories.update', $Category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @honeypot
                    <div class="form-group">
                        <input class="form-control" type="text" value="{{ $Category->category}}" name="category">
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