let width, height, gradient;

function getGradient(ctx, chartArea) {
    const chartWidth = chartArea.right - chartArea.left;
    const chartHeight = chartArea.bottom - chartArea.top;
    if (!gradient || width !== chartWidth || height !== chartHeight) {
        // Create the gradient because this is either the first render
        // or the size of the chart has changed
        width = chartWidth;
        height = chartHeight;
        gradient = ctx.createLinearGradient(0, chartArea.bottom, 0, chartArea.top);
        gradient.addColorStop(0, "#C70000");
        // gradient.addColorStop(0.5, "#ff7a2f");
        gradient.addColorStop(1, "#FCD535");
    }

    return gradient;
}

function bggradient(ctx, chartArea) {
    const chartWidth = chartArea.right - chartArea.left;
    const chartHeight = chartArea.bottom - chartArea.top;
    if (!gradient || width !== chartWidth || height !== chartHeight) {
        // Create the gradient because this is either the first render
        // or the size of the chart has changed
        // width = chartWidth;
        // height = chartHeight;
        gradient = ctx.createLinearGradient(30, chartArea.bottom, 0, chartArea.top);
        gradient.addColorStop(1, "#FDDE5D");
        // gradient.addColorStop(0.5, "#ff7a2f");
        gradient.addColorStop(0.5, "#ffffff");
    }

    return gradient;
}

// Получаем контекст canvas
var context = document.getElementById('Chart').getContext('2d');

// Определяем данные для графика
var data = {
    labels: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн'],
    datasets: [{
        label: 'Баланс',
        data: [1000, 1200, 1100, 1500, 2000, 1300],
        borderColor: function (context) {
            const chart = context.chart;
            const {ctx, chartArea} = chart;

            if (!chartArea) {
                // This case happens on initial chart load
                return;
            }
            return getGradient(ctx, chartArea);
        },
        borderWidth: 10,
        // fill: true,
        // backgroundColor: function (context) {
        //     const chart = context.chart;
        //     const {ctx, chartArea} = chart;
        //
        //     if (!chartArea) {
        //         // This case happens on initial chart load
        //         return;
        //     }
        //     return bggradient(ctx, chartArea);
        // }
        pointStyle: 'circle',
        pointRadius: 0,
        pointHoverRadius: 15
    }]
};

// Определяем опции для графика
var options = {
    responsive: true,
    interaction: {
        intersect: false, // автоматическое наведение к ближайшему елементу
    },
    scales: {
        x: {
            display: false // Отключаем отображение оси x
        },
        y: {
            display: false, // Отключаем отображение оси y
            max: Math.max.apply(Math, data.datasets[0].data) + (Math.max.apply(Math, data.datasets[0].data) / 100 * 5),
            min: Math.min.apply(Math, data.datasets[0].data) - (Math.min.apply(Math, data.datasets[0].data) / 100 * 5),

        },

    },
    elements: {
        line: {
            tension: 0.4, // Задаем коэффициент сглаживания линии
            borderWidth: 2, // Задаем толщину линии
            borderRadius: 15, // Задаем радиус скругления углов линии
            // clip: {left: 500, top: false, right: -200, bottom: 0}
        }

    },
    plugins: {
        legend: {
            display: false // Отключаем отображение легенды
        }
    },
    maintainAspectRatio: false
};

// Создаем экземпляр графика
var myChart = new Chart(context, {
    type: 'line',
    data: data,
    options: options
})
