<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-secondary btn-lg']) }}>
    {{ $slot }}
</button>
