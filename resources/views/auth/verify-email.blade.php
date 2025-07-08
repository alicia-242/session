<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification d'email</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Merci pour votre inscription ! Avant de commencer, veuillez vérifier votre adresse email en cliquant sur le lien que nous venons de vous envoyer. Si vous ne l’avez pas reçu, nous pouvons vous en renvoyer un.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 bg-green-100 px-4 py-2 rounded">
                {{ __('Un nouveau lien de vérification a été envoyé à l’adresse e-mail fournie lors de l’inscription.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <!-- Bouton renvoyer -->
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
                    {{ __('Renvoyer l’e-mail de vérification') }}
                </button>
            </form>

            <!-- Bouton déconnexion -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Se déconnecter') }}
                </button>
            </form>
        </div>

    </div>

</body>
</html>
