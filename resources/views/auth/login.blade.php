<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600 bg-green-100 px-4 py-2 rounded">
                {{ session('status') }}
            </div>
        @endif

        <!-- Formulaire de Connexion -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Adresse Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">
                    Email
                </label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" />

                @error('email')
                    <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Mot de passe -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Mot de passe
                </label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" />

                @error('password')
                    <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Se souvenir de moi -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox" name="remember"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                <label for="remember_me" class="ml-2 block text-sm text-gray-600">
                    {{ __('Se souvenir de moi') }}
                </label>
            </div>

            <!-- Lien mot de passe oublié + bouton -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="text-sm text-gray-600 hover:text-gray-900 underline">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif

                <button type="submit"
                    class="ml-3 px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
                    {{ __('Se connecter') }}
                </button>
            </div>
        </form>
    </div>

</body>
</html>
