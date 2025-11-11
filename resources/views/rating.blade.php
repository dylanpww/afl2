@extends("layout.mainLayout")
@section("title", "Homepage | Categories")
@section('konten')

    <div class="container my-5">
        <h2 class="mb-4 text-center pb-10">All Rating</h2>

        @foreach ($ratings as $rating)
            <div class="mb-3 border-0 p-3">
                <div class="d-flex justify-content-between align-items-center col">

                    <div class="d-flex align-items-center row">
                        <h3>Anonymous</h3>
                        <div class="mb-2">
                            @for ($i = 0; $i < $rating->star; $i++)
                                ⭐
                            @endfor
                        </div>

                        <div>
                            <h5 class="mb-1 fw-semibold">{{ $rating->comment }}</h5>
                            
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <a href="{{ route('rating.edit', $rating->id) }}" class="btn btn-sm btn-warning text-white">Edit</a>

                        <form action="{{ route('rating.destroy', $rating->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr class="my-3">
        @endforeach

    </div>

@endsection