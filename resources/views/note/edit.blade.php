<form action="{{ route('note.update', $note->id) }}" method="POST" class="form-container">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input type="text" id="title" name="title" value="{{ $note->title }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="content" class="form-label">Content</label>
        <textarea id="content" name="content" class="form-control" rows="5" required>{{ $note->content }}</textarea>
    </div>

    <div class="form-group">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-control">
            <option value="Draft" {{ $note->status == 'Draft' ? 'selected' : '' }}>Draft</option>
            <option value="Completed" {{ $note->status == 'Completed' ? 'selected' : '' }}>Completed</option>
            <option value="Archived" {{ $note->status == 'Archived' ? 'selected' : '' }}>Archived</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Note</button>
</form>

<!-- CSS for styling -->
<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        font-size: 1.1em;
        margin-bottom: 5px;
        display: block;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 1em;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .btn {
        padding: 10px 20px;
        font-size: 1.1em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
