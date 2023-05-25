<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $search = "";

    public function statusChange($id)
    {
        $user = User::find($id);
        $user->is_restricted = !$user->is_restricted;
        $user->save();
        $this->emit('refreshUserTable');
    } 

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = User::query();
        $users = $query->search([
            'firstname',
            'lastname',
        ], $this->search)
        ->orderBy('lastname')
        ->paginate(10);
        
        $userCount = User::count();

        return view('livewire.user-table', [
            'users' => $users,
            'userCount' => $userCount,
        ]);
    }
}
