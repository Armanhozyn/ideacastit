<form>
    <div class="row mb-5">
        <div class="col-md-5">
            <div class="form-group">
                <select class="form-control" wire:model="submenu_id">
                    <option selected>choose main menu</option>
                    @foreach ($submenus as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
                @error('submenu_id')
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
            <button wire:click.prevent="store()" class="btn btn-success">Save</button>
        </div>
    </div>
</form>
