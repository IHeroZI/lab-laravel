@extends('layouts.main')

@section('content')

    <form class="flex flex-col items-center" action="{{ route('artists.store') }}" method="POST">
        @csrf
        <div class="text-center m-4">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="border border-gray-300 rounded-xl px-2 py-1">
        </div>
        <div>
            <button type="submit"
                class="text-black font-bold px-4 py-2 rounded-2xl border border-gray-800 hover:bg-green-600/80 hover:border-green-600 hover:text-white duration-300 ml-4">Create
                Artist</button>
        </div>

    </form>

@endsection