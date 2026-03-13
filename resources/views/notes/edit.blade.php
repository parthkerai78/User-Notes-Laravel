<form action="{{ route('notes.update', $note->id) }}" method="POST">
    
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $note->title }}">

    <textarea name="description">{{ $note->description }}</textarea>

    <button type="submit">Update</button>

</form>
