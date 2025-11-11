@extends('layout.mainLayout')
@section('title', 'Edit User')

@section('konten')
<div class="container my-5">
    <h2 class="mb-4 text-center">Edit User</h2>

    <form action="{{ route('admin.updateUser', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Role</label>
            <select name="status" class="form-select" required>
                <option value="member" {{ $user->status === 'member' ? 'selected' : '' }}>Member</option>
                <option value="admin" {{ $user->status === 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <button type="submit" class="btn text-white px-4" style="background-color: #36454F; border-radius: 8px;">
            Update User
        </button>
    </form>
</div>
@endsection
