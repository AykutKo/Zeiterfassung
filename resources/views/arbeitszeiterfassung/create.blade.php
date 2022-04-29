@extends('adminlte::page')

@section('title', 'Neue Arbeitszeiten hinzufügen')

@section('content_header')
    <h1>Neue Arbeitszeiten hinzufügen</h1>
@stop

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 my-3">
                <div class="card panel-primary">
                    <div class="card-body">
                        <!--main content-->
                        <form action="{{ route('arbeitszeiterfassung.store') }}" method="POST">
                            @csrf


                            <div class="form-group  {{ $errors->first(' kommen', 'has-error') }}">
                                <div class="row">
                                    <label for=" kommen" class="col-sm-2 control-label">Gekommen um:</label>
                                    <div class="col-sm-10">
                                        <input id=" kommen" name=" kommen" type="datetime-local"
                                               class="form-control"
                                               data-date-format="YYYY-MM-DD" placeholder="dd.mm.YYYY"/>
                                    </div>
                                    <span
                                        class="help-block">{{ $errors->first(' kommen', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group  {{ $errors->first('gehen', 'has-error') }}">
                                <div class="row">
                                    <label for="gehen" class="col-sm-2 control-label">Gearbeitet bis</label>
                                    <div class="col-sm-10">
                                        <input id="gehen" name="gehen" type="datetime-local"
                                               class="form-control"
                                               data-date-format="YYYY-MM-DD" placeholder="dd.mm.YYYY"/>
                                    </div>
                                    <span
                                        class="help-block">{{ $errors->first('gehen', ':message') }}</span>
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
