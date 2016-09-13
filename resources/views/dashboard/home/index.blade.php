@extends('layouts.admin')

@section('content')
<script src="{{ asset('bower-assets/chart.js/dist/Chart.min.js') }}"></script>
<div class="container">
    <div class="text-center">
        <br><br>
        <h2>The Trends</h2>
        <br>

        <canvas id="trend" width="400" height="140"></canvas>
        <script>
        var ctx = document.getElementById("trend");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [1,2,3,4,5,6],
                datasets: [{
                    label: '# User',
                    data: [12, 19, 3, 5, 12, 3],
                    backgroundColor: "rgba(75,192,192,0.4)",
                },
                {
                    label: '# Timeline',
                    data: [1, 9, 33, 5, 2, 3],
                    backgroundColor: "rgba(75,19,12,0.4)",
                },
                {
                    label: '# Notice',
                    data: [12, 39, 3, 5, 22, 3],
                    backgroundColor: "rgba(7,192,19,0.4)",
                }],
                options: {
                    scales: {
                        xAxes: [{
                            type: 'linear',
                            position: 'bottom'
                        }]
                    }
                },
            }
        });
        </script>
    </div>
</div>
@endsection

