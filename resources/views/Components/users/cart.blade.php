<div>
   <button class="btn btn-dark m-1" data-bs-toggle="modal" data-bs-target="#cart">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </svg>
    {{ count($counterOrder) }}
   </button>




<div  wire:ignore.self class="modal fade" id="cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if (count($getOrder) > 0)

        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>product</th>
                    <th>image</th>
                    <th colspan="3">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getOrder as $order)
                @php
                    $sum += $order->product->price * $order->quantity ;
                @endphp
                <tr>
                    <td>{{ $order->product->name}}</td>
                    <td>
                        <img style="width: 50px" src="{{ asset('product/'.$order->product->image) }}" alt="">
                    </td>
                    <td colspan="3">
                        <div class="row">
                            <div class="col-sm-2">
                                <button
                                wire:click.prevent='addFromCart({{ $order->id }})'
                                class="btn btn-success btn-sm">
                                    +
                                </button>
                            </div>
                        <div class="col-sm-3">
                        <input type="number" class="form-control" value="{{ $order->quantity }}">
                        </div>
                        <div class="col-sm-2">
                            <button
                            wire:click.prevent='deLromCart({{ $order->id }})'

                            class="btn btn-danger btn-sm">
                                -
                            </button>
                      </div>
                    </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h3>
            Cart Is Empty
        </h3>
        @endif
            @if ( Auth::check() )
            @if ( count($getOrder) > 0 )

            <h3>
                Total Price ${{ $sum }}
            </h3>
            <a class="btn btn-primary" href="{{ route('payment') }}">
                Checkout
            </a>
            @endif
            @endif
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</div>
