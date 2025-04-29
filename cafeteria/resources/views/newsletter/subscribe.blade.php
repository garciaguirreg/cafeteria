<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suscribirse al Boletín</title>
    </head>
<body>
    <h1>Suscríbete a nuestras novedades</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('subscribe') }}">
        @csrf

        <div>
            <label for="email">Tu Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <button type="submit">Suscribirme</button>
    </form>

    <p><a href="/">Volver a la página principal</a></p>
</body>
</html>