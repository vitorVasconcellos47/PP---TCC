
var ctx = document.getElementById('myChart').getContext('2d');
var myChart2 = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Vandalismo', 'Furto', 'Evento climático', 'Acidente rodoviário', 'Falta de infraestrutura', 'Queda de energia', 'Outros'],
        datasets: [{
            label: 'Causas',
            data: [12, 19, 3, 5, 2, 3, 4],
            backgroundColor: [
                '#8b19ee',
                '#9932F5',
                '#600da8',
                '#684983',
                '#bc88e9',
                '#583577',
                '#985dcc'
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
                '#9932F5'
            ],
            borderColor: [
                '#9932F5'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
            responsive: true,
    }
});