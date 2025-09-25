<button type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition',
    ]) }}>
    {{ $slot }}
</button>
