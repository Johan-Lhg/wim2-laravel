@extends('layouts.app')

@section('content')
<div class="container">
<p> {client->name} </p>
<p> {client->email} </p>
<p> {client->status} </p>
</div>
@endsection
