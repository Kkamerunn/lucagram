@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/rocket.png" class="rounded-circle" style="height: 150px; width: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $user->username }}</h1>
                <a href="{{ route('create') }}">Add post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>153</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="/img/workstation.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/mac.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/laptop.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
