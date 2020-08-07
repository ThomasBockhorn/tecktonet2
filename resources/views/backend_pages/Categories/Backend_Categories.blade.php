@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">List of Categories</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Tag</th>
                                <th>Project ID</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->category}}</td>
                                <td>{{$category->project_id}}</td>
                                <td><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success"><i
                                            class="fas fa-edit"></i> Edit Category</a></td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                        @method(" DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                            Delete Category</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection