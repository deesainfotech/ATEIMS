@extends('layouts.app')

@section('title', 'Add Institution')

@section('page-title', 'Add Institution')

@section('content')

<div class="bg-white rounded-lg shadow p-6">

    <form action="{{ route('institutions.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        @include('institutions.form')

        <div class="mt-6">

            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">

                Save Institution

            </button>

            <a href="{{ route('institutions.index') }}"
               class="ml-3 bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded">

                Cancel

            </a>

        </div>

    </form>

</div>

@endsection