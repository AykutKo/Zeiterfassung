@extends('adminlte::page')

@section('title', 'Alle Zeiten für Tätigkeiten')

@section('content_header')
    <h1>Alle Zeiten für Tätigkeiten</h1>
@stop

@section('content')
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <a href="{{ route('zeiterfassung.create') }}" class="float-right btn btn-primary import_btn">
                            <i class="fa fa-plus fa-fw"></i>Neue Zeiten hinzufügen</a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">Tätigkeit</th>
                                        <th class="wd-15p border-bottom-0">Starten</th>
                                        <th class="wd-15p border-bottom-0">Enden</th>
                                        <th class="wd-15p border-bottom-0">Bemerkung</th>
                                        <th class="wd-25p border-bottom-0 text-center">Aktion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($zeiterfassungs as $zeiterfassung)
                                        <tr>
                                            <td>{{ $zeiterfassung->taetigkeit }}</td>
                                            <td>{{ $zeiterfassung->startDate->format('d.m.Y H:i:s') }}</td>
                                            <td> {{$zeiterfassung->endDate->format('d.m.Y H:i:s')}}</td>
                                            <td>{{ $zeiterfassung->bemerkung }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('zeiterfassung.edit', $zeiterfassung) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- CONTAINER CLOSED -->

    </div>
@stop
