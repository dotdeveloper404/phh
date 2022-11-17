{{-- @dd($active_orders, $past_orders) --}}
@extends('app')

@section('title', 'My Orders')

@section('content')
    <section class="breadcrum-header">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1>My Orders</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="my-orders my-5 py-5">
        <div class="container">
            <div>
                <h1>Active orders</h1>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order code</th>
                            <th>Items</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($active_orders as $o)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $o->code }}</td>
                                <td>{{ count($o->items) }}</td>
                                <td>{{ ucfirst($o->status) }}</td>
                                <td>{{ $o->total }}</td>
                                <td><button class="btn btn-primary" onclick="loadDetails({{ $o->items }})">Details</button></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No Active orders</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-5">
                <h1>Past orders</h1>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order code</th>
                            <th>Items</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($past_orders as $o)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $o->code }}</td>
                                <td>{{ count($o->items) }}</td>
                                <td>{{ ucfirst($o->status) }}</td>
                                <td>{{ $o->total }}</td>
                                <td><button class="btn btn-primary" onclick="loadDetails({{ $o->items }})">Details</button></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No Active orders</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Order details modal -->
    <div class="modal fade" id="order-details-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Order Details</h4>
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
            let html = ''
            data.forEach((val, i) => {
                html += `
                        <tr class="align-middle">
                            <td>${++i}</td>
                            <td>
                                <img src="/uploads/${val.deal.image}" alt="Product Image" class="img-fluid" style="height: 50px; width: 50px;">
                            </td>
                            <td>${val.deal.name}</td>
                            <td>${val.deal.price}</td>
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