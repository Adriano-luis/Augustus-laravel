$(document).ready(function(){
        
    var Administrativo = parseInt($('#adminGrafico').val());
    var Judicial = parseInt($('#judGrafico').val());
    var AdminJud = parseInt($('#adminJudGrafico').val());
    var Federal = parseInt($('#fedGrafico').val());
    var Municipal = parseInt($('#munGrafico').val());
    var Estadual = parseInt($('#estGrafico').val());
    var Remota = parseInt($('#rembGrafico').val());
    var Possivel = parseInt($('#posGrafico').val());
    var Provavel = parseInt($('#proGrafico').val());
    var Descartada = parseInt($('#desGrafico').val());
    var Enviada = parseInt($('#envGrafico').val());
    var Espera = parseInt($('#espGrafico').val());
    var Analise = parseInt($('#anaGrafico').val());
    var Implementar = parseInt($('#imGrafico').val());
    var Implementada = parseInt($('#impleGrafico').val());
    var Sem = parseInt($('#sembGrafico').val());


    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Sem classificação', 'Descartada', 'Enviada', 'Em espera', 'Em análise', 'Implementar','Implementada'],
            datasets: [{
                data: [Sem, Descartada, Enviada, Espera, Analise, Implementar,Implementada],
                backgroundColor: [
                    '#D0D0D0',
                    '#EE7D7D',
                    '#6694FB',
                    '#F5EE2F',
                    '#5FC6E6',
                    '#AD9303',
                    '#2DD28D'
                ],
                borderColor: [
                    '#D0D0D0',
                    '#EE7D7D',
                    '#6694FB',
                    '#F5EE2F',
                    '#5FC6E6',
                    '#AD9303',
                    '#2DD28D'
                ],
                borderWidth: 1
            }]
        },
        options: {
            cutout: 20,
            animation:{
                animateScale: false
            },
            plugins:{
                legend:{
                    position:'bottom',
                    labels:{
                        usePointStyle:true,
                        pointStyle:'circle',
                    },
                    
                }
            },
        }
    });

    var ctx = document.getElementById('myChart2');
    var myChart2 = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Judicial', 'Administrativo', 'Administrativo / Judicial'],
            datasets: [{
                data: [Judicial, Administrativo, AdminJud],
                backgroundColor: [
                    '#04E9F8',
                    '#28D0DB',
                    '#557ACE'

                ],
                borderColor: [
                    '#04E9F8',
                    '#28D0DB',
                    '#557ACE'
                ],
                borderWidth: 1
            }]
        },
        options: {
            cutout: 20,
            layout:{
                padding:8
            },
            animation:{
                animateScale: false
            },
            plugins:{
                legend:{
                    position:'bottom',
                    labels:{
                        usePointStyle:true,
                        pointStyle:'circle'
                    },
                    textDirection:'column'
                }
            },
        }
    });

    var ctx = document.getElementById('myChart3');
    var myChart3 = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Federal', 'Estadual', 'Municipal'],
            datasets: [{
                data: [Federal, Estadual, Municipal],
                backgroundColor: [
                    '#D96635',
                    '#9C5757',
                    '#FB9366'
                ],
                borderColor: [
                    '#D96635',
                    '#9C5757',
                    '#FB9366'
                ],
                borderWidth: 1
            }]
        },
        options: {
            cutout: 20,
            layout:{
                padding:18
            },
            animation:{
                animateScale: false
            },
            plugins:{
                legend:{
                    position:'bottom',
                    labels:{
                        usePointStyle:true,
                        pointStyle:'circle'
                    },
                    textDirection:'column'
                }
            },
        }
    });

    var ctx = document.getElementById('myChart4');
    var myChart4 = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Provável', 'Possível', 'Remota'],
            datasets: [{
                data: [Provavel, Possivel, Remota],
                backgroundColor: [
                    '#34E5A5',
                    '#00B976',
                    '#339873'
                ],
                borderColor: [
                    '#34E5A5',
                    '#00B976',
                    '#339873'
                ],
                borderWidth: 1
            }]
        },
        options: {
            cutout: 20,
            layout:{
                padding:18
            },
            animation:{
                animateScale: false
            },
            plugins:{
                legend:{
                    position:'bottom',
                    labels:{
                        usePointStyle:true,
                        pointStyle:'circle'
                    },
                    textDirection:'column'
                }
            },
        }
    });



});

