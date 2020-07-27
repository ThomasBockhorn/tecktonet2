@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h3>{{ $Project->title }}</h3>
                <h6>{{ $Project->customer }}</h6>
                <date>{{ $Project->created_at->format('d-m-Y') }}
                    <date>
                        <br>

                        <hr>
                        <div>
                            {!! $Project->description !!}
                        </div>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="m-2">
                                    <a href="{{ route('projects.edit', $Project->id) }}" class="btn btn-success"><i
                                            class="fas fa-edit"></i> Edit</a>
                                </div>
                                <div class="m-2">
                                    <form action="{{ route('projects.destroy', $Project->id) }}" method="POST">
                                        @method(" DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                            Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection