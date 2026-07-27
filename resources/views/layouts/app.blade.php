<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ATEIMS')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 text-white">

        <div class="p-5 text-2xl font-bold border-b border-blue-700">
            ATEIMS
        </div>

        <nav class="mt-5">

            <a href="{{ route('dashboard') }}"
               class="block px-5 py-3 hover:bg-blue-700">
                Dashboard
            </a>

            <a href="{{ route('institutions.index') }}"
               class="block px-5 py-3 hover:bg-blue-700">
                Institution
            </a>

            <a href="#"
               class="block px-5 py-3 hover:bg-blue-700">
                Departments
            </a>

            <a href="#"
               class="block px-5 py-3 hover:bg-blue-700">
                Courses
            </a>

            <a href="#"
               class="block px-5 py-3 hover:bg-blue-700">
                Students
            </a>

            <a href="#"
               class="block px-5 py-3 hover:bg-blue-700">
                Faculty
            </a>

            <a href="#"
               class="block px-5 py-3 hover:bg-blue-700">
                Attendance
            </a>

            <a href="#"
               class="block px-5 py-3 hover:bg-blue-700">
                Examination
            </a>

            <a href="#"
               class="block px-5 py-3 hover:bg-blue-700">
                Library
            </a>

            <a href="#"
               class="block px-5 py-3 hover:bg-blue-700">
                Fees
            </a>

        </nav>

    </aside>

    <!-- Main Area -->
    <div class="flex-1">

        <!-- Header -->
        <header class="bg-white shadow p-5 flex justify-between">

            <h1 class="text-2xl font-bold">
                @yield('page-title')
            </h1>

            <div>

                {{ Auth::user()->name }}

            </div>

        </header>

        <!-- Flash Message -->
        <div class="p-5">

            @if(session('success'))

                <div class="bg-green-200 text-green-900 p-3 rounded mb-4">

                    {{ session('success') }}

                </div>

            @endif

            @yield('content')

        </div>

    </div>

</div>

</body>
</html>