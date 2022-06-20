
var ctx = document.getElementById('myChart').getContext('2d');
var myChart2 = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Vandalismo', 'Furto', 'Evento climático', 'Acidente rodoviário', 'Falta de infraestrutura', 'Queda de energia', 'Outros'],
        datasets: [{
            label: 'Motivos',
            data: [12, 19, 3, 5, 2, 3, 4],
            backgroundColor: [
                '#476FF4',
                '#F4A2BE',
                '#25D85C',
                '#E83C6D',
                '#9932F5',
                '#F29247',
                '#8DC1E4',
                '#8DC1E4'
            ],
            borderColor: [
                '#222455'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
            responsive: true,
    }
});

var myChart = new Chart(myChart2, {
    type: 'bar',
    data: {
        labels: ['Cinco Conjuntos', 'Heimtal', 'Conjunto Vivi Xavier', 'Conjunto Parigot de Souza', 'Aquilles Sthengel', 'Catuaí', 'Jardim Primavera', 'Alto da Boa Vista', 'Ouro Verde', 'Jardim Vista Bela'],
        datasets: [{
            label: 'Zona Norte',
            data: [12, 19, 3, 5, 2, 3, 5, 7, 9, 2],
            backgroundColor: [
                '#E83C6D'
            ],
            borderColor: [
                '#222455'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
            responsive: true,
    }
});