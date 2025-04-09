<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="display-4 text-primary">📝 All Notes</h2>
        <a href="{{ route('note.create') }}" class="btn btn-success btn-lg">
            <i class="bi bi-plus-circle me-2"></i> Create New Note
        </a>
    </div>

    @foreach ($notes as $note)
        <div class="card mb-4 shadow-lg border-light">
            <div class="card-body">
                <h5 class="card-title text-dark">{{ $note->title }}</h5>
                <p class="card-text text-muted mb-3">{{ Str::limit($note->content, 150, '...') }}</p>

                <span class="badge bg-info text-dark">Status: {{ $note->status }}</span>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <a href="{{ route('note.edit', $note->id) }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-pencil-square me-2"></i> Edit
                    </a>

                    <form action="{{ route('note.destroy', $note->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                            <i class="bi bi-trash me-2"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
