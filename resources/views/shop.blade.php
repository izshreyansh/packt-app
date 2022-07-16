@extends('layout')

@section('content')
<div id="content" class="site-content">
    <div id="primary" class="content-area column full">
        <main id="main" class="site-main">
            <div class="grid portfoliogrid">

                @forelse($books as $book)
                    @include('partials.book', ['book' => $book])
                @empty
                    <h4>No books found.</h4>
                @endforelse
            </div>
            <!-- .grid -->
            <br/>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
</div>
@endsection
