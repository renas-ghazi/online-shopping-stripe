<div>
    @livewire('users.navbar')
    <div class="container">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#InvoiceID</th>
                    <th>#OrderID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getInvoices as $order)
                <tr>

                    <td>{{ $order->invoice_id }}</td>
                    <td>{{ $order->order_id }}</td>
                    <td>
                        <a href="{{ route('invoice' , $order->order_id) }}" class="btn btn-success">
                            Show Invoice
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
