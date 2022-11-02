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
    $selectedOrder = '';
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
                        <th>ID</th>
                        <th>User name</th>
                        <th>Order code</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($orders))
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->code }}</td>
                                <td>{{ count($order->items) }}</td>
                                <td>{{ $order->total }}</td>
                                <td>
                                    <button class="btn btn-primary" onclick="putId(this, {{ $order->id }})" id="{{ $order->id }}">Details</button>
                                    {{-- data-bs-toggle="modal"
                                        data-bs-target="#order-details-modal" --}}
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <x-order-details-table id="order-items-table"></x-order-details-table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // const openModal = id => {
        //     console.log(123)
        //     $('#order-items-table').data('order-id', id)

        //     // bootstrap.Modal.getOrCreateInstance('#order-details-modal').show()
        // }

        const putId = (el, id) => {
            el.dataset.orderId = id
        }
    </script>
@endpush
