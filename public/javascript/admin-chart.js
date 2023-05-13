const ctx = document.getElementById("myChart");
const allMonths = () =>{

    const months = [];
    for (let i = 0; i < 12; i++) {
        const date = new Date(2000, i, 1);
        const monthName = date.toLocaleString("default", { month: "long" });
        months.push(monthName);
    }
    return months;
}

new Chart(ctx, {
    type: "line",
    data: {
        labels: allMonths(),
        datasets: [
            {
                label: "Daily Income",
                data: [12, 19, 13, 52, 22, 33, 28, 36, 50, 47, 73, 10],
                borderWidth: 1,
            },
        ],
    },
    options: {
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true,
            },
        },
        
    },
});




