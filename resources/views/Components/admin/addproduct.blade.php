<div>
    @livewire('admin.navbar')
    <div class="container">
        <div class="card p-4 m-3 shadow">
            @if ( $errors->any() )
            @foreach ($errors -> all() as $error)
            <div class="alert alert-danger text-center">
                {{ $error }}
            </div>
            @endforeach
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('update'))
            <div class="alert alert-success">
                {{ session('update') }}
            </div>
            @endif
            @if ($imageFile)
            <img style="width: 100px" src="{{ $imageFile->temporaryUrl() }}">
             @endif
            <input wire:model.defer='name' type="text" class="form-control mt-2" placeholder="Product Name">
            <input wire:model.defer='price' type="number" class="form-control mt-2" placeholder="Price">
            <select wire:model.defer='category' class="form-select mt-2">
                <option value="" disabled >Select Category</option>
                <option value="cloothes">cloothes</option>
                <option value="perfume">perfume</option>
                <option value="electronic">electronic </option>
                <option value="makeup">makeup </option>
            </select>
            <input wire:model.defer='imageFile' type="file" class="form-control mt-2" >
            <div  wire:target='imageFile'  wire:loading.remove>

            <button wire:click.prevent='addProduct'  class="btn btn-success mt-3 w-25">
                Save
            </button>
        </div>

        </div>
    </div>
    <hr>
    <div class="container">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($allProduct as $pro)
                <tr>
                    <td>{{ $pro->name }}</td>
                    <td>{{ $pro->price }}</td>
                    <td><img style="width: 100px" src="{{ asset('product/'.$pro->image) }}" alt=""></td>
                    <td>
                        <a href="{{ route('admin.editproduct' , $pro->id) }}" class="btn btn-primary btn-sm">edit</a>
                        <button wire:click.prevent='delete({{ $pro->id }})' class="btn btn-danger btn-sm">delete</button>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
