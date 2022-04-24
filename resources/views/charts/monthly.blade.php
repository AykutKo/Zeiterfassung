@extends('adminlte::page')

@section('title', 'Alle Zeiten')

@section('content_header')
    <h1>Alle Zeiten</h1>
@stop

@section('content')
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">



            <!-- Chart's container -->
            <div id="chart" style="height: 300px;"></div>
            <!-- Charting library -->
            <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
            <!-- Chartisan -->
            <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
            <!-- Your application script -->
            <script>
                const chart = new Chartisan({
                    el: '#chart',
                    url: "@chart('monthly_chart')",
                });
            </script>
        </div>
        <!-- CONTAINER CLOSED -->

    </div>
@stop
