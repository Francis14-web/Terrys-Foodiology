<?php

namespace App\View\Components;

use Closure;
use App\Models\Admin;
use App\Models\Canteen;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ChatBox extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chat-box');
    }
}
