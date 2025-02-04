@extends('layouts.app')

@section('title')
Tasks
@endsection

@section('content')

<div class="container mt-5">
    <div class="page-wrapper bg-white p-4 shadow rounded">
        <h2 class="mb-4 text-center">Edit Task</h2>

        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
            @method("PUT")
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control border-secondary @error('title') is-invalid @enderror" id="title" value="{{ $task->title }}" name="title" placeholder="Enter Title">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="due_date" class="form-label fw-bold">Due Date</label>
                <input type="date" class="form-control border-secondary @error('due_date') is-invalid @enderror" id="due_date" value="{{ $task->due_date }}" name="due_date">
                @error('due_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="due_date" class="form-label fw-bold">Status</label>
                <select name="status" id="status"
                    class="form-control border-secondary @error('status') is-invalid @enderror">
                    <option value="">>>-SELECT STATUS-<<< /option>
                    <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
                @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Description</label>
                <textarea class="form-control border-secondary @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Enter task details...">{{ $task->description }}</textarea>
                @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>


@endsection