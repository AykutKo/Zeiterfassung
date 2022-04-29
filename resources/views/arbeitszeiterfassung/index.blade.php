@extends('adminlte::page')

@section('title', 'Alle Arbeitszeiten')

@section('content_header')
    <h1>Alle Arbeitszeiten</h1>
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
                        <a href="{{ route('arbeitszeiterfassung.create') }}" class="float-right btn btn-primary import_btn">
                            <i class="fa fa-plus fa-fw"></i>Neue Arbeitszeiten hinzufügen</a>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">Personalnummer Mitarbeiter</th>
                                        <th class="wd-15p border-bottom-0">Name Mitarbeiter</th>
                                        <th class="wd-15p border-bottom-0">Arbeitszeit Begonnen</th>
                                        <th class="wd-15p border-bottom-0">Arbeitszeit Beendet</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($zeiterfassungs as $zeiterfassung)
                                        <tr>
                                            <td>{{ $zeiterfassung->user->id }}</td>
                                            <td>{{ $zeiterfassung->user->firstname }} {{ $zeiterfassung->user->lastname }}</td>
                                            <td>{{ $zeiterfassung->kommen->format('d.m.Y H:i:s') }}</td>
                                            <td> {{$zeiterfassung->gehen->format('d.m.Y H:i:s')}}</td>
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
