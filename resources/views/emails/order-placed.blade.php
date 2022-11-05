<div>
    <h1>An order has been placed</h1>

    <h3>Details</h3>
    <p><b>User name:</b> {{ $order->user->name }}</p>
    <p><b>Order code:</b> {{ $order->code }}</p>
    <p><b>Order total:</b> {{ $order->total }}</p>
    <h3><b>Order items:</b></h3>
    <table>
        <thead>
            <tr>
                <th>Deal name</th>
                <th></th>
                <th>Price</th>
                <th></th>
                <th>Quantity</th>
                <th></th>
                <th>Sub total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $i)
                <tr>
                    <td>{{ $i->name }}</td>
                    <td></td>
                    <td>{{ $i->price }}</td>
                    <td></td>
                    <td>{{ $i->quantity }}</td>
                    <td></td>
                    <td>{{ $i->subtotal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>