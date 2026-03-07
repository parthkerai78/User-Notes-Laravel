<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>My Notes</h2>
    
    <a href="{{ route('notes.create') }}">Add Note</a>

    @foreach($notes as $note)
        <h3>{{ $note->title }}</h3>
        <p>{{ $note->description }}</p>

        <form action="{{ route('notes.destroy', $note->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    @endforeach
</body>
</html>