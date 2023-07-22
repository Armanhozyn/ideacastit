<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Routes extends Component
{
    public $submenus, $routes, $route, $submenu_id, $route_id;
    public $updateMode = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->submenus = DB::table('sub_menus')->get();
        $this->routes = DB::table('routes')->get();
        return view('livewire.backend.routes');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->route = '';
        $this->submenu_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'route' => 'required',
            'submenu_id' => 'required',
        ]);
        DB::table('routes')->insert([
            'route' => $this->route,
            'submenu_id' => $this->submenu_id,
        ]);

        session()->flash('message', 'Sub Menu Created Successfully.');

        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $routes = DB::table('routes')->where('id', $id)->first();
        $this->route_id = $id;
        $this->route = $routes->route;
        $this->submenu_id = $routes->submenu_id;
        $this->updateMode = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'route' => 'required',
            'submenu_id' => 'required',
        ]);
        DB::table('routes')->where('id',$this->route_id)->update([
            'route' => $this->route,
            'submenu_id' => $this->submenu_id,
        ]);
        $this->updateMode = false;
        session()->flash('message', 'Sub Menu Updated Successfully.');
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        DB::table('routes')->where('id', $id)->delete();
        session()->flash('message', 'Sub Menu Deleted Successfully.');
    }
}
