@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Departments</h1>

        <a href="{{ route('departments.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Add Department
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" class="mb-4">
        <input
            type="text"
            name="search"
            value="{{ $search }}"
            placeholder="Search by code or name..."
            class="border rounded px-3 py-2 w-80"
        >

        <button class="bg-gray-700 text-white px-4 py-2 rounded">
            Search
        </button>
    </form>

    <table class="min-w-full border border-gray-300">
        <thead class="bg-gray-100">
        <tr>
            <th class="border p-2">Code</th>
            <th class="border p-2">Department</th>
            <th class="border p-2">Institution</th>
            <th class="border p-2">HOD</th>
            <th class="border p-2">Status</th>
            <th class="border p-2">Actions</th>
        </tr>
        </thead>

        <tbody>

        @forelse($departments as $department)

            <tr>

                <td class="border p-2">
                    {{ $department->department_code }}
                </td>

                <td class="border p-2">
                    {{ $department->department_name }}
                </td>

                <td class="border p-2">
                    {{ $department->institution->institution_name ?? '-' }}
                </td>

                <td class="border p-2">
                    {{ $department->hod }}
                </td>

                <td class="border p-2">
                    @if($department->status)
                        Active
                    @else
                        Inactive
                    @endif
                </td>

                <td class="border p-2">

                    <a href="{{ route('departments.show',$department) }}"
                       class="text-blue-600">
                        View
                    </a>

                    |

                    <a href="{{ route('departments.edit',$department) }}"
                       class="text-green-600">
                        Edit
                    </a>

                    |

                    <form
                        action="{{ route('departments.destroy',$department) }}"
                        method="POST"
                        class="inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Delete this department?')"
                            class="text-red-600">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="6" class="text-center p-4">
                    No departments found.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

    <div class="mt-4">
        {{ $departments->links() }}
    </div>

</div>

@endsection