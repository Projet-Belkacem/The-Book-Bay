@extends('BackOffice._layout_backOffice')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3>
                    Totale des ventes par mois
                </h3>
            </div>
            <div class="card-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const labels = [
      'Janvier',
      'Février',
      'Mars',
      'Avril',
      'Maî',
      'Juin',
      'Juillet',
      'Août',
      'Septembre',
      'Octobre',
      'Novembre',
      'Décembre'
    ];
  
    const data = {
      labels: labels,
      datasets: [{
        label: 'Ensemble des ventes',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45, 0, 10, 5, 2, 20, 30, 45],
      }]
    };
  
    const config = {
      type: 'line',
      data: data,
      options: {}
    };

    const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

</script>
@endsection