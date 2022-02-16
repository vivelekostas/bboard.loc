@extends('layouts.base')

@section('main')

<h2>{{ $bb->title }}</h2>
<p>{{ $bb->content }}</p>
<p>{{ $bb->price }}</p>
<p><a href="{{ route('index') }}">На перечень Обявлений</a></p>

@endsection
