@extends('layouts.main')

@section('content')
    <div class="text-center max-w-xl mx-auto px-6 py-16">
        <h1 class="text-4xl mb-12 text-gray-900">{{ $product['name'] }}</h1>

        <div class="space-y-6 text-gray-600">
            <div>
                <span class="text-sm text-gray-400">Price</span>
                <p class="text-3xl text-gray-900">฿{{ number_format($product['price']) }}</p>
            </div>

            <div>
                <span class="text-sm text-gray-400">Description</span>
                <p>{{ $product['description'] }}</p>
            </div>

            <div>
                <span class="text-sm text-gray-400">ID</span>
                <p>{{ $product['id'] }}</p>
            </div>
        </div>
    </div>
@endsection