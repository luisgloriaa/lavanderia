<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear orden
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-8 rounded-2xl shadow">

                <h1 class="text-2xl font-bold mb-6">
                    ➕ Nueva orden de lavandería
                </h1>

                <form action="/orders" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- DESCRIPCIÓN -->
                    <div class="mb-4">
                        <label class="block font-medium mb-1">Descripción</label>
                        <input type="text" name="descripcion" required minlength="5"
                               class="w-full border-gray-300 rounded-lg">
                    </div>

                    <!-- TOTAL -->
                    <div class="mb-4">
                        <label class="block font-medium mb-1">Total</label>
                        <input type="number" name="total" required min="1"
                               class="w-full border-gray-300 rounded-lg">
                    </div>

                    <!-- FECHA ENTREGA (ESTE ES EL QUE TE FALTABA) -->
                    <div class="mb-4">
                        <label class="block font-medium mb-1">Fecha de entrega</label>
                        <input type="date" name="fecha_entrega" required
                               class="w-full border-gray-300 rounded-lg">
                    </div>

                    <!-- IMAGEN -->
                    <div class="mb-4">
                        <label class="block font-medium mb-1">Imagen</label>
                        <input type="file" name="imagen"
                               class="w-full">
                    </div>

                    <!-- BOTÓN GUARDAR -->
                    <div class="mt-6">
                        <button type="submit"
                          style="background:#16a34a;color:white;padding:10px 20px;border-radius:8px;font-weight:bold;">
                            Guardar orden
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>