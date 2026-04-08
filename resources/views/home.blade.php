@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold">Welcome</h1>

    <button onclick="addFakeNotification()"
            class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
        Add Fake Notification
    </button>
@endsection