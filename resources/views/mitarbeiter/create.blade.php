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
                        <form id="commentForm" action="{{ route('mitarbeiter.store') }}" method="POST"
                              enctype="multipart/form-data" class="form-horizontal">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                            <div id="rootwizard">
                                        <div class="form-group {{ $errors->first('firstname', 'has-error') }}">
                                            <div class="row">
                                                <label for="first_name" class="col-sm-2 control-label">Vorname*</label>
                                                <div class="col-sm-10">
                                                    <input id="firstname" name="firstname" type="text"
                                                           placeholder="First Name" class="form-control required"
                                                           value="{!! old('firstname') !!}"/>

                                                    {!! $errors->first('first_name', '<span
                                                        class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group {{ $errors->first('lastname', 'has-error') }}">
                                            <div class="row"><label for="last_name" class="col-sm-2 control-label">Nachname*</label>
                                                <div class="col-sm-10">
                                                    <input id="last_name" name="lastname" type="text"
                                                           placeholder="Last Name" class="form-control required"
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
                                                    <input id="birthday" name="birthday" type="text"
                                                           class="form-control"
                                                           data-date-format="YYYY-MM-DD" placeholder="yyyy-mm-dd"/>
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
                                    </div>
                                    <button type="submit" class="btn-primary">Speichern</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        <!--row end-->
    </section>
@stop
