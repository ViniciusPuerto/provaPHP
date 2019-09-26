@extends('layouts.app')

@section('content')
<div class="row">
<form class="col s12" action="/cities/{{$city->id}}" method="post">
            @csrf
            @method('PUT')
                <div class="row">
                        <div class="input-field col s6">
                        <input placeholder="{{$city->name}}" id="name" name="name" type="text" class="validate" value="{{$city->name}}">
                        <label for="name">City Name</label>
                        </div>

                        <div class="input-field col s6">
                            <input placeholder="{{$city->lat}}" id="lat" name="lat" type="text" class="validate" value="{{$city->lat}}">
                            <label for="latitude">Latitude</label>
                        </div>

                        <div class="input-field col s6">
                            <input placeholder="{{$city->lon}}" id="lon" name="lon" type="text" class="validate" value="{{$city->lon}}">
                            <label for="longitude">Longitude</label>
                        </div>

                    </div>
                    <button class="" type="submit" name="action">
                        Edit
                    </button>
        </form>
    </div>
@endsection
