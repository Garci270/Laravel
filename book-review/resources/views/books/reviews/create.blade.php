@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2x1">Add Review for {{ $book->title }}</h1>

    <form action="{{ route('books.reviews.store', $book) }}" method="post">
        @csrf
        <label for="review">Review</label>
        <textarea name="review" id="review" cols="30" rows="10" required class="input mb-4"></textarea>

        <label for="rating">Rating</label>
        <select name="rating" id="rating" required class="input">
            <option value="">Select a Rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

        <button type="sumbit" class="btn mt-4">Add Review</button>
    </form>
@endsection