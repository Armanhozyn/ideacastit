<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($updateMode)
        @include('livewire.backend.submenu.update')
    @else
        @include('livewire.backend.submenu.create')
    @endif

    <table class="table table-bordered mt-5" id="example">
        <thead>
            <tr class="text-uppercase">
                <th>No.</th>
                <th>sub menu name</th>
                <th>route name</th>
                <th>main menu name</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($submenus as $key => $value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->route }}</td>
                    <td>
                        @foreach ($mainmenus as $data)
                            @if ($value->menu_id == $data->id)
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
