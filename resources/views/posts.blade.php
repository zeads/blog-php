<x-layout :title="$title">
    @foreach ($posts as $post )
        <article class="py-4 max-w-3xl border-b border-gray-200">
            <h1 class="mb-1 text-2xl font-bold tracking-tight ">{{ $post['title'] }}</h1>
            <div class="mb-4 text-sm text-gray-400">
                <a href="/authors/{{ $post->author->id }}" class="hover:underline"> {{ $post->author->name }}</a> | 1 Januari 2023
            </div>
            <p class="mb-4 leading-relaxed text-gray-500">
                {{ Str::limit($post['body'],100) }}
            </p>
            {{-- <a href="/posts/{{ $post['id'] }}" class="text-blue-600 hover:underline">Read more &raquo;</a> --}}
            <a href="/posts/{{ $post['slug'] }}" class="text-blue-600 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
