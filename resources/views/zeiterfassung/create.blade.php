@extends('adminlte::page')

@section('title', 'Mitarbeiter hinzufügen')

@section('content_header')
    <h1>Neue Mitarbeiter hinzufügen</h1>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 my-3">
                <div class="card panel-primary">
                    <div class="card-body">
                        <!--main content-->
                        <form action="{{ route('mitarbeiter.store') }}" method="POST">
                            @csrf


                            <div class="form-group  {{ $errors->first(' startDate', 'has-error') }}">
                                <div class="row">
                                    <label for=" startDate" class="col-sm-2 control-label">Geburtstag</label>
                                    <div class="col-sm-10">
                                        <input id=" startDate" name=" startDate" type="date"
                                               class="form-control"
                                               data-date-format="YYYY-MM-DD" placeholder="dd.mm.YYYY"/>
                                    </div>
                                    <span
                                        class="help-block">{{ $errors->first(' startDate', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group  {{ $errors->first('endDate', 'has-error') }}">
                                <div class="row">
                                    <label for="endDate" class="col-sm-2 control-label">Geburtstag</label>
                                    <div class="col-sm-10">
                                        <input id="endDate" name="birthday" type="date"
                                               class="form-control"
                                               data-date-format="YYYY-MM-DD" placeholder="dd.mm.YYYY"/>
                                    </div>
                                    <span
                                        class="help-block">{{ $errors->first('endDate', ':message') }}</span>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Speichern</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--row end-->
    </section>
@stop
