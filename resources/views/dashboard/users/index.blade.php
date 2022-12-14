@php
    $breadcrumbs = [
        [
            'name' => 'Dashboard',
            'link' => route('dashboard'),
        ],
        [
            'name' => 'Users',
            'link' => false,
        ],
        [
            'name' => 'Listing',
            'link' => false,
        ],
    ];
    $title = 'Users';
    // $canCreateUser = auth()->user()->can('user-create')
    $canCreateUser = false
@endphp

@extends('layouts.app', [
    'title' => $title,
    'breadcrumbs' => $breadcrumbs,
    'addButton' => true,
    'btn' => [
        'text' => $canCreateUser ? 'Add User' : 'Back',
        'link' => $canCreateUser ? route('users.create') : url()->previous(),
    ],
])

@section('title', $title)

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <p class="mb-0">{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif


    <table class="table table-bordered table-striped @if(count($data)) datatable @endif">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr class="align-middle">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {!! $data->render() !!} --}}
@endsection
