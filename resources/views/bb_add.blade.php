@extends('layouts.base')

@section('title', 'Добавление объявления :: Мои объявления')

@section('main')

<form action="{{ route('bb.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="txtTitle">Товар</label>
        <input name="title" class="form-control @error('title') is-invalid @enderror" id="txtTitle" value="{{ old('title') }}">
        @error('title')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="txtContent">Описание</label>
        <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="3">{{ old('content') }}</textarea>
        @error('content')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="txtPrice">Цена</label>
        <input name="price" class="form-control @error('price') is-invalid @enderror" id="txtPrice" value="{{ old('price') }}">
        @error('price')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <input type="submit" class="btn btn-primary" value="Добавить">
</form>

@endsection