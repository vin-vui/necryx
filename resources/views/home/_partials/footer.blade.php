<footer>
    {{-- <div class="bg-cover bg-fixed pt-32 pb-16 sm:py-32" style="background-image: url({{ url('img/test2.png') }})">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8" data-aos="zoom-in" data-aos-duration="1000">
            <div class="relative isolate overflow-hidden backdrop-blur-sm bg-black/80 px-6 py-24 shadow-2xl sm:px-24 xl:py-32">
                <h2 class="mx-auto max-w-2xl text-center text-3xl font-bold font-p tracking-tight text-white sm:text-4xl">
                    Restez en contact avec <br> <span class="font-necryx">Necryx</span>
                </h2>
                <p class="mx-auto mt-2 max-w-xl text-center text-lg leading-5 text-gray-300">
                    Pour être au courant de nos dernières nouveautés, <br class="hidden sm:block"> faites le choix d'être informé !
                </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="mx-auto mt-10 flex flex-col max-w-md gap-4">
                    @csrf
                    <label for="email-address" class="sr-only">Adresse e-mail</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 text-center flex-auto border-0 bg-white px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6" placeholder="Entrez votre adresse e-mail">

                    <label for="rgpdCheckbox">
                        <input type="checkbox" id="rgpdCheckbox" name="rgpdConsent" required>
                        <span class="text-white text-xs">
                            J'accepte de recevoir la newsletter de <span class="font-necryx">Necryx</span> et je comprends que je peux me désabonner à tout moment.
                            Je confirme avoir lu et compris la <a class="underline" href="URL-de-votre-politique-de-confidentialité">Politique de Confidentialité</a> de <span class="font-necryx">Necryx</span>, qui explique comment mes données personnelles seront utilisées.
                        </span>
                    </label>

                    <button type="submit" class="hover:drop-shadow-[9px_9px_30px_#D0A302] bg-yellow-400 hover:bg-yellow-500 font-p justify-center transition-all text-xs uppercase tracking-widest inline-flex items-center gap-2 py-3 px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 48">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M26.755 39.535L6.31 26.307c-2.236-1.703-2.498-6.703-.239-8.915L19.87 8.464L43.5 23.755l-12.067 7.808a4.779 4.779 0 0 0-2.41 4.207c-.008 1.467.848 3.439 2.41 3.038L43.5 30.999l-5.325-3.445" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m19.87 8.464l1.351 13.43l22.279 1.86" />
                        </svg>
                        Je m'abonne à la newsletter
                    </button>
                </form>
                <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2" aria-hidden="true">
                    <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                    <defs>
                        <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(512 512) rotate(90) scale(512)">
                            <stop stop-color="#D0A302" />
                            <stop offset="1" stop-color="#0A0101" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div> --}}
    <div class="bg-seasalt">
        <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
            <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
                <div class="pb-6">
                    <a href="{{ route('home') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Accueil</a>
                </div>
                <div class="pb-6">
                    <a href="{{ route('collections', 2) }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Collection Jeux</a>
                </div>
                <div class="pb-6">
                    <a href="{{ route('collections', 3) }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Collection Concepts</a>
                </div>
                <div class="pb-6">
                    <a href="{{ route('collections', 1) }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Collection Arts</a>
                </div>
                {{-- <div class="pb-6">
                    <a href="{{ route('articles') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Nos Articles</a>
                </div> --}}
                <div class="pb-6">
                    <a href="{{ route('concepts') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Concepts & Conseils</a>
                </div>
                <div class="pb-6">
                    <a href="{{ route('informations') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Informations</a>
                </div>
                {{-- <div class="pb-6">
                    <a href="{{ route('shop') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Boutique</a>
                </div> --}}
                <div class="pb-6">
                    <a href="{{ route('policy') }}" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Mentions légales</a>
                </div>
            </nav>
            <div class="mt-10 flex justify-center space-x-10">
                <a href="https://www.facebook.com/profile.php?id=100092518977183" target="_blank" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/apocrypte/" target="_blank" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <p class="mt-10 text-center text-xs leading-5 text-gray-500">
                &copy; 2023 Necryx. Tous droits réservés.
            </p>
        </div>
    </div>

</footer>
