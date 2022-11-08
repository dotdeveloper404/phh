@php
    $breadcrumbs = [
        [
            'name' => 'Dashboard',
            'link' => route('dashboard'),
        ],
        [
            'name' => 'Products',
            'link' => false,
        ],
        [
            'name' => 'Listing',
            'link' => false,
        ],
    ];
    $title = 'Products';
@endphp

@extends('layouts.app', [
    'title' => $title, 
    'breadcrumbs' => $breadcrumbs,
    'addButton' => true,
    'btn' => [
        'text' => 'Add Product',
        'link' => route('product.create')
    ]
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
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($products))
                            @foreach ($products as $product)
                                <tr class="align-middle">
                                    <td>
                                        <div class="image">
                                            <img src='{{ asset($product->image) }}' alt="" class="h-100 w-100">
                                        </div>
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="delete bg-danger d-flex align-items-center justify-content-center"
                                                href="javascript:void(0)"
                                                data-url="{{ route('product.destroy', $product->id) }}">
                                                <i class="fas fa-trash-alt text-white"></i>
                                            </a>
                                            <a class="edit ms-2 bg-primary d-flex align-items-center justify-content-center"
                                                href="{{ route('product.edit', $product->id) }}">
                                                <i class="fas fa-edit text-white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="align-middle">
                                <td colspan="5" class="text-center">
                                    <b>
                                        No products created
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
