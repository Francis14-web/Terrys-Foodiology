<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ExtendAccess extends Component
{
    public $extend_days = '1 day';

    public function update()
    {
        $extendDays = $this->extend_days; // Assuming `$this->extend_days` contains the selected option from the dropdown
        
        $user = User::where('id', auth()->guard('user')->user()->id)->first();

        switch ($extendDays) {
            case '1 day':
                $user->until_when = now()->addDay();
                break;
            case '2 days':
                $user->until_when = now()->addDays(2);
                break;
            case '3 days':
                $user->until_when = now()->addDays(3);
                break;
            case '4 days':
                $user->until_when = now()->addDays(4);
                break;
            case '5 days':
                $user->until_when = now()->addDays(5);
                break;
            case '6 days':
                $user->until_when = now()->addDays(6);
                break;
            case '1 week':
                $user->until_when = now()->addWeek();
                break;
            case '10 days':
                $user->until_when = now()->addDays(10);
                break;
            case '2 weeks':
                $user->until_when = now()->addWeeks(2);
                break;
            default:
                // Handle invalid option or default behavior
                notyf()
                    ->position('x', 'right')->position('y', 'top')
                    ->dismissible(true)
                    ->ripple(true)
                    ->addWarning('Failed to extend user access.');
                break;
        }
    
        $user->save();
    
        notyf()
            ->position('x', 'right')->position('y', 'top')
            ->dismissible(true)
            ->ripple(true)
            ->success('Access extended successfully.');
    
        return redirect()->route('user.dashboard');
    }


    public function render()
    {
        return view('livewire.extend-access');
    }
}
