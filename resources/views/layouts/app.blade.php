<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelSys</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-100">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 p-6">
            <h2 class="text-yellow-400 text-2xl font-bold mb-6">HotelSys</h2>
            <nav class="space-y-2">
                <a href="{{ route('panel') }}" class="block px-3 py-2 rounded hover:bg-gray-700">Panel</a>
                <a href="{{ route('clientes.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700">Clientes</a>
                <a href="{{ route('habitaciones.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700">Habitaciones</a>
                <a href="{{ route('tipos.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700">Tipos</a>
                <a href="{{ route('reservas.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700">Reservas</a>
                <a href="{{ route('pagos.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700">Pagos</a>
                <a href="{{ route('empleados.index') }}" class="block px-3 py-2 rounded hover:bg-gray-700">Empleados</a>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>

</body>
</html>
