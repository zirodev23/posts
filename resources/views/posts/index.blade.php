<x-app-layout>
    <h1>All posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', $post) }}">Show</a>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>