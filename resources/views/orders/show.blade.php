<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalle de orden
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-8 rounded-2xl shadow">

                <h1 class="text-2xl font-bold mb-4">
                    🧾 Ticket de lavandería
                </h1>

                <p class="mb-2"><strong>Descripción:</strong> {{ $order->descripcion }}</p>

                <p class="mb-2"><strong>Total:</strong> ${{ $order->total }}</p>

                <p class="mb-2"><strong>Estado:</strong> {{ $order->estado }}</p>

                <p class="mb-4"><strong>Fecha de entrega:</strong> {{ $order->fecha_entrega }}</p>

                @if($order->imagen)
                    <img src="{{ asset('storage/' . $order->imagen) }}"
                         class="rounded-lg w-full mt-4">
                @endif

                <a href="/orders"
                   class="inline-block mt-6 bg-gray-700 text-black px-4 py-2 rounded-lg hover:bg-gray-800">
                    Volver
                </a>

            </div>

        </div>
    </div>
</x-app-layout>