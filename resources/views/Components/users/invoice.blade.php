<div>
    <style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

table {
  max-width: 960px;
  margin: 10px auto;
}

caption {
  font-size: 1.6em;
  font-weight: 400;
  padding: 10px 0;
}

thead th {
  font-weight: 400;
  background: #8a97a0;
  color: #FFF;
}

tr {
  background: #f4f7f8;
  border-bottom: 1px solid #FFF;
  margin-bottom: 5px;
}

tr:nth-child(even) {
  background: #e8eeef;
}

th, td {
  text-align: left;
  padding: 20px;
  font-weight: 300;
}

tfoot tr {
  background: none;
}

tfoot td {
  padding: 10px 2px;
  font-size: 0.8em;
  font-style: italic;
  color: #8a97a0;
}

    </style>
    @livewire('users.navbar')
    <div class="container">
        <div class="card p-4 shadow">
            <table class="">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getInv as $inv)
                    @php
                         $sum += $inv->product->price * $inv->quantity ;
                    @endphp
                    <tr>
                        <td>{{ $inv->product->name }}</td>
                        <td>{{ $inv->product->price }}</td>
                        <td>{{ $inv->quantity }}</td>
                        <td>
                            <img style="width: 100px" src="{{ asset('product/'.$inv->product->image) }}">
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
                <h3 class="text-center">Status <span class="text-success">Payed</span></h3>
                <h3 class="text-center">amount <span class="text-success">${{$sum}}</span></h3>
        </div>
    </div>
</div>

