@extends('layouts.app')

@section('content')<div class="container">
<ul>
 @foreach ($clients as $client)
 <li>{{ $client }}</li>
 @endforeach
</ul>
</div>@endsection
