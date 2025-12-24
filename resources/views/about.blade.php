@extends('layouts.main')

@section('content')
    <div class="text-center max-w-xl mx-auto px-6 py-16">
        <h1 class="text-4xl mb-12 text-gray-900">{{ $companyName }}</h1>

        <div class="grid grid-cols-3 gap-8 text-gray-600">
            <div>
                <span class="text-md text-gray-400">Founded</span>
                <p class="text-2xl text-gray-900">{{ $foundedYear }}</p>
            </div>

            <div>
                <span class="text-md text-gray-400">Years</span>
                <p class="text-2xl text-gray-900">{{ $yearsInBusiness }}</p>
            </div>

            <div>
                <span class="text-md text-gray-400">Team</span>
                <p class="text-2xl text-gray-900">{{ $teamSize }}</p>
            </div>
        </div>
    </div>
@endsection