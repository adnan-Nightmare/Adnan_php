const ctx = document.getElementById('nilaiChart').getContext('2d');

    const nilaiChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['PPKN', 'Bindo', 'Bing', 'MTK', 'IPAS', 'PJOK'],
        datasets: [{
          label: 'Rata-rata Nilai',
          data: [78, 82, 85, 80, 87, 90],
          borderColor: 'rgb(59, 130, 246)',
          backgroundColor: 'rgba(59, 130, 246, 0.2)',
          fill: true,
          tension: 0.4,
          pointBackgroundColor: 'rgb(59, 130, 246)',
          pointRadius: 5,

        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            suggestedMax: 100
          }
        },
        plugins: {
          legend: {
            display: false,
            labels: {
              color: '#4B5563'
            }
          }
        }
      }
    });