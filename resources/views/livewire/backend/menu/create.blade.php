<form>
    <div class=" add-input my-3">
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
            <div class="col-md-2 my-3 text-center">
                <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
    </div>
</form>
