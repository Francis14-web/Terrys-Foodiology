<div class="bg-white max-w-xs w-full border-l relative">
    <div class=" p-5">
        <h1 class="text-lg text-black/50 font-semibold">Statistic for {{\Carbon\Carbon::createFromDate($year, $month, 1)->format('F')}}</h1>
        <div class="mt-5 flex flex-col gap-y-4">
            @if($current_month == $month)
                <x-statistics-card title="Total sales today" :value="'₱'.$sales_today" />
            @endif
            <x-statistics-card title="Total orders this month" :value="$monthly_order" />
            <x-statistics-card title="Total sales this month" :value="'₱'.$statistics['total_month_sales']" />
            <x-statistics-card title="Total sales this year" :value="'₱'.$statistics['total_year_sales']" />
        </div>
    </div>
    <div wire:loading class="absolute max-h-screen top-0 left-0 bg-white/5 backdrop-blur-sm bottom-0 right-0 flex items-center justify-center h-full">
        <div class="flex items-center justify-center space-x-2 h-full">
            <div class="w-4 h-4 rounded-full animate-pulse bg-green-400"></div>
            <div class="w-4 h-4 rounded-full animate-pulse bg-green-400"></div>
            <div class="w-4 h-4 rounded-full animate-pulse bg-green-400"></div>
        </div>
    </div>
</div>