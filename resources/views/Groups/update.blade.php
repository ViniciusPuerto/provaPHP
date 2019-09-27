@extends('layouts.app')

@section('content')
<div class="row">
<form class="col s12" action="/groups/{{$group->id}}" method="post">
            @csrf
            @method('PUT')
                <div class="row">
                        <div class="input-field col s6">
                        <input placeholder="{{$group->name}}" id="name" name="name" type="text" class="validate" value="{{$group->name}}">
                        <label for="name">Group Name</label>
                        </div>

                        <div class="input-field col s6">
                            <input placeholder="{{$group->description}}" id="description" name="description" type="text" class="validate" value="{{$group->description}}">
                            <label for="description">Description</label>
                        </div>

                    </div>
                    <button class="" type="submit" name="action">
                        Edit
                    </button>
        </form>
    </div>
@endsection
