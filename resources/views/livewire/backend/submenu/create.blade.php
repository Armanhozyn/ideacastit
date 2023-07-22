<form>
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="form-group">
                <select class="form-control" wire:model="menu_id">
                    <option selected>choose main menu</option>
                    @foreach ($mainmenus as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput2"wire:model="name"
                    placeholder="Enter Name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInpu3" wire:model="route"
                    placeholder="Enter route">
                @error('route')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-2 text-center">
            <button wire:click.prevent="store()" class="btn btn-success">Save</button>
        </div>
    </div>
</form>
