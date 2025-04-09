<form action="{{ route('note.store') }}" method="POST" class="p-4 border rounded shadow-sm bg-light" style="max-width: 600px; margin: auto;">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" required>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" class="form-control" rows="4" placeholder="Write your note here..." required></textarea>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select">
            <option value="Draft">Draft</option>
            <option value="Completed">Completed</option>
            <option value="Archived">Archived</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary w-100 mt-3">💾 Save Note</button>
</form>

<!-- Additional CSS for improved appearance -->
<style>
    form {
        background-color: #f9f9f9; /* Light background */
    }

    .form-label {
        font-size: 1.1rem;
        font-weight: bold;
        color: #333;
    }

    .form-control, .form-select {
        padding: 10px;
        font-size: 1rem;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .btn {
        padding: 12px;
        font-size: 1.2rem;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
    }

    .mb-3 {
        margin-bottom: 1.5rem;
    }
</style>
