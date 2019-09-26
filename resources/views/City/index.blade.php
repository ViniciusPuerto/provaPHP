@extends('layouts.app')

@section('content')

<table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Latitude</th>
              <th>Longitude</th>
          </tr>
        </thead>

        <tbody>

                @foreach ($cities as $city) {
                <tr>
                    <td>{{$city->name}}</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                </tr>
                }
                @endforeach
        </tbody>
      </table>
@endsection
