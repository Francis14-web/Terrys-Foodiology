<?php

namespace App\View\Components\canteen;
use App\Tabs\User\OrderPageTab;
use Illuminate\View\Component;

class CanteenSidebar extends Component
{
    public array $tabs = [
        OrderPageTab::class,
        // Other tabs...
    ];
}
