@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h3> Bem vindo {{$user->name}} !!</h3>
            </div>
        </div>
    </div>
</div>
@endsection
