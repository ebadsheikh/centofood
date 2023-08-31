<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleList extends Component
{
    /**
     * Declare a public property $searchName
     * @var string
     */
    public string $searchName;

    /**
     * Lifecycle method that is called when the component is initialized
     * @return void
     */
    public function mount(): void
    {
        $this->searchName = '';
    }

    public function render()
    {
        $roles = Role::when($this->searchName != '', function ($query) {
            $query->where('name', 'like', '%' . $this->searchName . '%');
        })
            ->paginate(10);
        return view('livewire.role-list')->with('roles', $roles);
    }
}
