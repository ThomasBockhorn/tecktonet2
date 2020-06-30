@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h3>{{ $Blog_Post->title }}</h3>
                <h6>{{ $Blog_Post->author }}</h6>
                <date>{{ $Blog_Post->created_at->format('d-m-Y') }}<date>
            </div>
        </div>
    </div>
</div>
@endsection