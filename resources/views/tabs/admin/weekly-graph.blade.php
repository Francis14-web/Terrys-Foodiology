<div style="position: relative; height:250px; width:auto">
    {{-- {{ $monthlySales }} --}}
    <canvas class="bg-white rounded-md" id="weeklyChart"></canvas>
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
                    label: "Monthly Income",
                    data: {{ json_encode($data) }},
                    borderWidth: 1,
                    borderColor: 'rgb(34, 197, 94)',
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
</script>