@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">List of Email Subscribers</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Subscriptions as $subscription)
                            <tr>
                                <td>{{$subscription->id}}</td>
                                <td>{{$subscription->email}}</td>
                                <td>
                                    <form action="{{ route('subscription.destroy', $subscription->id) }}" method="POST">
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
                    {{$Subscriptions->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection