@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Our Causes</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($causes as $cause)
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-indigo-700">{{ $cause->title }}</h2>
                <p class="text-gray-600 mt-2">{{ Str::limit($cause->description, 100) }}</p>
                <div class="mt-4">
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-500 h-4 rounded-full" style="width: {{ min(100, ($cause->raised_amount / $cause->goal_amount) * 100) }}%"></div>
                    </div>
                    <p class="text-sm mt-1 text-gray-700">Raised: ₹{{ $cause->raised_amount }} / ₹{{ $cause->goal_amount }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
