<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATEIMS</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

<header style="background:#1E3A8A;color:white;padding:15px;">
    <h2>Academic & Technical Educational Institution Management System</h2>

    <p>
        Welcome,
        {{ auth()->user()->name }}
    </p>
</header>

<div style="display:flex;min-height:90vh;">

    <!-- Sidebar -->
    <aside style="width:250px;background:#0F172A;color:white;padding:20px;">

        <h3>Navigation</h3>

        <hr>

        <p><a href="#" style="color:white;">Dashboard</a></p>

        <p><a href="#" style="color:white;">Departments</a></p>

        <p><a href="#" style="color:white;">Courses</a></p>

        <p><a href="#" style="color:white;">Subjects</a></p>

        <p><a href="#" style="color:white;">Faculty</a></p>

        <p><a href="#" style="color:white;">Students</a></p>

        <p><a href="#" style="color:white;">Attendance</a></p>

        <p><a href="#" style="color:white;">Examination</a></p>

        <p><a href="#" style="color:white;">Library</a></p>

        <p><a href="#" style="color:white;">Fees</a></p>

        <p><a href="#" style="color:white;">Settings</a></p>

    </aside>

    <!-- Main Content -->
    <main style="flex:1;padding:30px;">

        @yield('content')

    </main>

</div>

</body>
</html>