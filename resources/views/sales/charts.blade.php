<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
const months = ['Ene','Feb','Mar','Abr','Jun','Jul','Ago','Sep','Oct'];

/*Chart Ventas Globales año*/

new Chart("globalSalesYear", {
type: "line",
data: {
labels: months,
datasets: [{
label: 'Ventas por mes',
data: [2,5,8,10,8,11,20,18,21],
borderColor: "#6CB4EE",
fill: true,
backgroundColor: '#6CB4EE',
}]
},
options: {
legend: {display: true}
}
});

/*Chart Ventas por semana*/

var weeks = [1, 2, 3, 4, 5]
var totalSales = [4, 8, 1]
var barColors = ["#6CB4EE", "#6CB4EE", "#6CB4EE", "#6CB4EE", "#6CB4EE"]
new Chart("totalVentasMes",{
    type: "bar",
  data: {
    labels: weeks,
    datasets: [{
      backgroundColor: barColors,
      data: totalSales
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Ventas por Semana"
    }
  }
})

/*Chart Porcentual de ventas cerradas/pendientes*/

var estados = ["Finalizado", "Pendiente", "En curso", "Retenida", "Cancelada"];
var valores = [15, 2, 3, 0, 2];
var pieColors = ["#90d67f", "#6CB4EE", "#abafb9", "#ffc107", "#fd7e14"];
new Chart(estadoGlobalOrdenes,{
    type: "doughnut",
  data: {
    labels: estados,
    datasets: [{
      backgroundColor: pieColors,
      data: valores
    }]
  },
  options: {
    title: {
      display: true,
      text: "Estado de ordenes"
    }
  }
})

</script>