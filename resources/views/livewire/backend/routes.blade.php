<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.backend.pageConnection.update')
    @else
        @include('livewire.backend.pageConnection.create')
    @endif

    <table class="table table-bordered mt-5" id="example">
        <thead>
            <tr class="text-uppercase">
                <th>No.</th>
                <th>route name</th>
                <th>sub menu name</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($routes as $key => $value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $value->route }}</td>
                    <td>
                        @foreach ($submenus as $data)
                            @if ($value->submenu_id == $data->id)
                                {{ $data->name }}
                            @endif
                        @endforeach

                    </td>
                    <td>
                        <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
