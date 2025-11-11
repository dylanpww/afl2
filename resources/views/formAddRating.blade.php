@extends('layout.mainLayout')
@section('title', 'Add Rating')

@section('konten')
<div class="container my-5">
    <h2 class="mb-4 text-center">Add Rating</h2>

    <form action="{{ route('rating.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Bintang berapa</label>
            <input type="number" name="star" class="form-control" placeholder="1-5" required min="1" max="5">
        </div>

        <div class="mb-3">
            <label class="form-label">Komentar</label>
            <input type="text" name="comment" class="form-control" placeholder="Tulis komentar..." required>
        </div>

        <button type="submit" class="btn text-white px-4" style="background-color: #36454F; border-radius: 8px;">
            Add Rating
        </button>
    </form>
</div>
@endsection
