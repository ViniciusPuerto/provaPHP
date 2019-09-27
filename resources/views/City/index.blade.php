@extends('layouts.app')

@section('content')

<table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Latitude</th>
              <th>Longitude</th>
              <th>Actions</th>
          </tr>
        </thead>

        <tbody>

                @foreach ($cities as $city) {
                <tr>
                    <td>{{$city->name}}</td>
                    <td>{{$city->lat}}</td>
                    <td>{{$city->lon}}</td>
                    <td>
                        <a href="cities/{{$city->id}}/edit">EDIT</a>

                        <form id="delete-form" method="POST" action="/cities/{{$city->id}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <div class="form-group">
                          <input type="submit" class="btn btn-danger" value="Delete City">
                        </div>
                      </form>
                    </td>
                </tr>
                }
                @endforeach
        </tbody>
      </table>
      <a href="/cities/create">Create City</a>
@endsection
