@extends('layout.mainLayout')
@section('title', 'Edit Rating')

@section('konten')
<div class="container my-5">
    <h2 class="mb-4 text-center">Edit Rating</h2>

    <form action="{{ route('rating.update', $rating->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Bintang berapa</label>
            <input type="number" name="star" class="form-control" value="{{ $rating->star }}" required min="1" max="5">
        </div>

        <div class="mb-3">
            <label class="form-label">Komentar</label>
            <input type="text" name="comment" class="form-control" value="{{ $rating->comment }}" required>
        </div>

        <button type="submit" class="btn text-white px-4" style="background-color: #36454F; border-radius: 8px;">
            Update Rating
        </button>
    </form>
</div>
@endsection
