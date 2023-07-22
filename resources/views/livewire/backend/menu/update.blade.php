<form>
    <input type="hidden" wire:model="mainmenu_id">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInpu2" wire:model="name"
                    placeholder="Enter Name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInpu3" wire:model="route"
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
