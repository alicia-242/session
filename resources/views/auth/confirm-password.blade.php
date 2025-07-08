<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation du mot de passe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">
            Zone sécurisée
        </h2>
        <p class="text-sm text-gray-600 mb-6">
            Cette zone est sécurisée. Veuillez confirmer votre mot de passe avant de continuer.
        </p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Mot de passe -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Mot de passe
                </label>
                <input id="password" name="password" type="password" required
                    autocomplete="current-password"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" />

                @error('password')
                    <span class="text-sm text-red-600 mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            <!-- Bouton -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Confirmer
                </button>
            </div>
        </form>
    </div>

</body>
</html>
