@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Biểu đồ</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Giới tính</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="gender-chart" style="height:300px"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Khả năng lao động</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="labor-ability-chart" style="height:300px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Dạng tật</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="disability-chart" style="height:300px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Nhu cầu hỗ trợ</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="need-chart" style="height:300px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    $(function () {
        function loadGenderChart() {
            var userGender = [];
            @foreach($userGender as $count)
                userGender.push('{{ $count }}')
            @endforeach
            console.log(userGender);
            var genderChart = new Chart(document.getElementById("gender-chart"), {
                type: 'pie',
                data: {
                    labels: ['Nam', 'Nữ'],
                    datasets: [
                        {
                            label: '# Số người khuyết tật',
                            data: userGender,
                            backgroundColor: [
                                '#f16954',
                                '#39a65a',
                            ]
                        }
                    ]
                }
            });
        }

        function loadLaborAbilityChart() {
            var userLaborAbility = [];
            @foreach($userLaborAbility as $count)
                userLaborAbility.push('{{ $count }}')
            @endforeach
            var laborAbilityChart = new Chart(document.getElementById("labor-ability-chart"), {
                type: 'pie',
                data: {
                    labels: ['Còn', 'Không còn'],
                    datasets: [
                        {
                            label: '# Số người khuyết tật',
                            data: userLaborAbility,
                            backgroundColor: [
                                '#f16954',
                                '#39a65a',
                            ]
                        }
                    ]
                }
            });
        }

        function loadDisabilityChart() {
            var disabilites = [];
            var userDisability = [];
            @foreach($disabilites as $disability)
                disabilites.push('{{ $disability }}')
            @endforeach
            @foreach($userDisability as $count)
                userDisability.push('{{ $count }}')
            @endforeach
            var disabilityChart = new Chart(document.getElementById("disability-chart"), {
                type: 'bar',
                data: {
                    labels: disabilites,
                    datasets: [
                        {
                            label: '# Số người khuyết tật',
                            data: userDisability,
                            backgroundColor: [
                                '#f16954',
                                '#39a65a',
                                '#f39c14',
                                '#53c0ef',
                                '#3d8dbb',
                                '#9966ff'
                            ]
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }

        function loadNeedChart() {
            var needs = [];
            var userNeed = [];
            @foreach($needs as $need)
                needs.push('{{ $need }}')
            @endforeach
            @foreach($userNeed as $count)
                userNeed.push('{{ $count }}')
            @endforeach
            console.log(needs);
            console.log(userNeed);
            var needChart = new Chart(document.getElementById("need-chart"), {
                type: 'bar',
                data: {
                    labels: needs,
                    datasets: [
                        {
                            label: '# Số người khuyết tật',
                            data: userNeed,
                            backgroundColor: [
                                '#f16954',
                                '#39a65a',
                                '#f39c14',
                                '#53c0ef',
                                '#3d8dbb',
                                '#9966ff',
                                '#d2d6de'
                            ]
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }

        loadGenderChart();
        loadLaborAbilityChart();
        loadDisabilityChart();
        loadNeedChart();
    })
</script>
@endsection

