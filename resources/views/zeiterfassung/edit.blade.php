@extends('adminlte::page')

@section('title', 'Mitarbeiter hinzufügen')

@section('content_header')
    <h1> Zeiten ändern</h1>
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
                        <form action="{{ route('zeiterfassung.update', $zeiterfassung->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group {{ $errors->first('taetigkeit', 'has-error') }}">
                                <div class="row">
                                    <label for="taetigkeit"
                                           class="col-sm-2 control-label">Tätigkeiten*</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" title=" Tätigkeit auswählen..."
                                                name="taetigkeit" id="taetigkeit">
                                            <option value="Design" {{$zeiterfassung->taetigkeit === 'Design' ? 'selected': ''}}>Design</option>
                                            <option value="Ist/Soll-Analyse " {{$zeiterfassung->taetigkeit === 'Ist/Soll-Analyse' ? 'selected': ''}}>Ist/Soll-Analyse </option>
                                            <option value="Grundbasis aufbauen" {{$zeiterfassung->taetigkeit === 'Grundbasis aufbauen' ? 'selected': ''}}>Grundbasis aufbauen</option>
                                        </select>
                                    </div>
                                    <span
                                        class="help-block">{{ $errors->first('taetigkeit', ':message') }}</span>
                                </div>
                            </div>

                            <div class="form-group  {{ $errors->first(' startDate', 'has-error') }}">
                                <div class="row">
                                    <label for=" startDate" class="col-sm-2 control-label">von</label>
                                    <div class="col-sm-10">
                                        <input id=" startDate" name=" startDate" type="datetime-local"
                                               class="form-control" value="{{$zeiterfassung->startDate->format('Y-m-d')}}T{{ $zeiterfassung->startDate->format('H:i') }}"/>
                                    </div>
                                    <span
                                        class="help-block">{{ $errors->first(' startDate', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group  {{ $errors->first('endDate', 'has-error') }}">
                                <div class="row">
                                    <label for="endDate" class="col-sm-2 control-label">bis</label>
                                    <div class="col-sm-10">
                                        <input id="endDate" name="endDate" type="datetime-local"
                                               class="form-control" value="{{$zeiterfassung->endDate->format('Y-m-d')}}T{{ $zeiterfassung->endDate->format('H:i') }}"/>
                                    </div>
                                    <span
                                        class="help-block">{{ $errors->first('endDate', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group  {{ $errors->first('bemerkung', 'has-error') }}">
                                <div class="row">
                                    <label for="bemerkung" class="col-sm-2 control-label">Bemerkung</label>

                                    <textarea id="bemerkung" name="bemerkung"
                                              class="form-control" >{{$zeiterfassung->bemerkung}}</textarea>
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
