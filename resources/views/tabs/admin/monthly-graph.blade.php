<div style="position: relative; height:250px; width:auto">
    <canvas class="bg-white rounded-md" id="monthlyChart"></canvas>
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
