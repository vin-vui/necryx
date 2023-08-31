@auth
<a href="{{ route('dashboard') }}" class="bg-yellow-400 hover:bg-yellow-500 transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
    Dashboard
</a>
@else
<a href="{{ route('login') }}" class="py-2 px-4 text-sm font-semibold leading-6 font-p text-white">Se connecter</a>
<a href="{{ route('register') }}" class="bg-yellow-400 hover:bg-yellow-500 transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
    S'inscrire
</a>
@endauth
