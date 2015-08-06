<?php
/**
 * Created by PhpStorm.
 * User: Hung
 * Date: 7/26/15
 * Time: 11:36 PM
 */
$action = 'TripsController@create';
?>

@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            {!! Form::open(['method'=>'get', 'action'=>$action]) !!}
            <div class="input-field col s9">
                <input id="Name" name="Name" type="text" class="validate">
                <label for="Name">New Trip Name</label>
            </div>
            <div class="col s1">
                <button class="btn blue tooltipped waves-effect waves-light" data-position="right" data-tooltip="Create new trip" type="submit" name="action">
                    <i class="material-icons">add</i>
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col s12 m9 l10">
            @foreach ($trips as $trip)
                <div id="{{ $trip->Id }}" class="col s12 m12 l12 trip-item scrollspy">
                    <div class="card large">
                        <div class="card-image">
                            <img src="{{ Config::get('app.url') . '/images/bg_06.jpg' }}">
                            <span class="card-title">{{ ucwords($trip->Name) }}</span>
                        </div>
                        <div class="card-content">
                            <h5 class="left">{{ $trip->Description }}</h5>
                            <h5 class="right">{{ date_create($trip->DateStart)->format(trans('date.format_primary')) }}</h5>
                        </div>
                        <div class="card-action green accent-1">
                            <a href="{!! action('TripsController@show', $trip->Id) !!}" class="tooltipped blue-text" data-position="left" data-tooltip="View details"><i class="material-icons">mode_edit</i></a>
                            <a href="{!! action('TripsController@destroy', $trip->Id) !!}" class="right red-text text-darken-3 tooltipped" data-position="right" data-tooltip="{!! trans('tooltips.trips_delete') !!}"><i class="material-icons">clear</i></a>
                            <a href="#" class="tooltipped pink-text" data-position="right" data-tooltip="Favorite listed"><i class="material-icons">favorite</i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col hide-on-small-only m3 l2">
            <div class="toc-wrapper pinned">
                <div style="height: 1px;">
                    <ul class="section table-of-contents">
                        @foreach ($trips as $trip)
                            <li><a class="red-text darken-4" href="#{{ $trip->Id }}">{{ ucwords($trip->Name) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop