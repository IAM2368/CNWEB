@extends('layouts.app')

@section('content')
    <h2>Add Task</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">TITLE</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">DESCRIPTION</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="long_description" class="form-label">LONG DESCRIPTION</label>
            <textarea class="form-control" id="long_description" name="long_description" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
