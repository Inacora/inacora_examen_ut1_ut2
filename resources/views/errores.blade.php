<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/errores.css') }}">
    <title>Errores de Validación</title>
</head>
<body>
    <div class="container">
        <h1>Errores de Validación</h1>

        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @else
            <p>No hay errores para mostrar.</p>
        @endif

        <div class="button-container">
            <a href="{{ route('messages.show') }}" class="button">Volver al Formulario</a>
        </div>
    </div>
</body>
</html>
