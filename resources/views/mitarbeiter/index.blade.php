@extends('adminlte::page')

@section('title', 'Alle Mitarbeiter')

@section('content_header')
    <h1>Alle Mitarbeiter</h1>
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
                        <a href="{{ route('mitarbeiter.create') }}" class="float-right btn btn-primary import_btn">
                            <i class="fa fa-plus fa-fw"></i>Neue Mitarbeiter hinzufügen</a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">Personalnr</th>
                                        <th class="wd-15p border-bottom-0">Vorname</th>
                                        <th class="wd-15p border-bottom-0">Nachname</th>
                                        <th class="wd-20p border-bottom-0">Geburtsdatum</th>
                                        <th class="wd-25p border-bottom-0 text-center">Adresse</th>
                                        <th class="wd-25p border-bottom-0 text-center">PLZ</th>
                                        <th class="wd-25p border-bottom-0 text-center">Stadt</th>
                                        <th class="wd-20p border-bottom-0">E-Mail Adresse</th>
                                        <th class="wd-20p border-bottom-0">Telefonnummer</th>
                                        <th class="wd-25p border-bottom-0 text-center">Aktion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mitarbeiters as $mitarbeiter)
                                        <tr>
                                            <td>{{ $mitarbeiter->id }}</td>
                                            <td>{{ $mitarbeiter->firstname }}</td>
                                            <td> {{$mitarbeiter->lastname}}</td>
                                            <td> {{$mitarbeiter->birthday}}</td>
                                            <td>{{ $mitarbeiter->address }}</td>
                                            <td>{{ $mitarbeiter->plz }}</td>
                                            <td>{{ $mitarbeiter->city }}</td>
                                            <td>{{ $mitarbeiter->email }}</td>
                                            <td>{{ $mitarbeiter->phone }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('mitarbeiter.edit', $mitarbeiter) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                                    <a href="javascript:deleteResource({{ route('mitarbeiter.destroy', $mitarbeiter,false) }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                    <a href="{{ route('mitarbeiter.show', $mitarbeiter) }}" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></a>
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
