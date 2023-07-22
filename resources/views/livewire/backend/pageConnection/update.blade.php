<form>
    <input type="hidden" wire:model="route_id">
    <div class="row mb-5">
        <div class="col-md-5">
            <div class="form-group">
                <select class="form-control" wire:model="submenu_id">
                    <option selected>choose main menu</option>
                    @foreach ($submenus as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
                @error('menu_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput2"wire:model="route"
                    placeholder="Enter route">
                @error('route')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-2 text-center">
            <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
        </div>
    </div>

</form>
