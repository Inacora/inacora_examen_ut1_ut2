<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('/css/messages.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
            <ul>
                @foreach($messages as $message)
                    <li style= "text-decoration: {{ e($message->subrayado) }}" style= "font-weight: {{ e($message->negrita) }}">{{ $message->text }}</li>
                    <form action="{{ route('message.edit', $message->id) }}" method="GET">
                        <button type="submit" class="button">Editar</button>
                    </form>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>