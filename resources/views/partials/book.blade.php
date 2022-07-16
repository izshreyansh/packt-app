<article class="hentry">
    <header class="entry-header">
        <div class="entry-thumbnail">
            <a href="{{ route('show', $book['id']) }}">
                <img src="{{$book['details']['images']['cover']}}?token={{config('app.token')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="{{ $book['details']['title'] }}" />
            </a>
        </div>
        <h2 class="entry-title">
            <a href="#">
                {{ $book['title'] }}
            </a>
        </h2>

        @if(isset($book['price']['prices']['print']['INR']) ||  isset($book['price']['prices']['ebook']['INR']))
        <h3>₹{{ $book['price']['prices']['print']['INR'] ?? $book['price']['prices']['ebook']['INR'] }}</h3>
        @endif

        @foreach($book['categories'] as $category)
            <a class="portfoliotype">{{ $category }}</a>
        @endforeach
    </header>
</article>
