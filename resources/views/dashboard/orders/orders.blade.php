@php
    $breadcrumbs = [
        [
            'name' => 'Dashboard',
            'link' => route('dashboard'),
        ],
        [
            'name' => 'Orders',
            'link' => false,
        ],
        [
            'name' => 'Listing',
            'link' => false,
        ],
    ];
    $title = 'Orders';
@endphp

@extends('layouts.app', [
    'title' => $title,
    'breadcrumbs' => $breadcrumbs,
])

@section('title', $title)

@section('content')
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User name</th>
                        <th>Status</th>
                        <th>Order code</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($orders))
                        @foreach ($orders as $order)
                            <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ Str::ucfirst($order->status) }}</td>
                                <td>{{ $order->code }}</td>
                                <td>{{ count($order->items) }}</td>
                                <td>{{ $order->total }}</td>
                                <td>
                                    <button class="btn btn-primary"
                                        onclick="loadDetails({{ $order->items }})">Details</button>
                                    {{-- data-bs-toggle="modal" data-bs-target="#order-details-modal" --}}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">
                                <b>
                                    No orders placed
                                </b>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Order details modal -->
    <div class="modal fade" id="order-details-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Order Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td></td>
                                    <td>
                                        <div style="height: 50px; width: 50px;">
                                            <img src="" alt="Product Image" class="img-fluid">
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const loadDetails = data => {
            console.log(data)
            let html = ''
            data.forEach((val, i) => {
                html += `
                        <tr class="align-middle">
                            <td>${++i}</td>
                            <td>
                                <img src="/${val.image}" alt="Product Image" class="img-fluid" style="height: 50px; width: 50px;">
                            </td>
                            <td>${val.name}</td>
                            <td>${val.price}</td>
                            <td>${val.quantity}</td>
                            <td>${val.subtotal}</td>
                        </tr>
                        `
            })
            
            $('#order-details-modal table tbody').html(html)

            bootstrap.Modal.getOrCreateInstance('#order-details-modal').show()
        }
    </script>
@endpush
