@auth
<a href="{{ route('dashboard') }}" class="bg-yellow-400 hover:bg-yellow-500 transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
    Dashboard
</a>
@else
<a href="{{ route('login') }}" class="py-2 px-4 text-sm font-semibold leading-6 font-p text-white hover:text-yellow-500 transition-all divide-purple-300">Se connecter</a>
<a href="{{ route('register') }}" class="hover:drop-shadow-[0px_0px_19px_#D0A302] bg-yellow-400 hover:bg-yellow-500 transition-all font-p text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M10 11V8l5 4l-5 4v-3H1v-2h9Zm-7.542 4h2.124A8.003 8.003 0 0 0 20 12A8 8 0 0 0 4.582 9H2.458C3.732 4.943 7.522 2 12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10c-4.478 0-8.268-2.943-9.542-7Z"/></svg>
    S'inscrire
</a>
@endauth
