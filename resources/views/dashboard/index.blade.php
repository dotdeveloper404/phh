@extends('layouts.app', ['title' => 'Dashboard'])

@section('title', 'Dashboard')

@section('content')

    <div>
        <h1 class="display-4">Welcome {{ auth()->user()->name }}</h1>
    </div>

@endsection
