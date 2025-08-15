<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/admin.js'])
</head>
<body class="bg-gray-100">
<div class="flex h-screen">
    <!-- Sidebar Navigation -->
    <div class="w-64 bg-blue-800 text-white shadow-lg">
        <div class="p-4 border-b border-blue-700">
            <h1 class="text-xl font-bold">Admin Panel</h1>
        </div>
        <nav class="mt-4">
            <ul>
                <li class="mb-1">
                    <a href="{{ route('admin.dashboard') }}"
                       class="block py-2 px-4 hover:bg-blue-700 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-700' : '' }}">
                        Dashboard
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('admin.menus.index') }}"
                       class="block py-2 px-4 hover:bg-blue-700 {{ request()->routeIs('admin.menus.*') ? 'bg-blue-700' : '' }}">
                        Menu Management
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('admin.projects.index') }}"
                       class="block py-2 px-4 hover:bg-blue-700 {{ request()->routeIs('admin.projects.*') ? 'bg-blue-700' : '' }}">
                        Projects Management
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ route('welcome') }}"
                       class="block py-2 px-4 hover:bg-blue-700 {{ request()->routeIs('welcome') ? 'bg-blue-700' : '' }}">
                        Visit Web Site
                    </a>
                </li>
                <!-- Add more menu items as needed -->
            </ul>
        </nav>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 overflow-auto">
        <!-- Top Header -->
        <header class="bg-white shadow-sm p-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold">@yield('title')</h2>
            <div class="flex items-center space-x-4">
                <span class="text-sm">Welcome, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-blue-600 hover:text-blue-800">Logout</button>
                </form>
            </div>
        </header>

        <!-- Content -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>
</div>

</body>
</html>
