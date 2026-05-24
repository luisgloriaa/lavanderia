<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- INFORMACIÓN DEL PERFIL -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-bold mb-4">Información del perfil</h3>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- CONTRASEÑA -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-bold mb-4">Cambiar contraseña</h3>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- ELIMINAR CUENTA -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-bold mb-4 text-red-600">
                        Zona de peligro
                    </h3>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>