<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inicio
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- ENCABEZADO -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    🧺 Panel de Administración de Lavandería
                </h1>
                <p class="text-gray-600 mt-2">
                    Gestiona las órdenes de lavado, crea nuevos registros y da seguimiento a cada servicio.
                </p>
            </div>

            <!-- TARJETAS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- ÓRDENES -->
                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6">
                    <div class="text-4xl mb-3">📦</div>
                    <h2 class="text-xl font-bold mb-2">Órdenes</h2>
                    <p class="text-gray-600 mb-4">
                        Consulta todas las órdenes registradas en el sistema.
                    </p>
                    <a href="/orders" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        Ver órdenes
                    </a>
                </div>

                <!-- CREAR ORDEN -->
                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6">
                    <div class="text-4xl mb-3">➕</div>
                    <h2 class="text-xl font-bold mb-2">Crear orden</h2>
                    <p class="text-gray-600 mb-4">
                        Registra una nueva orden de lavado con sus datos correspondientes.
                    </p>
                    <a href="/orders/create" class="inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                        Crear orden
                    </a>
                </div>

                <!-- PERFIL -->
                <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6">
                    <div class="text-4xl mb-3">👤</div>
                    <h2 class="text-xl font-bold mb-2">Perfil</h2>
                    <p class="text-gray-600 mb-4">
                        Administra tu información personal de usuario.
                    </p>
                    <a href="/profile" class="inline-block bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                        Ver perfil
                    </a>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>