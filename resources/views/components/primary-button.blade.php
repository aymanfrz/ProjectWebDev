<button {{ $attributes->merge(['type' => 'submit', 'class' => 'ButtonInt']) }}>
    {{ $slot }}
</button>
