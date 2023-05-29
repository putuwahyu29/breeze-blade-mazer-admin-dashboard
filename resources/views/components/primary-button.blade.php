<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-lg shadow-lg']) }}>
    {{ $slot }}
</button>
