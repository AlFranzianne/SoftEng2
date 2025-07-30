<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | OSOLink</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-white font-sans">
    <div class="w-full max-w-sm p-8 border-2 border-red-700 rounded-lg shadow-lg bg-white">
        <div class="flex justify-center mb-6">
            <img src="https://oso-link.com/wp-content/uploads/2022/07/Logo_OSOLink.png" alt="OSOLink Logo" class="w-24">
        </div>

        <h2 class="text-center text-2xl font-bold text-red-700 mb-6">Login</h2>

        @if(session('error'))
            <p class="text-sm text-red-600 text-center mb-4">{{ session('error') }}</p>
        @endif

        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <input
                name="username"
                type="text"
                placeholder="Username"
                required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500"
            >
            <input
                name="password"
                type="password"
                placeholder="Password"
                required
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500"
            >
            <button
                type="submit"
                class="w-full py-2 px-4 bg-red-700 text-white font-semibold rounded hover:bg-red-800 transition"
            >
                Login
            </button>
        </form>
    </div>
</body>
</html>
