const ctx = document.getElementById("myChart");
const allMonths = () => {
    const months = [];
    for (let i = 0; i < 12; i++) {
        const date = new Date(2000, i, 1);
        const monthName = date.toLocaleString("default", { month: "long" });
        months.push(monthName);
    }
    return months;
};

new Chart(ctx, {
    type: "line",
    data: {
        labels: allMonths(),
        datasets: [
            {
                label: "Monthly Income",
                data: [12, 19, 13, 52, 22, 33, 28, 36, 50, 47, 73, 10],
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
