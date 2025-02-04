@extends('layouts.app')

@section('title')
Tasks
@endsection

@section('content')

<div class="container mt-4">
  <div class="page-wrapper">
    <!-- Create Task Button -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Task List</h2>
      <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mt-2">{{ session('success') }}</div>
  @endif

    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Status</th>
            <th scope="col">Due Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $task->title }}</td>
              <td>
                <span class="badge bg-{{ $task->status === 'completed' ? 'success' : 'warning' }} text-dark">
                {{ ucfirst($task->status) }}
                </span>
              </td>
              <td>{{ $task->due_date }}</td>
              <td>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>

            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection