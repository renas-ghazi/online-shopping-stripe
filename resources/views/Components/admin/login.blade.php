<div>
    <center>
        <div class="container w-50 card shadow p-3 m-2">
            @if (session()->has('error'))
            <div class="alert alert-danger text-center ">
                {{ session('error') }}
            </div>
            @endif
            @if ( $errors->any() )
            @foreach ($errors -> all() as $error)
            <div class="alert alert-danger text-center">
                {{ $error }}
            </div>
            @endforeach
            @endif
            <div class="mb-3">
                <input type="email" class="form-control" wire:model.defer='email' placeholder="Email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" wire:model.defer='password' placeholder="Password">
              </div>
              <button wire:click.prevent='login' type="submit" class="btn btn-primary">Login</button>
         </div>
    </center>
</div>
