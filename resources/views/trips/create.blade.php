<?php

?>

@extends('layouts.default')

@section('content')
{!! Form::open(['action'=>'TripsController@store']) !!}
<div class="row">
    <div class="input-field col s6">
        {!! Form::label('Name', 'Name', ['class'=>'active']) !!}
        {!! Form::input('text', 'Name', $Name, ['id'=>'Name', 'class'=>'validate']) !!}
    </div>
    <div class="input-field col s6">
        {!! Form::label('Description', 'Description', '', []) !!}
        {!! Form::input('text', 'Description', '', ['id'=>'description', 'class'=>'validate']) !!}
    </div>
</div>
<div class="row">
    <div class="input-field col s6">
        {!! Form::label('date-start', 'From date', '', []) !!}
        {!! Form::input('date', 'DateStart', '', ['id'=>'date-start', 'class'=>'datepicker']) !!}
    </div>
    <div class="input-field col s6">
        {!! Form::label('date-end', 'To date', '', []) !!}
        {!! Form::input('date', 'DateEnd', '', ['id'=>'date-end', 'class'=>'datepicker']) !!}
    </div>
</div>
<div class="row">
    <div class="col s2">
        <button class="btn waves-effect waves-light" type="submit" name="trips_add">Save
            <i class="material-icons left">save</i>
        </button>
    </div>
    <div class="col s2 right">
        <a class="btn waves-effect waves-light right" href="{!! action('TripsController@index') !!}" >Cancel
            <i class="material-icons left">cancel</i>
        </a>
    </div>
</div>
{!! Form::close() !!}
@endsection