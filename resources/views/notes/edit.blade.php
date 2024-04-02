@extends('layouts.app')

@section('title', 'Notes Edit')

@section('content')
    <div class="container">
        <a href="{{ route('notes.index') }}" class="btn btn-primary">Notes</a>

        <form method="post" action="{{ route('notes.update', $note->id) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $note->title }}" ¡>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3">{{ $note->description }}</textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>


    </div>
@endsection
