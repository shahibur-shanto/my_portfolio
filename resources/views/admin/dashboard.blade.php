@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Stats Cards -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium text-gray-900">Total Projects</h3>
            <p class="mt-2 text-3xl font-bold">25</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium text-gray-900">Menu Items</h3>
            <p class="mt-2 text-3xl font-bold">8</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-medium text-gray-900">Messages</h3>
            <p class="mt-2 text-3xl font-bold">12</p>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="mt-8 bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Recent Activity</h3>
        <ul class="divide-y divide-gray-200">
            <li class="py-4">Project "Portfolio Redesign" updated</li>
            <li class="py-4">New menu item "Contact" added</li>
            <li class="py-4">User "John Doe" logged in</li>
        </ul>
    </div>
@endsection
