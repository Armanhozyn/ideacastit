<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Submenus extends Component
{
    public $submenus, $mainmenus, $name, $route, $menu_id, $submenu_id;
    public $updateMode = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->mainmenus = DB::table('main_menus')->get();
        $this->submenus = DB::table('sub_menus')->get();
        return view('livewire.backend.submenus');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->route = '';
        $this->menu_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'menu_id' => 'required',
        ]);
        DB::table('sub_menus')->insert([
            'name' => $this->name,
            'route' => $this->route,
            'menu_id' => $this->menu_id,
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
        $submenu = DB::table('sub_menus')->where('id', $id)->first();
        $this->submenu_id = $id;
        $this->name = $submenu->name;
        $this->route = $submenu->route;
        $this->menu_id = $submenu->menu_id;
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
            'name' => 'required',
            'route' => 'required',
            'menu_id' => 'required',
        ]);
        DB::table('sub_menus')->where('id',$this->submenu_id)->update([
            'name' => $this->name,
            'route' => $this->route,
            'menu_id' => $this->menu_id,
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
        DB::table('sub_menus')->where('id', $id)->delete();
        session()->flash('message', 'Sub Menu Deleted Successfully.');
    }
}
