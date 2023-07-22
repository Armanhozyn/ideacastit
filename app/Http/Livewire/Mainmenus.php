<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Http\Livewire\Field;
use Illuminate\Http\Request;

class Mainmenus extends Component
{
    public $mainmenus, $name, $route,  $mainmenu_id;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        $this->mainmenus = DB::table('main_menus')->get();
        return view('livewire.backend.mainmenus');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    private function resetInputFields(){
        $this->name = '';
        $this->route = '';
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store()
    {
        $validatedDate = $this->validate([
                'name' => 'required',
            ],
            [
                'name.required' => 'name field is required',
            ]
        );

        foreach ($this->name as $key => $value) {
            DB::table('main_menus')->insert([
                'name' => $this->name[$key],
                'route' => $this->route[$key]
            ]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Main Menu Has Been Created Successfully.');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $mainmenu = DB::table('main_menus')->where('id',$id)->first();
        $this->mainmenu_id = $id;
        $this->name = $mainmenu->name;
        $this->route = $mainmenu->route;
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
        ]);
        DB::table('main_menus')->where('id',$this->mainmenu_id)->update([
            'name' => $this->name,
            'route' => $this->route
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Main Menu Updated Successfully.');
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        DB::table('main_menus')->where('id',$id)->delete();
        session()->flash('message', 'Main Menu Deleted Successfully.');
    }
}
