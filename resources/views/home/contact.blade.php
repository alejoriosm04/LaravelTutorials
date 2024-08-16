@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <p class="lead">{{ $viewData['description'] }}</p>
        </div>
        <div class="col-lg-6">
            <p class="lead">{{ $viewData['email'] }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <p class="lead">{{ $viewData['address'] }}</p>
        </div>
        <div class="col-lg-6">
            <p class="lead">{{ $viewData['phone'] }}</p>
        </div>
    </div>
</div>
@endsection