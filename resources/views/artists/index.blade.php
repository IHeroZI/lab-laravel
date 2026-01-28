@extends('layouts.main')


@section('content')
    <section class= "container mx-auto w-[80%] mt-10">
        <table class="table-auto w-full border-collapse border border-gray-400">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $artist->image_path }}</td>
                    <td>
                        <a href="{{ route('artists.show', $artist->id) }}">{{ $artist->name }}</a>
                </tr>
            @endforeach
        </tbody>
        </table>
    </section>

@endsection