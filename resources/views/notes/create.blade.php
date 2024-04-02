@extends('layouts.app')

@section('title', 'Notes Create')

@section('content')
    <div class="container">
        <a href="{{ route('notes.index') }}" class="btn btn-primary">Notes</a>

        <form method="post" action="{{ route('notes.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                @error('title')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Invalid field
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3"></textarea>
                @error('description')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    Invalid field
                </div>
                @enderror
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>


    </div>
@endsection
