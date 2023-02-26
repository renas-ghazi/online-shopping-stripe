<div>
    @livewire('admin.navbar')
    <div class="container">
        @if ( $errors->any() )
        @foreach ($errors -> all() as $error)
        <div class="alert alert-danger text-center">
            {{ $error }}
        </div>
        @endforeach
        @endif
        <input wire:model.defer='edit_name' type="text" class="form-control mt-2" >
        <input wire:model.defer='edit_price' type="number" class="form-control mt-2" >
        <select wire:model.defer='edit_category' class="form-select mt-2">
            <option value="" disabled >Select Category</option>
            <option value="cloothes">cloothes</option>
            <option value="perfume">perfume</option>
            <option value="electronic">electronic </option>
            <option value="makeup">makeup </option>
        </select>
        <input wire:model.defer='file' type="file" class="form-control mt-2" >
        <button wire:click='update' class="btn btn-success">
            Update
        </button>
    </div>
</div>
