<x-layout :title="$title">

        <article class="py-4 max-w-3xl border-b border-gray-200">
            <h1 class="mb-1 text-2xl font-bold tracking-tight ">{{ $post['title'] }}</h1>
            <div class="mb-4 text-sm text-gray-400">
                <a href="#"> {{ $post->author->name }} | 1 Januari 2023</a>
            </div>
            <p class="mb-4 leading-relaxed text-gray-500">
                {{ $post['body'] }}
            </p>

            <a href="/posts" class="text-blue-600 hover:underline">&laquo; Back to all posts</a>

        </article>

</x-layout>
