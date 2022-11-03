<div class="table-responsive" {{ $attributes }}>
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
            {{-- @foreach ($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <div style="height: 50px; width: 50px;">
                            <img src="{{ asset($item->image) }}" alt="Product Image" class="img-fluid">
                        </div>
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->subtotal }}</td>
                </tr>
            @endforeach --}}

            {{-- @if (count($orders))
            @else
                <tr>
                    <td colspan="6" class="text-center">
                        <b>
                            No orders placed
                        </b>
                    </td>
                </tr>
            @endif --}}
        </tbody>
    </table>
</div>
