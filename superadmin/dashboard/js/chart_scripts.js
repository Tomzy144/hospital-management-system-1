 // Total Patients Chart (Doughnut)
const patientsCtx = document.getElementById('patientsChart').getContext('2d');
const totalPatients = [120, 80, 50, 150].reduce((acc, val) => acc + val, 0); // Summing up data

document.getElementById('total_patients').textContent = totalPatients;
var inpatients = 120;
var emergency_patients = 80;
var outpatients =50;
var walkin_patients =150;
new Chart(patientsCtx, {
  type: 'doughnut',
  data: {
    labels: ['Inpatients:'+inpatients, 'Emergency patients:'+emergency_patients, 'Outpatients:'+outpatients, 'Walkin Patients:'+walkin_patients], // Only the categories
    datasets: [{
      label: 'Total Patients',
      data: [120, 80, 50, 150],
      backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', 'green'],
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
    }
  },
  plugins: [
    {
      id: 'customText',
      beforeDraw: (chart) => {
        const { width, height } = chart;
        const ctx = chart.ctx;

        ctx.save();
        ctx.font = '16px Arial'; // Set the font style and size
        ctx.fillStyle = '#fff'; // Set the text color
        ctx.textAlign = 'center'; // Horizontally center the text
        ctx.textBaseline = 'middle'; // Vertically center the text
        ctx.restore();
      }
    }
  ]
});

// Total Staffs Chart (Bar)
const staffsCtx = document.getElementById('staffsChart').getContext('2d');

// Assigning total staff count to an element (update total staff count here)
var totalStaff = 30 + 45 + 15 + 10 + 5 + 8 + 4 + 12 + 18 + 14 + 9 + 20 + 25 + 7; // Example total staff count
document.getElementById('total_staff').textContent = totalStaff; // Make sure this element exists in your HTML

// Staff counts for each role (update if needed)
var staffData = {
  'Doctors': 30,
  'Nurses': 45,
  'Surgeons': 15,
  'Surgical Suite Manager': 10,
  'Health and Info Manager': 5,
  'Staff Manager': 8,
  'Morgue Worker': 4,
  'Emergency Worker': 12,
  'Lab Scientist': 18,
  'Radiology Scientist': 14,
  'Maternity Manager': 9,
  'Pharmacists': 20,
  'Accountants': 25,
  'Anesthesiologists': 7
};

new Chart(staffsCtx, {
  type: 'bar',
  data: {
    labels: Object.keys(staffData),  // Using keys as labels
    datasets: [{
      label: 'Staff Count',
      data: Object.values(staffData), // Using values as data
      backgroundColor: [
        '#4CAF50', '#FFC107', '#F44336', '#2196F3', '#9C27B0', '#FF5722',
        '#03A9F4', '#8BC34A', '#CDDC39', '#FF9800', '#673AB7', '#009688', 
        '#795548', '#607D8B'
      ],
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