var ctx = document.getElementById("pieChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
labels: ["CTXH", "DS", "Other"],
datasets: [{
label: '# of Votes',
data: [60, 30, 10],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
],
borderWidth: 1
}]
},
// options: {
// scales: {
// yAxes: [{
// ticks: {
// beginAtZero: true
// }
// }]
// }
// }
});