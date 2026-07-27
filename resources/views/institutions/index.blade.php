@extends('layouts.app')

@section('title', 'Institutions')

@section('page-title', 'Institution Management')

@section('content')

<div class="bg-white rounded-lg shadow p-6">

    <div class="flex justify-between mb-5">

        <h2 class="text-xl font-bold">

            Institutions

        </h2>

        <a href="{{ route('institutions.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded">

            + Add Institution

        </a>

    </div>

    <table class="w-full border">

        <thead class="bg-gray-100">

        <tr>

            <th class="border p-2">Code</th>

            <th class="border p-2">Institution</th>

            <th class="border p-2">Type</th>

            <th class="border p-2">City</th>

            <th class="border p-2">Status</th>

            <th class="border p-2">Action</th>

        </tr>

        </thead>

        <tbody>

        @forelse($institutions as $institution)

            <tr>

                <td class="border p-2">

                    {{ $institution->institution_code }}

                </td>

                <td class="border p-2">

                    {{ $institution->institution_name }}

                </td>

                <td class="border p-2">

                    {{ $institution->institution_type }}

                </td>

                <td class="border p-2">

                    {{ $institution->city }}

                </td>

                <td class="border p-2">

                    {{ $institution->status ? 'Active' : 'Inactive' }}

                </td>

                <td class="border p-2">

                    <a href="{{ route('institutions.edit',$institution) }}"
                       class="text-blue-600">
                        Edit
                    </a>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="6" class="text-center p-5">

                    No Institution Found

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

    <div class="mt-5">

        {{ $institutions->links() }}

    </div>

</div>

@endsection