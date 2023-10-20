<button {{ $attributes->merge(['type' => 'submit', 'class' => 'hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4']) }}>
    {{ $slot }}
</button>
