<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Sitio')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });

        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            drawPieChart();
            drawBarChart();
            drawLineChart();
        }

        function drawPieChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                @php
                    $conexion = mysqli_connect('127.0.0.1', 'root', '', 'chatbothc');
                    $SQL = 'SELECT MONTHNAME(fechaCuenta) AS mes, COUNT(id) AS cantidad FROM usuarios GROUP BY MONTH(fechaCuenta);';
                    $consulta = mysqli_query($conexion, $SQL);
                    while ($resultado = mysqli_fetch_assoc($consulta)) {
                        echo "['" . strval($resultado['mes']) . "'," . $resultado['cantidad'] . '],';
                    }
                @endphp
            ]);

            var options = {
                title: 'Usuarios por mes',
                backgroundColor: '#fff',
                chartArea: {
                    width: '80%',
                    height: '80%'
                },
                pieHole: 0.4,
                pieSliceBorderColor: '#ffffff',
                pieSliceText: 'none',
                slices: {
                    0: { color: '#00C4B4' },
                    1: { color: '#24C8F0' },
                    2: { color: '#AA71F2' },
                    3: { color: '#FF9A80' }
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }

        function drawBarChart() {
            var data = google.visualization.arrayToDataTable([
                ['Edad', 'IMC Promedio', { role: 'style' }],
                ['10-20', 20, '#00C4B4'],
                ['21-30', 25, '#24C8F0'],
                ['31-40', 22, '#AA71F2'],
                ['41-50', 26, '#FF9A80'],
                ['51+', 28, '#FFCC80']
            ]);

            var options = {
                title: 'IMC por edad (Promedio)',
                backgroundColor: '#fff',
                chartArea: {
                    width: '70%',
                    height: '70%'
                },
                legend: { position: 'none' }
            };

            var chart = new google.visualization.BarChart(document.getElementById('barchart'));
            chart.draw(data, options);
        }

        function drawLineChart() {
            var data = google.visualization.arrayToDataTable([
                ['Mes', 'Este Año', 'Año Anterior'],
                ['Enero', 1000, 900],
                ['Febrero', 1170, 1000],
                ['Marzo', 660, 1200],
                ['Abril', 1030, 540],
                ['Mayo', 1200, 750],
                ['Junio', 1150, 800],
                ['Julio', 1250, 870],
                ['Agosto', 1300, 900],
                ['Septiembre', 1400, 950],
                ['Octubre', 1500, 980],
                ['Noviembre', 1600, 1020],
                ['Diciembre', 1700, 1100]
            ]);

            var options = {
                title: 'Numero de Consultas por Mes',
                backgroundColor: '#fff',
                chartArea: {
                    width: '80%',
                    height: '70%'
                },
                hAxis: {
                    title: 'Mes',
                    titleTextStyle: { color: '#333' }
                },
                vAxis: { minValue: 0 },
                colors: ['#00C4B4', '#24C8F0']
            };

            var chart = new google.visualization.AreaChart(document.getElementById('linechart'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div class="contenedor-principal">
        <aside class="contenido">
            <img src="{{ asset('../storage/app/public/img/rectangle3.png') }}">
            <h4>@yield('usuario')</h4>
            <hr class="linea-horizontal">
            <a href="{{ route('admin.index') }}"><iconify-icon icon="material-symbols:dashboard"
                    class="icono-panel"></iconify-icon>Dashboard</a>
            <a href="{{ route('adminUsuario.index', ['nombreUsuario' => $nombreUsuario]) }}"><iconify-icon
                    icon="solar:user-bold" class="icono-panel"></iconify-icon>Pacientes</a>
            <a href="{{ route('adminCurso.index', ['nombreUsuario' => $nombreUsuario]) }}"><iconify-icon
                    icon="wpf:books" class="icono-panel"></iconify-icon>Historias Clinicas</a>
            <a href="{{ route('adminVideo.index', ['nombreUsuario' => $nombreUsuario]) }}"><iconify-icon
                    icon="wpf:books" class="icono-panel"></iconify-icon>Solicitudes de Citas Medicas</a>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="boton-cerrar-sesion">Cerrar Sesión</button>
            </form>
        </aside>
        <div class="contenedor">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
