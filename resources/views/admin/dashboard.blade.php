@extends('admin.adminlayout')
@section('content')

<!-- Dashboard Container -->

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-gray-100">
            <div class="p-6 text-xl font-bold">
                Dashboard
            </div>
            <nav class="mt-6">
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700">Overview</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700">Reports</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700">Analytics</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-700">Settings</a>
            </nav>
        </aside>

        <!-- Main content area -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navbar -->
            <header class="flex justify-between items-center p-4 bg-white border-b">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-md">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-md">Log Out</button>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold">Card Title</h2>
                        <p class="mt-4 text-gray-600">Description or content goes here.</p>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold">Card Title</h2>
                        <p class="mt-4 text-gray-600">Description or content goes here.</p>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold">Card Title</h2>
                        <p class="mt-4 text-gray-600">Description or content goes here.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>


@endsection