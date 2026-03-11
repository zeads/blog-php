<x-layout :title="$title">
    @foreach ($posts as $post )
        <article class="py-1 max-w-3xl border-b border-gray-200">
            <h1 class="mb-1 text-2xl tracking-tight ">{{ $post['title'] }}</h1>
            <div class="mb-4 text-sm text-gray-400">
                <a href="#"> {{ $post['author'] }} | 1 Januari 2023</a>
            </div>
            <p class="mb-4 leading-relaxed text-gray-500">
                {{ Str::limit($post['body'],100) }}
            </p>
        </article>
    @endforeach
</x-layout>
