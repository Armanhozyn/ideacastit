<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if ($updateMode)
        @include('livewire.backend.menu.update')
    @else
        @include('livewire.backend.menu.create')
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>route name</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($mainmenus as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->route }}</td>
                <td>
                    <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
