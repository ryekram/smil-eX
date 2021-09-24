<button {{ $attributes->merge(['type' => 'submit', 'class' => 'font-semibold text-xs uppercase button__base button__smile']) }}>
    {{ $slot }}
</button>
