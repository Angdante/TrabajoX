<!DOCTYPE html>
<html>
<head>
    <title>Nota PDF</title>
    <style>
        body { font-family: 'DejaVu Sans', sans-serif; }
        .container { margin: 20px; }
        h1 { text-align: center; color: #333; }
        p { color: #333; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $note->title }}</h1>
        <p>{{ $note->content }}</p>
        @if ($note->image)
            <div>
                <img src="{{ public_path('storage/' . $note->image) }}" alt="Imagen de la Nota" style="max-width: 100%;">
            </div>
        @endif
    </div>
</body>
</html>
