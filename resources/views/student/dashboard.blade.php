@extends('layouts.app')

@section('content')

<h1>Student Dashboard</h1>

<hr>

<h2>Welcome {{ auth()->user()->name }}</h2>

<p>Email: {{ auth()->user()->email }}</p>

<p>Role: {{ auth()->user()->role->name }}</p>

@endsection