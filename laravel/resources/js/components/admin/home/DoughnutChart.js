import React from "react";
import { Chart as ChartJS, ArcElement, Tooltip, Legend } from "chart.js";
import { Doughnut } from "react-chartjs-2";
import ChartDataLabels from "chartjs-plugin-datalabels";

ChartJS.register(ArcElement, Tooltip, Legend, ChartDataLabels);

const options = {
    responsive: true,
    plugins: {
        title: {
            display: false,
        },
        legend: {
            display: true,
            position: "bottom",
        },
        datalabels: {
            color: "white",
            font: {
                size: 15,
            },
            formatter(value, ctx) {
                const data = ctx.dataset.data;
                const sum = data.reduce((sum, element) => {
                    return sum + element;
                });
                return Math.round((value / sum) * 100) + "%";
            },
        },
    },
    layout: {
        padding: {
            top: 20,
            bottom: 0,
        },
    },
};

const DoughnutChart = () => {
    const chartData = {
        labels: ["相手が来なかった", "システムエラー", "日程変更", "その他"],
        datasets: [
            {
                data: [3, 5, 6, 1],
                backgroundColor: ["#0046E7", "#0171BA", "#0ABDDD", "#B29EF0"],
                borderWidth: 0,
            },
        ],
    };

    return (
        <div className="relative w-full">
            <Doughnut data={chartData} options={options} />
        </div>
    );
};

export default DoughnutChart;
