@extends('tasks.app')

@section('content')
    <div class="container">
        <h1>Chi tiết Task</h1>
        <p><strong>Tiêu đề:</strong> {{ $tasks->title }}</p>
        <p><strong>Mô tả:</strong> {{ $tasks->description }}</p>
        <p><strong>Mô tả chi tiết:</strong> {{ $tasks->long_description }}</p>
        <p><strong>Trạng thái:</strong> {{ $tasks->completed ? 'Hoàn thành' : 'Chưa hoàn thành' }}</p>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>
@endsection


