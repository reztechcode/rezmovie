<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <meta name="robots" content="noindex, nofollow">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen" x-data="{ sidebarOpen: false }">
        <!-- Sidebar -->
        <aside class="bg-gray-800 text-white w-64 hidden sm:block">
            <div class="flex items-center justify-center h-16 shadow-md">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
            </div>
            <nav class="mt-10 px-2">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center px-6 py-3 
                          {{ request()->is('admin/dashboard*') ? 'bg-indigo-600' : 'hover:bg-indigo-800' }} focus:bg-indigo-800 rounded-full font-semibold">
                    <span class="material-icons-outlined mr-3">dashboard</span>
                    Dashboard
                </a>
                <a href="{{ route('genres.index') }}"
                    class="flex items-center px-6 py-3 
                          {{ request()->is('admin/genres*') ? 'bg-indigo-600' : 'hover:bg-indigo-800' }} focus:bg-indigo-800 rounded-full font-semibold">
                    <span class="material-icons-outlined mr-3">category</span>
                    Genres
                </a>
                <a href="{{ route('movies.index') }}"
                    class="flex items-center px-6 py-3 
                          {{ request()->is('admin/movies*') ? 'bg-indigo-600' : 'hover:bg-indigo-800' }} focus:bg-indigo-800 rounded-full font-semibold">
                    <span class="material-icons-outlined mr-3">movie</span>
                    Movies
                </a>
                <a href="{{ url('auth/logout') }}"
                    class="flex items-center px-6 py-3 
                          {{ request()->is('logout') ? 'bg-indigo-600' : 'hover:bg-indigo-800' }} focus:bg-indigo-800 rounded-full font-semibold">
                    <span class="material-icons-outlined mr-3">logout</span>
                    Logout
                </a>
            </nav>
        </aside>

        <!-- Mobile Sidebar -->
        <aside
            class="fixed inset-y-0 z-30 bg-indigo-950 text-white w-64 transform -translate-x-full sm:hidden transition-transform duration-300"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
            <div class="flex items-center justify-between px-6 py-4">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
                <button @click="sidebarOpen = false" class="text-white focus:outline-none">
                    ✖
                </button>
            </div>
            <nav>
                <a href="{{ route('dashboard') }}"
                    class="block px-6 py-3 
                          {{ Request::is('dashboard') ? 'bg-indigo-800' : 'hover:bg-indigo-800' }} 
                          focus:bg-indigo-800">
                    Dashboard
                </a>
                <a href="{{ route('genres.index') }}"
                    class="block px-6 py-3 
                          {{ Request::is('admin/genres*') ? 'bg-indigo-800' : 'hover:bg-indigo-800' }} 
                          focus:bg-indigo-800">
                    Genres
                </a>
                <a href="{{ route('movies.index') }}"
                    class="block px-6 py-3 
                          {{ Request::is('admin/movies*') ? 'bg-indigo-800' : 'hover:bg-indigo-800' }} 
                          focus:bg-indigo-800">
                    Movies
                </a>
                <a href="{{ url('auth/logout') }}"
                    class="block px-6 py-3  
                          focus:bg-indigo-800">
                    Logout
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Bar -->
            <header class="bg-white shadow-md px-6 py-4 flex items-center justify-between">
                <div>
                    <button class="text-gray-600 focus:outline-none sm:hidden" @click="sidebarOpen = true">
                        ☰
                    </button>
                </div>
                <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
                <div>
                    <img src="https://via.placeholder.com/40" alt="Admin Avatar"
                        class="w-10 h-10 rounded-full border-2 border-indigo-950" loading="lazy">
                </div>
            </header>

            <!-- Dashboard Content -->
            @yield('content')
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tambahkan atribut data-lightbox ke semua gambar dalam konten blog
            $('#post-content img').each(function() {
                $(this).attr('alt', $(this).attr('alt') || 'Image'); // Pastikan atribut alt ada
            });
        });
    </script>
</body>

</html>
