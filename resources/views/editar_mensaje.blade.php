<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/editar.css') }}">
    <title>Editar Mensaje</title>
</head>
<body>
    <h2>Editar Mensaje</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('message.update', $message->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="mensaje">Mensaje:</label>
        <input type="text" id="mensaje" name="mensaje" value="{{ old('mensaje', $message->text) }}" required>

        <label for="subrayado">Subrayado:</label>
        <select id="subrayado" name="subrayado" required>
            <option value="underline" {{ $message->subrayado === 'underline' ? 'selected' : '' }}>Si</option>
            <option value="none" {{ $message->subrayado === 'none' ? 'selected' : '' }}>No</option>
        </select>

        <label for="negrita">Negrita:</label>
        <select id="negrita" name="negrita" required>
            <option value="bold" {{ $message->negrita === 'bold' ? 'selected' : '' }}>Si</option>
            <option value="normal" {{ $message->negrita === 'normal' ? 'selected' : '' }}>No</option>
        </select>

        <button type="submit" class="button">Mensaje</button>
    </form>

    <a href="{{ route('messages.show') }}">Volver a los mensajes</a>
</body>
</html>