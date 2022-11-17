@php
    $breadcrumbs = [
        [
            'name' => 'Dashboard',
            'link' => route('dashboard'),
        ],
        [
            'name' => 'Leads',
            'link' => false,
        ],
    ];
    $title = 'Contact Leads';
@endphp

@extends('layouts.app', [
    'title' => $title,
    'breadcrumbs' => $breadcrumbs,
    'addButton' => true,
    'btn' => [
        'text' => 'Back',
        'link' => route('dashboard'),
    ],
])

@section('title', $title)

@push('styles')
    <style>
        .delete {
            height: 40px;
            width: 40px;
            border-radius: 50%;
        }
        .swal2-popup .swal2-styled {
            margin: 0 10px !important;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="p-5">
            <div class="table-responsive">
                <table class="table table-striped @if(count($leads)) datatable @endif">
                    <thead>
                        <tr class="fw-bold border-bottom">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($leads))
                            @foreach ($leads as $lead)
                                <tr class="align-middle">
                                    <td>{{ $lead->name }}</td>
                                    <td>{{ $lead->email }}</td>
                                    <td>{{ $lead->phone }}</td>
                                    <td>{{ $lead->message }}</td>
                                    <td>
                                        <a class="delete bg-danger d-flex align-items-center justify-content-center"
                                            href="javascript:void(0)" data-url="{{ route('contact.destroy', $lead->id) }}">
                                            <i class="fas fa-trash-alt text-white"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="align-middle">
                                <td colspan="5" class="text-center">
                                    <b>
                                        No leads created
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
                if (result.isConfirmed) {
                    axios.delete($(this).data('url'))
                        .then(response => response.data)
                        .then(data => {
                            if (data.success) {
                                window.location.reload()
                            } else {
                                swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong!',
                                })
                            }
                        })
                        .catch(err => {
                            swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                            })
                        })
                }
            })


        })
    </script>
@endpush
