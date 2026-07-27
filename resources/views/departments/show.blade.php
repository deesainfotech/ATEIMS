@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto">

    <h1 class="text-2xl font-bold mb-6">
        Department Details
    </h1>

    <div class="bg-white shadow rounded p-6">

        <p><strong>Code:</strong> {{ $department->department_code }}</p>

        <p><strong>Name:</strong> {{ $department->department_name }}</p>

        <p><strong>Institution:</strong>
            {{ $department->institution->institution_name ?? '-' }}
        </p>

        <p><strong>HOD:</strong> {{ $department->hod }}</p>

        <p><strong>Description:</strong> {{ $department->description }}</p>

        <p><strong>Status:</strong>
            {{ $department->status ? 'Active' : 'Inactive' }}
        </p>

    </div>

</div>

@endsection