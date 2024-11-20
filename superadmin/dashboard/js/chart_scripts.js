 // Total Patients Chart (Doughnut)
 const patientsCtx = document.getElementById('patientsChart').getContext('2d');
 new Chart(patientsCtx, {
   type: 'doughnut', 
   data: {
     labels: ['Admitted', 'Discharged', 'Outpatients','Walkin Patients'],
     datasets: [{
       label: 'Total Patients',
       data: [120, 80, 50,10],
       backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56','green'],
     }]
   },
   options: {
     responsive: true,
     plugins: {
       legend: {
         labels: {
           color: '#fff' // Legend text color to white
         }
       },
       tooltip: {
         bodyColor: '#fff', // Tooltip text color to white
         titleColor: '#fff' // Tooltip title color to white
       }
     },
     scales: {
       x: {
         ticks: {
           color: '#fff' // x-axis ticks color to white
         },
         grid: {
           color: '#fff' // x-axis grid lines color to white
         }
       },
       y: {
         ticks: {
           color: '#fff' // y-axis ticks color to white
         },
         grid: {
           color: '#fff' // y-axis grid lines color to white
         }
       }
     }
   }
 });

 // Total Staffs Chart (Bar)
 const staffsCtx = document.getElementById('staffsChart').getContext('2d');
 new Chart(staffsCtx, {
   type: 'bar',
   data: {
     labels: ['Doctors', 'Nurses', 'Admin'],
     datasets: [{
       label: 'Staff Count',
       data: [30, 45, 15],
       backgroundColor: ['#4CAF50', '#FFC107', '#F44336'],
     }]
   },
   options: {
     responsive: true,
     maintainAspectRatio: false,
     plugins: {
       legend: {
         labels: {
           color: '#fff' // Legend text color to white
         }
       },
       tooltip: {
         bodyColor: '#fff', // Tooltip body text color to white
         titleColor: '#fff' // Tooltip title color to white
       }
     },
     scales: {
       x: {
         ticks: {
           color: '#fff' // x-axis ticks color to white
         },
         grid: {
           color: '#fff' // x-axis grid lines color to white
         }
       },
       y: {
         ticks: {
           color: '#fff' // y-axis ticks color to white
         },
         grid: {
           color: '#fff' // y-axis grid lines color to white
         }
       }
     }
   }
 });

 // Total Appointments Chart (Line)
 const appointmentsCtx = document.getElementById('appointmentsChart').getContext('2d');
 new Chart(appointmentsCtx, {
   type: 'line',
   data: {
     labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
     datasets: [{
       label: 'Appointments',
       data: [10, 20, 30, 40, 50],
       borderColor: '#3e95cd',
       fill: false
     }]
   },
   options: {
     responsive: true,
     maintainAspectRatio: false,
     plugins: {
       legend: {
         labels: {
           color: '#fff' // Legend text color to white
         }
       },
       tooltip: {
         bodyColor: '#fff', // Tooltip body text color to white
         titleColor: '#fff' // Tooltip title color to white
       }
     },
     scales: {
       x: {
         ticks: {
           color: '#fff' // x-axis ticks color to white
         },
         grid: {
           color: '#fff' // x-axis grid lines color to white
         }
       },
       y: {
         ticks: {
           color: '#fff' // y-axis ticks color to white
         },
         grid: {
           color: '#fff' // y-axis grid lines color to white
         }
       }
     }
   }
 });

 // Pharmacy Sales Chart (Pie)
 const pharmacyCtx = document.getElementById('pharmacyChart').getContext('2d');
 new Chart(pharmacyCtx, {
   type: 'pie',
   data: {
     labels: ['Medicine', 'Supplies', 'Equipment'],
     datasets: [{
       label: 'Sales',
       data: [200, 150, 50],
       backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
     }]
   },
   options: {
     responsive: true,
     maintainAspectRatio: false,
     plugins: {
       legend: {
         labels: {
           color: '#fff' // Legend text color to white
         }
       },
       tooltip: {
         bodyColor: '#fff', // Tooltip body text color to white
         titleColor: '#fff' // Tooltip title color to white
       }
     }
   }
 });