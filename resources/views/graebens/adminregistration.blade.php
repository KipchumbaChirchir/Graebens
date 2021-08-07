@extends('layouts.app')

@section('title')
    Admin Registration
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            @include('common.registration')
        </div>
    </div>
</div>
@endsection
