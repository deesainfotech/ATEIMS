@extends('layouts.app')

@section('content')

<h1>Admin Dashboard</h1>

<hr>

<div style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px;">

    <div style="background:#2563EB;color:white;padding:20px;">
        <h2>Students</h2>
        <h1>0</h1>
    </div>

    <div style="background:#16A34A;color:white;padding:20px;">
        <h2>Faculty</h2>
        <h1>0</h1>
    </div>

    <div style="background:#F59E0B;color:white;padding:20px;">
        <h2>Departments</h2>
        <h1>0</h1>
    </div>

    <div style="background:#DC2626;color:white;padding:20px;">
        <h2>Courses</h2>
        <h1>0</h1>
    </div>

</div>

@endsection