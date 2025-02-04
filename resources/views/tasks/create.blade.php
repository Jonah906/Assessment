@extends('layouts.app')

@section('title')
Tasks
@endsection

@section('content')

<div class="container mt-5">
    <div class="page-wrapper bg-white p-4 shadow rounded">
        <h2 class="mb-4 text-center">Create Task</h2>

        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control border-secondary @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter Title">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="due_date" class="form-label fw-bold">Due Date</label>
                <input type="date" class="form-control border-secondary @error('due_date') is-invalid @enderror" id="due_date" name="due_date">
                @error('due_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Description</label>
                <textarea class="form-control border-secondary @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Enter task details..."></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection