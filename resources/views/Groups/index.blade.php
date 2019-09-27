@extends('layouts.app')

@section('content')

<table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Actions</th>
          </tr>
        </thead>

        <tbody>

                @foreach ($groups as $group) {
                <tr>
                    <td>{{$group->name}}</td>
                    <td>{{$group->description}}</td>
                    <td>
                        <a href="groups/{{$group->id}}/edit">EDIT</a>

                        <form id="delete-form" method="POST" action="/cities/{{$group->id}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <div class="form-group">
                          <input type="submit" class="btn btn-danger" value="Delete group">
                        </div>
                      </form>
                    </td>
                </tr>
                }
                @endforeach
        </tbody>
      </table>
      <a href="/groups/create">Create Group</a>
@endsection
