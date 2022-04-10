<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="label">
            <h1 class="text-xl">Reestablecer contraseña 📝</h1>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidó su contraseña? No hay problema. Solamente escribe tu correo electrónico y recibirás un enlace para establecer una nueva contraseña.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Enviar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
