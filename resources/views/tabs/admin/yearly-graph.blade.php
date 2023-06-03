<div class="shadow" style="position: relative; height:250px; width:auto">
    {{-- {{ $monthlySales }} --}}
    <canvas class="w-full rounded-md bg-white" id="yearlyChart"></canvas>
</div>

<script>
    const ctxYearly = document.getElementById("yearlyChart");
    const allMonths = () => {
        const months = [];
        for (let i = 0; i < 12; i++) {
            const date = new Date(2000, i, 1);
            const monthName = date.toLocaleString("default", { month: "long" });
            months.push(monthName);
        }
        return months;
    };

    new Chart(ctxYearly, {
        type: "line",
        data: {
            labels: allMonths(),
            datasets: [
                {
                    label: "Annual Income",
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
                    grid:{
                        display: false,
                    },
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