@extends('adminlte::page')

@section('title', 'Mitarbeiter editieren')

@section('content_header')
    <h1>Neue Mitarbeiter hinzufügen</h1>
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
                        <form id="commentForm" action="{{ route('mitarbeiter.update', $mitarbeiter->id) }}" method="POST"
                              enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('put')

                            <div id="rootwizard">
                                <div class="form-group {{ $errors->first('firstname', 'has-error') }}">
                                    <div class="row">
                                        <label for="firstname" class="col-sm-2 control-label">Vorname</label>
                                        <div class="col-sm-10">
                                            <input id="firstname" name="firstname" type="text"
                                                   placeholder="First Name" class="form-control required"
                                                   value="{{$mitarbeiter->firstname}}"/>

                                            {!! $errors->first('first_name', '<span
                                                class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->first('lastname', 'has-error') }}">
                                    <div class="row"><label for="last_name"
                                                            class="col-sm-2 control-label">Nachname</label>
                                        <div class="col-sm-10">
                                            <input id="lastname" name="lastname" type="text"
                                                   placeholder="Last Name" class="form-control required"
                                                   value="{{$mitarbeiter->lastname}}"/>

                                            {!! $errors->first('lastname', '<span
                                                class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <div class="row">
                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input id="email" name="email" placeholder="E-mail" type="text"
                                                   class="form-control required email"
                                                   value="{{$mitarbeiter->email}}"/>
                                            {!! $errors->first('email', '<span class="help-block">:message</span>')
                                            !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  {{ $errors->first('birthday', 'has-error') }}">
                                    <div class="row">
                                        <label for="birthday" class="col-sm-2 control-label">Geburtstag</label>
                                        <div class="col-sm-10">
                                            <input id="birthday" name="birthday" type="date"
                                                   class="form-control"
                                                   data-date-format="YYYY-MM-DD" placeholder="yyyy-mm-dd" value="{{$mitarbeiter->birthday->format('Y-m-d')}}"/>
                                        </div>
                                        <span
                                            class="help-block">{{ $errors->first('birthday', ':message') }}</span>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('address', 'has-error') }}">
                                    <div class="row">
                                        <label for="address" class="col-sm-2 control-label">Adresse</label>
                                        <div class="col-sm-10">
                                            <input id="address" name="address" placeholder="Adresse" type="text"
                                                   class="form-control required email"
                                                   value="{{$mitarbeiter->address}}"/>
                                            {!! $errors->first('address', '<span class="help-block">:message</span>')
                                            !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('plz', 'has-error') }}">
                                    <div class="row">
                                        <label for="plz" class="col-sm-2 control-label">PLZ</label>
                                        <div class="col-sm-10">
                                            <input id="plz" name="plz" placeholder="PLZ" type="text"
                                                   class="form-control required email"
                                                   value="{{$mitarbeiter->plz}}"/>
                                            {!! $errors->first('plz', '<span class="help-block">:message</span>')
                                            !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('city', 'has-error') }}">
                                    <div class="row">
                                        <label for="city" class="col-sm-2 control-label">Stadt</label>
                                        <div class="col-sm-10">
                                            <input id="city" name="city" placeholder="Stadt" type="text"
                                                   class="form-control required city"
                                                   value="{{$mitarbeiter->city}}"/>
                                            {!! $errors->first('city', '<span class="help-block">:message</span>')
                                            !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('phone', 'has-error') }}">
                                    <div class="row">
                                        <label for="phone" class="col-sm-2 control-label">Telefonnummer</label>
                                        <div class="col-sm-10">
                                            <input id="phone" name="phone" placeholder="Telefonnummer" type="text"
                                                   class="form-control required phone"
                                                   value="{{$mitarbeiter->phone}}"/>
                                            {!! $errors->first('phone', '<span class="help-block">:message</span>')
                                            !!}
                                        </div>
                                    </div>
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
