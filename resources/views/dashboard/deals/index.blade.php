@php
    $title = 'Deals';
    $breadcrumbs = [
        [
            'name' => 'Dashboard',
            'link' => route('dashboard'),
        ],
        [
            'name' => $title,
            'link' => false,
        ],
        [
            'name' => 'Listing',
            'link' => false,
        ],
    ];
    
@endphp

@extends('layouts.app', [
    'title' => $title,
    'breadcrumbs' => $breadcrumbs,
    'addButton' => true,
    'btn' => [
        'text' => 'Add Deal',
        'link' => route('deals.create'),
    ],
])

@section('title', $title)

@push('styles')
    <style>
        .delete,
        .edit {
            height: 40px;
            width: 40px;
            border-radius: 50%;
        }

        .image {
            width: 50px;
            height: 50px;
        }

        .swal2-popup .swal2-styled {
            margin: 0 10px !important;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="p-5">
            @if ($alert = Session::get('alert'))
                <div class="alert alert-{{ $alert['type'] }} alert-dismissible fade show" role="alert">
                    <strong>{{ $alert['msg'] }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped @if(count($deals)) datatable @endif">
                    <thead>
                        <tr>
                            <th>Image</th>
                            @role('Admin')
                                <th>Restaurant</th>
                            @endrole
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($deals))
                            @foreach ($deals as $d)
                                <tr class="align-middle">
                                    <td>
                                        <div class="image">
                                            <img src='{{ asset("uploads/$d->image") }}' alt="" class="h-100 w-100">
                                        </div>
                                    </td>
                                    @role('Admin')
                                        <td>{{ $d->restaurant->name }}</td>
                                    @endrole
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->price }}</td>
                                    <td>{!! $d->description !!}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="delete bg-danger d-flex align-items-center justify-content-center"
                                                href="javascript:void(0)">
                                                <i class="fas fa-trash-alt text-white"></i>
                                                <form action="{{ route('deals.destroy', $d->id) }}" method="post">
                                                    @csrf @method('delete')
                                                </form>
                                            </a>
                                            <a class="edit ms-2 bg-primary d-flex align-items-center justify-content-center"
                                                href="{{ route('deals.edit', $d->id) }}">
                                                <i class="fas fa-edit text-white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="align-middle">
                                <td colspan="@role('Admin') 6 @else 5 @endrole" class="text-center">
                                    <b>
                                        No deals created
                                    </b>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.delete').on('click', function() {
            swal.fire({
                icon: 'warning',
                title: 'Confirm delete',
                text: 'Are you sure to proceed?',
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) this.querySelector('form').submit()
            })


        })
    </script>
@endpush
