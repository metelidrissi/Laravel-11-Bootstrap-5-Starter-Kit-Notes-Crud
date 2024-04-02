@extends('layouts.app')

@section('title', 'Notes')

@section('content')
    <div class="container">
        <a href="{{ route('notes.create') }}" class="btn btn-primary">Create</a>
        @isset($notes)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notes as $note)
                    <tr>
                        <th scope="row">{{ $note->id }}</th>
                        <td>{{ $note->title }}</td>
                        <td>{{ $note->description }}</td>
                        <td>
                            <a href="{{ route('notes.show', $note->id) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-primary">Edit</a>
                            <form method="post" action="{{ route('notes.destroy', $note->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>No data</p>
        @endisset


    </div>
@endsection
