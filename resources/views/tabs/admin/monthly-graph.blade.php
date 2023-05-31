<div style="position: relative; height:250px; width:auto">
    <canvas class="w-full rounded-md bg-white" id="monthlyChart"></canvas>
</div>

<script>
    const ctxMonthly = document.getElementById("monthlyChart");
    const allDaysOfMonth = () => {
        const days = [];
        const today = new Date();
        const year = today.getFullYear();
        const month = today.getMonth();
        const totalDays = new Date(year, month + 1, 0).getDate(); // Get the total number of days in the current month
        for (let i = 1; i <= totalDays; i++) {
            const date = new Date(year, month, i);
            const day = date.toLocaleString("default", { day: "numeric" });
            days.push(day);
        }
        return days;
    };

    new Chart(ctxMonthly, {
        type: "line",
        data: {
            labels: allDaysOfMonth(),
            datasets: [
                {
                    label: "Monthly Income",
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
