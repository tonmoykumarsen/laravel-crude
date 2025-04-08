<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $task->title ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $task->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Due Date</label>
    <input type="date" name="due_date" class="form-control" value="{{ old('due_date', $task->due_date ?? '') }}">
</div>

<div class="mb-3">
    <label>Priority</label>
    <select name="priority" class="form-control" required>
        @foreach(['Low', 'Medium', 'High'] as $priority)
            <option value="{{ $priority }}" {{ old('priority', $task->priority ?? '') == $priority ? 'selected' : '' }}>
                {{ $priority }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control" required>
        @foreach(['Pending', 'Complete'] as $status)
            <option value="{{ $status }}" {{ old('status', $task->status ?? '') == $status ? 'selected' : '' }}>
                {{ $status }}
            </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Save</button>
<a href="{{ route('task.index') }}" class="btn btn-secondary">Back</a>
