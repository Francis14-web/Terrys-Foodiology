<div style="position: relative; height:250px; width:auto;">
    {{-- {{ $monthlySales }} --}}
    <canvas class="w-full rounded-md bg-white" id="weeklyChart"></canvas>
</div>

<script>
    const ctxWeekly = document.getElementById("weeklyChart");
    const allDaysOfWeek = () => {
        const days = [];
        const today = new Date();
        const startOfWeek = new Date(today.getFullYear(), today.getMonth(), today.getDate() - today.getDay());
        for (let i = 0; i < 7; i++) {
            const date = new Date(startOfWeek.getFullYear(), startOfWeek.getMonth(), startOfWeek.getDate() + i);
            const dayName = date.toLocaleString("default", { weekday: "short" });
            days.push(dayName);
        }
        return days;
    };

    new Chart(ctxWeekly, {
        type: "line",
        data: {
            labels: allDaysOfWeek(),
            datasets: [
                {
                    label: "Weekly Income",
                    data: {{ json_encode($data) }},                   
                    backgroundColor: (context) =>{
                        const bgColor =  [
                        'rgba(22, 163, 74, 0.5)',
                        'rgba(74, 222, 128, 0.5)',
                        'rgba(187, 247, 208, 0.2)',
                        ];

                        if(!context.chart.chartArea){
                            return;
                        }

                        const {ctx, data, chartArea: {top, bottom}} = context.chart;
                        const gradientBG = ctx.createLinearGradient(0, top, 0, bottom);
                        gradientBG.addColorStop(0, bgColor[0])
                        gradientBG.addColorStop(0.5, bgColor[1])
                        gradientBG.addColorStop(1, bgColor[2])
                        return gradientBG;
                    },
                    borderWidth: 3,
                    borderColor: 'rgb(34, 197, 94)',                   
                    tension: 0.4,
                    fill: true,
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                x:{
                    grid: {
                        display: false,
                    }
                },
                y: {
                    grid:{
                    display: false,
                    
                },
                    beginAtZero: true,
                    
                },
            },
        },
    });
</script>