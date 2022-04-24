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
                        <form action="{{ route('arbeitszeiterfassung.update', $zeiterfassung->id) }}" method="POST">
                            @csrf
                            @method('put')


                            <div class="form-group  {{ $errors->first(' kommen', 'has-error') }}">
                                <div class="row">
                                    <label for=" kommen" class="col-sm-2 control-label">von</label>
                                    <div class="col-sm-10">
                                        <input id=" kommen" name=" kommen" type="datetime-local"
                                               class="form-control" value="{{$zeiterfassung->kommen->format('Y-m-d')}}T{{ $zeiterfassung->kommen->format('H:i') }}"/>
                                    </div>
                                    <span
                                        class="help-block">{{ $errors->first(' kommen', ':message') }}</span>
                                </div>
                            </div>
                            <div class="form-group  {{ $errors->first('gehen', 'has-error') }}">
                                <div class="row">
                                    <label for="gehen" class="col-sm-2 control-label">bis</label>
                                    <div class="col-sm-10">
                                        <input id="gehen" name="gehen" type="datetime-local"
                                               class="form-control" value="{{$zeiterfassung->gehen->format('Y-m-d')}}T{{ $zeiterfassung->gehen->format('H:i') }}"/>
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
