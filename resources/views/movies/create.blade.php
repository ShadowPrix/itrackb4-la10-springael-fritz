@extends('layouts.app')

@section('title', 'Add New Movie')

@section('content')
    <h1>Add New Movie</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('movies.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="genre">Genre</label>
                    <select class="form-select" id="genre_id" name="genre_id">
                        <option value="">-Choose a genre-</option>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}" @selected(old('genre_id') == $genre->id)>{{ $genre->name }}</option>
                        @endforeach
                    </select>
                    @error('genre_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ old('rating') }}">
                    @error('rating')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" id="year" name="year" value="{{ old('year') }}">
                    @error('year')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Movie</button>
            </form>
        </div>
    </div>
@endsection