<x-guest-layout>

    <script async src="https://js.stripe.com/v3/buy-button.js"></script>

    <div class="relative bg-seasalt pb-20 pt-16 lg:pb-28 lg:pt-32">

        <div class="px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="mt-2 text-4xl font-h2 font-bold tracking-tight text-gray-900 sm:text-6xl capitalize">
                    Notre Boutique
                </h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Parcourez notre collection exclusive pour trouver des jeux qui vont bien au-delà de l'ordinaire. Chaque création est le fruit d'une attention méticuleuse aux détails, et nous sommes fiers de vous offrir des expériences ludiques qui éveilleront l'imagination et apporteront une touche artistique à vos moments de divertissement. Bienvenue dans notre boutique, où chaque jeu raconte une histoire et incarne l'essence de l'artisanat ludique.
                </p>
            </div>
        </div>

        <div class="mx-auto px-8 mt-12 grid max-w-lg gap-8 lg:max-w-none lg:grid-cols-3">
            <div class="mx-auto">
                <stripe-buy-button buy-button-id="buy_btn_1OAUrtIed18vX4jppsywycKA" publishable-key="pk_live_51O3CRvIed18vX4jppwHVCcPPFbSekl3zTWY4mSsGC0R0hq6DovbjTn6FllyO4R4DN2PvEl32h3jSN9ltFhMRZWD900O3wlPQcb">
                </stripe-buy-button>
            </div>
            <div class="mx-auto">
                <stripe-buy-button buy-button-id="buy_btn_1OAUOcIed18vX4jpWB5UkZ3j" publishable-key="pk_live_51O3CRvIed18vX4jppwHVCcPPFbSekl3zTWY4mSsGC0R0hq6DovbjTn6FllyO4R4DN2PvEl32h3jSN9ltFhMRZWD900O3wlPQcb">
                </stripe-buy-button>
            </div>
            <div class="mx-auto">
                <stripe-buy-button buy-button-id="buy_btn_1O9UH4Ied18vX4jpHlcXG6qI" publishable-key="pk_live_51O3CRvIed18vX4jppwHVCcPPFbSekl3zTWY4mSsGC0R0hq6DovbjTn6FllyO4R4DN2PvEl32h3jSN9ltFhMRZWD900O3wlPQcb">
                </stripe-buy-button>
            </div>
        </div>

    </div>
</x-guest-layout>
