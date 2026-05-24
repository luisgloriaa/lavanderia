<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Órdenes
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="text-3xl font-bold mb-6 text-gray-800">
                📦 Lista de órdenes
            </h1>

            @if($orders->count() > 0)

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    @foreach($orders as $order)

                        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6">

                            <h2 class="text-xl font-bold mb-2">
                                {{ $order->descripcion }}
                            </h2>

                            <p class="text-gray-600">
                                💰 Total: ${{ $order->total }}
                            </p>

                            <p class="text-gray-600 mb-4">
                                📌 Estado: {{ $order->estado }}
                            </p>

                           <a href="{{ route('orders.show', $order->id) }}"
   style="background:#2563eb;color:white;padding:8px 12px;border-radius:8px;display:inline-block;font-weight:bold;">
    Ver detalle
</a>

                        </div>

                    @endforeach

                </div>

            @else

                <p class="text-gray-600">
                    No hay órdenes todavía.
                </p>

            @endif

        </div>
    </div>
</x-app-layout>