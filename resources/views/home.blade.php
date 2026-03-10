<x-layout :title="$title">
        <p>Welcome to my home page.</p>
        <div class="flex gap-2">
            @for ($i=1; $i<=10; $i++)
                <div class="w-8 h-8 bg-teal-500 text-white text-xs p-0 me-1 grid place-items-center">{{ $i }}</div>
            @endfor
        </div>
</x-layout>
