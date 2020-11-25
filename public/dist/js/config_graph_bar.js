/* 
 *Configurações para apresentar o grafico de barras de comida desperdiçada.
 */



function gerar_grafico_barra_vertical(idElemento, labels, data, label) {
    var ctx = document.getElementById(idElemento);
    let barra = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                    label: label,
                    data: data,
                    lineTension: 0,
                    backgroundColor: "purple",
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
                        label += " ";
                        label += tooltipItem.yLabel.toLocaleString("pt-BR", {style: "currency", currency: "BRL"});
                        return label;
                    }
                }
            }
        }
    });

    return barra;
}


function gerar_grafico_barra_horizontal_porcentagem(idElemento, labels, data, label) {
    var ctx = document.getElementById(idElemento);
    var barra = new Chart(ctx, {
        tooltipTemplate: '<%= value + "%" %>',
        type: 'horizontalBar',
        responsive: true,
        data: {
            labels: labels,
            datasets: [{
                    label: label,
                    data: data,
                    lineTension: 0,
                    backgroundColor: "#dd4477",
                    strokeColor: "rgba(220,220,220,1)",
                    borderColor: 'white',
                    borderWidth: 2,
                    pointBackgroundColor: '#09801B'
                }]
        },
        options: {
            scales: {
                xAxes: [{
                        ticks: {
                            callback: function (value) {
                                return value + "%";
                            },
                            beginAtZero: true,
                        },

                    }],

            },
            legend: {
                display: false,
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        return "Porcentagem desperdiçada " + ': ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + '%';
                    }
                }

            }

        }
    });
    return barra;
}


function gerar_grafico_linha(idElemento, labels, data, label) {
    var ctx = document.getElementById(idElemento);
    var linha = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                    label: label,
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
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        return "Desperdício alimentar " + ': ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + ' kg';
                    }
                }

            }
        }
    });
    return linha;
}

function gerar_grafico_barra_horizontal_refeicao(idElemento, labels, data, label) {
    var ctx = document.getElementById(idElemento);
    var barra = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                    label: label,
                    data: data,
                    lineTension: 0,
                    backgroundColor: ["rgba(40,149,3,0.92)", "#964811"],
                    strokeColor: "rgba(220,220,220,1)",
                    borderColor: 'white',
                    borderWidth: 2,
                    pointBackgroundColor: '#09801B'
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        }
                    }]
            },
            legend: {
                display: false,
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        return "Desperdicio por refeição" + ': ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + ' kg';
                    }
                }

            }
        }
    });
    return barra;
}

function gerar_grafico_barra_horizontal_pessoas(idElemento, labels, data, label) {
    var ctx = document.getElementById(idElemento);
    var barra = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: labels,
            datasets: [{
                    label: label,
                    data: data,
                    lineTension: 0,
                    backgroundColor: "#FB9302",
                    strokeColor: "rgba(220,220,220,1)",
                    borderColor: 'white',
                    borderWidth: 2,
                    pointBackgroundColor: '#09801B'
                }]
        },
        options: {
            scales: {
                xAxes: [{
                        ticks: {
                            beginAtZero: true,

                        }
                    }]
            },
            legend: {
                display: false,
            },
        }
    });
    return barra;
}



