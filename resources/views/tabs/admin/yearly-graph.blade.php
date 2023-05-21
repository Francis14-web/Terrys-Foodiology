<div style="position: relative; height:250px; width:auto">
    {{-- {{ $monthlySales }} --}}
    <canvas class="bg-white rounded-md" id="yearlyChart"></canvas>
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