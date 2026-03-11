<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->

@props([
    'href', 'current' => false,
])

@php
    $classes = 'rounded-md px-3 py-2 text-sm font-medium ';
    if ($current) {
        $classes .= ' bg-gray-900 text-white';
        $ariaCurrent="page";
    }else{
        $classes .= ' text-gray-300 hover:bg-white/5 hover:text-white';
    }
@endphp

<a href="{{ $href }}"  {{ $attributes->merge(['class' => $classes]) }} aria-current="{{ $ariaCurrent ?? null }}">
    {{ $slot }}
</a>
