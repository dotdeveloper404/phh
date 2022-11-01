@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div>
        <h1>Welcome {{ auth()->user()->name }}</h1>
    </div>
    
@endsection