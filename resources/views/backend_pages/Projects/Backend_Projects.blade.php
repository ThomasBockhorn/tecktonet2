@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">List of Posts</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>More Details</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Projects as $project)
                            <tr>
                                <td>{{$project->id}}</td>
                                <td>{{$project->title}}</td>
                                <td><a class="btn btn-primary" href="{{ route('projects.show', $project->id) }}"><i
                                            class="fas fa-info-circle"></i> Details</a></td>
                                <td><a href="{{ route('projects.edit', $project->id) }}" class="btn btn-success"><i
                                            class="fas fa-edit"></i> Edit</a></td>
                                <td>
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                        @method(" DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$Projects->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection