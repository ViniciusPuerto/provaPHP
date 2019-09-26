@extends('layouts.app')

@section('content')
<div class="row">
    <form class="col s12" action="/cities" method="post">
        @csrf
            <div class="row">
                    <div class="input-field col s6">
                    <input placeholder="Placeholder" id="name" name="name" type="text" class="validate">
                    <label for="first_name">City Name</label>
                    </div>
                </div>
                <button class="" type="submit" name="action">
                    Submit
                </button>
    </form>
</div>
@endsection
