<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0  bg-[url('https://images.unsplash.com/photo-1633432695542-b2c8e2b8a26c?auto=format&fit=crop&q=80&w=1932&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]">
    <div class="animate-slideInRight">
        {{ $logo }}
    </div>

    <div class="animate-slideInLeft w-full sm:max-w-md mt-6 px-6 py-4 backdrop-blur-md bg-white/30 overflow-hidden">
        {{ $slot }}
    </div>
</div>
