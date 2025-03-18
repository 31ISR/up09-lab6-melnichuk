<x-layout>
    <div>
        <a href="{{ route('note.create') }}" class="create">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="prew">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="actions">
                        <a href="{{ route('note.show', $note) }}" class="show">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="edit">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST" class="delete">
                            @csrf
                            @method('DELETE')
                            <button >Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pages">
            {{ $notes->links() }}
        </div>
    </div>
</x-layout>