@extends('layouts.base')

@section('title', $bb->title)

@section('main')

<h2>{{ $bb->title }}</h2>
<p>{{ $bb->content }}</p>
<p>{{ $bb->price }}</p>
<p>Автор: {{ $bb->user->name }}</p>
<p><a href="{{ route('index') }}">На перечень Обявлений</a></p>

@endsection
