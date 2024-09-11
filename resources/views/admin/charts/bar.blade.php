<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            height: 140px;
            overflow: hidden;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .card-icon {
            font-size: 3rem;
            color: #3498db;
        }

        .card-number {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>

    <div class="container">
    <div class="row">

        @foreach ($data as $d)
        <div class="col-md-3">
            <div class="card">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="card-title">{{ $d['name'] }}</div>
                        <div class="card-number">{{ $d['count'] }}</div>
                    </div>
                    <div class="col-xs-4 text-right">
                        <div class="card-icon"><i class="fa fa-chart-bar"></i></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
