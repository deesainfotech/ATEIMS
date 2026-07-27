@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto">

    <h1 class="text-2xl font-bold mb-6">
        Edit Department
    </h1>

    <form action="{{ route('departments.update',$department) }}" method="POST">

        @csrf
        @method('PUT')

        @include('departments.form')

    </form>

</div>

@endsection