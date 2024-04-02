@extends('layouts.app')

@section('title', 'Notes Create')

@section('content')
    <div class="container">
        <a href="{{ route('notes.index') }}" class="btn btn-primary">Notes</a>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <h1>{{ $note->title }}</h1>
                </div>
                <div class="mb-3">
                    <p> {{ $note->description }}</p>

                </div>
            </div>
        </div>


    </div>
@endsection
