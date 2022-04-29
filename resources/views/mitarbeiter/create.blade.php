@extends('adminlte::page')

@section('title', 'Mitarbeiter hinzufügen')

@section('content_header')
    <h1>Neue Mitarbeiter hinzufügen</h1>
@stop

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif
    @hasrole('admin')
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 my-3">
                <div class="card panel-primary">
                    <div class="card-body">
                        <!--main content-->
                        <form action="{{ route('mitarbeiter.store') }}" method="POST">
                            @csrf

                            <div id="rootwizard">
                                <div class="form-group {{ $errors->first('firstname', 'has-error') }}">
                                    <div class="row">
                                        <label for="firstname" class="col-sm-2 control-label">Vorname*</label>
                                        <div class="col-sm-10">
                                            <input id="firstname" name="firstname" type="text"
                                                   placeholder="Vorname" class="form-control required"
                                                   value="{!! old('firstname') !!}"/>

                                            {!! $errors->first('firstname', '<span
                                                class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->first('lastname', 'has-error') }}">
                                    <div class="row"><label for="lastname"
                                                            class="col-sm-2 control-label">Nachname*</label>
                                        <div class="col-sm-10">
                                            <input id="lastname" name="lastname" type="text"
                                                   placeholder="Nachname" class="form-control required"
                                                   value="{!! old('lastname') !!}"/>

                                            {!! $errors->first('lastname', '<span
                                                class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <div class="row">
                                        <label for="email" class="col-sm-2 control-label">Email*</label>
                                        <div class="col-sm-10">
                                            <input id="email" name="email" placeholder="E-mail" type="text"
                                                   class="form-control required email"
                                                   value="{!! old('email') !!}"/>
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
                                                   data-date-format="YYYY-MM-DD" placeholder="dd.mm.YYYY"/>
                                        </div>
                                        <span
                                            class="help-block">{{ $errors->first('birthday', ':message') }}</span>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('address', 'has-error') }}">
                                    <div class="row">
                                        <label for="address" class="col-sm-2 control-label">Adresse*</label>
                                        <div class="col-sm-10">
                                            <input id="address" name="address" placeholder="Adresse" type="text"
                                                   class="form-control required email"
                                                   value="{!! old('address') !!}"/>
                                            {!! $errors->first('address', '<span class="help-block">:message</span>')
                                            !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('plz', 'has-error') }}">
                                    <div class="row">
                                        <label for="plz" class="col-sm-2 control-label">PLZ*</label>
                                        <div class="col-sm-10">
                                            <input id="email" name="plz" placeholder="PLZ" type="text"
                                                   class="form-control required email"
                                                   value="{!! old('plz') !!}"/>
                                            {!! $errors->first('plz', '<span class="help-block">:message</span>')
                                            !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('city', 'has-error') }}">
                                    <div class="row">
                                        <label for="city" class="col-sm-2 control-label">Stadt*</label>
                                        <div class="col-sm-10">
                                            <input id="city" name="city" placeholder="Stadt" type="text"
                                                   class="form-control required email"
                                                   value="{!! old('city') !!}"/>
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
                                <div class="form-group  {{ $errors->first('urlaubstage', 'has-error') }}">
                                    <div class="row">
                                        <label for="urlaubstage" class="col-sm-2 control-label">Rest Urlaubstage </label>
                                        <div class="col-sm-10">
                                            <input id="urlaubstage" name="urlaubstage" placeholder="Rest Urlaubstage" type="number"
                                                   class="form-control"
                                                   value="{{$mitarbeiter->urlaubstage}}"/>
                                        </div>
                                        <span
                                            class="help-block">{{ $errors->first('urlaubstage', ':message') }}</span>
                                    </div>
                                </div>
                                <div class="form-group  {{ $errors->first('krankheitstage', 'has-error') }}">
                                    <div class="row">
                                        <label for="krankheitstage" class="col-sm-2 control-label">Krankheitstage </label>
                                        <div class="col-sm-10">
                                            <input id="krankheitstage" name="krankheitstage" placeholder="Krankheitstage" type="number"
                                                   class="form-control"
                                                   value="{{$mitarbeiter->krankheitstage}}"/>
                                        </div>
                                        <span
                                            class="help-block">{{ $errors->first('krankheitstage', ':message') }}</span>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                    <div class="row">
                                        <label for="password" class="col-sm-2 control-label">Passwort*</label>
                                        <div class="col-sm-10">
                                            <input id="password" name="password" type="password"
                                                   placeholder="Password" class="form-control required"
                                                   value="{!! old('password') !!}"/>
                                            {!! $errors->first('password', '<span
                                                class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                    <div class="row">
                                        <label for="password_confirm" class="col-sm-2 control-label">Confirm
                                            Password *</label>
                                        <div class="col-sm-10">
                                            <input id="password_confirm" name="password_confirm" type="password"
                                                   placeholder="Confirm Password "
                                                   class="form-control required"/>
                                            {!! $errors->first('password_confirm', '<span
                                                class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1" A>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Personalabteilung
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios2" value="option1" >
                                            <label class="form-check-label" for="exampleRadios2">
                                                Vertrieb
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios3" value="option1" >
                                            <label class="form-check-label" for="exampleRadios3">
                                                Entwickler
                                            </label>
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
@endhasrole
@stop
