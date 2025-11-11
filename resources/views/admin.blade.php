@extends('layout.mainLayout')
@section('title', 'Admin Dashboard')

@section('konten')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>

    <div class="mb-6 space-x-4">
        <a href="{{ route('product.showAllProduct') }}" class="btn btn-primary">Admin View for Product</a>
        <a href="{{ route('category.showAllCategory') }}" class="btn btn-primary">Admin View for Category</a>
        <a href="{{ route('rating.showAllRating') }}" class="btn btn-primary">Admin View for Rating</a>
    </div>

    <h2 class="text-xl font-semibold mb-2">All Users</h2>

    <table class="min-w-full border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">Name</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Status</th>
                <th class="py-2 px-4 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="text-center">
                <td class="py-2 px-4 border">{{ $user->id }}</td>
                <td class="py-2 px-4 border">{{ $user->name }}</td>
                <td class="py-2 px-4 border">{{ $user->email }}</td>
                <td class="py-2 px-4 border">{{ $user->status ?? 'user' }}</td>
                <td class="py-2 px-4 border">
                    <a href="{{ route('admin.editUser', $user->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.deleteUser', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-secondary" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
