<?php

namespace App\Http\Livewire;

use App\Models\OrderGroup;
use Carbon\Carbon;
use Livewire\Component;

class Statistics extends Component
{
    public $statistics;
    public $sales_today;
    public $current_month;
    public $monthly_order;
    public $month;
    public $year;

    public function mount(){
        $this->sales_today = $this->statistics['total_today_sales'];
        $this->current_month = $this->month = Carbon::now()->month;
        $this->monthly_order = $this->updateMonthlyOrders();

    }
    
    protected $listeners = [
        'renderMonth' => 'renderStatistics',
    ];

    public function updateMonthlyOrders()
    {
        return OrderGroup::where('status', 'Success')
            ->whereMonth('created_at', $this->month)
            ->count();
    }


    public function renderStatistics($data){
        $this->month = $data['month'];
        $this->year = $data['year'];
        $this->monthly_order = $this->updateMonthlyOrders();
        $this->statistics = OrderGroup::statistics($this->year, $this->month);
    }

    public function render()
    {
        return view('livewire.statistics');
    }
}
