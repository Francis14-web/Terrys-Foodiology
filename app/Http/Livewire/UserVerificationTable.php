<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserVerificationTable extends Component
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

        $query = $query->where('account_verified', 0);

        $users = $query->search([
            'firstname',
            'lastname',
        ], $this->search)
        ->orderBy('lastname')
        ->paginate(10);
        
        $userCount = User::where('account_verified', 0)->count(); // Count only the unverified users

        return view('livewire.user-verification-table', [
            'users' => $users,
            'userCount' => $userCount,
        ]);
    }
}
