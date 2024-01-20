@extends('layouts.app')

@section('content')

@foreach ($comics as $fumetto)

<p>{{$fumetto['title']}}</p>
        @endforeach

        @endsection