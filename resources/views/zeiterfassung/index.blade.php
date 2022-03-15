@extends('adminlte::page')

@section('title', 'Alle Zeiten')

@section('content_header')
    <h1>Alle Zeiten</h1>
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
                                        <th class="wd-15p border-bottom-0">Personalnr</th>
                                        <th class="wd-15p border-bottom-0">Starten</th>
                                        <th class="wd-15p border-bottom-0">Enden</th>
                                        <th class="wd-25p border-bottom-0 text-center">Aktion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($zeiterfassungs as $zeiterfassung)
                                        <tr>
                                            <td>{{ $zeiterfassung->id }}</td>
                                            <td>{{ $zeiterfassung->startDate }}</td>
                                            <td> {{$zeiterfassung->endDate}}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('mitarbeiter.edit', $zeiterfassung) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                                    <a href="javascript:deleteResource({{ route('$zeiterfassung.destroy', $zeiterfassung,false) }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                    <a href="{{ route('mitarbeiter.show', $zeiterfassung) }}" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></a>
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
