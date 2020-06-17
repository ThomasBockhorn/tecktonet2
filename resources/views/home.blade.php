@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        @include('components/backend_components/breadcrumb/breadcrumb')
        @include('components/backend_components/home/home')
    </div>
</div>
@endsection
