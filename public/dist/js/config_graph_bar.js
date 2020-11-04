/* 
 *Configurações para apresentar o grafico de barras de comida desperdiçada.
 */



function gerar_grafico_barra(idElemento, labels, data, label) {
    var ctx = document.getElementById(idElemento);
    var barra = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                    label: label,
                    data: data,
                    lineTension: 0,
                    backgroundColor: ["purple", "purple", "purple", "purple", "purple", "purple", "purple"],
                    strokeColor: "rgba(220,220,220,1)",
                    borderColor: 'transparent',
                    borderWidth: 4,
                    pointBackgroundColor: '#09801B'
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            callback: function (value, index, values) {
                                return value.toLocaleString("pt-BR", {style: "currency", currency: "BRL"});
                            }
                        }
                    }]
            },
            legend: {
                display: false,
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        var label = data.datasets[tooltipItem.datasetIndex].label || '';
                        label += " " ;
                        label += tooltipItem.yLabel.toLocaleString("pt-BR", {style: "currency", currency: "BRL"});
                        return label;
                    }
                }
            }
        }
    });
    return barra;
}

function gerar_grafico_pizza(idElemento, labels, data) {
    var ctx = document.getElementById(idElemento);
    var barra = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                    label: "Quantidade de comida desperdiçada",
                    data: data,
                    lineTension: 0,
                    backgroundColor: ["#3366cc", "#dc3912", "#ff9900", "#109618", "#990099", "#0099c6", "#dd4477"],
                    strokeColor: "rgba(220,220,220,1)",
                    borderColor: 'white',
                    borderWidth: 2,
                    pointBackgroundColor: '#09801B'
                }]
        }
    });
    return barra;
}


function gerar_grafico_linha(idElemento, labels, data) {
    var ctx = document.getElementById(idElemento);
    var linha = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                    label: "Desperdício alimentar",
                    data: data,
                    lineTension: 0.3,
                    backgroundColor: 'rgba(0,153,198,0.31)',
                    strokeColor: "rgba(0,153,198,0.31)",
                    borderColor: '#3366cc',
                    borderWidth: 4,
                    pointBackgroundColor: '#3366cc'
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            },
            legend: {
                display: false,
            }
        }
    });
    return linha;
}


