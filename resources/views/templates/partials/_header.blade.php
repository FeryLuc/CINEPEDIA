<header class="w-full p-4 grid grid-cols-2 bg-gray-500">
    <div class="text-xl"><a href="{{route('pages.home')}}"><span class="text-amber-800">Ciné</span><span class="text-red-600 font-bold">Pedia</span></a></div>
    <nav class="justify-self-end pr-16">
        <ul class="flex gap-6 text-gray-200">
            <li class="relative group/films">
                <a href="">Films</a>
                <div
                    class="absolute left-0 hidden
                            group-hover/films:block
                            group-focus-within/films:block
                            bg-white text-gray-800 shadow-lg rounded z-50">
                    <a href="{{route('movies.popular')}}" class="block px-4 py-2 hover:bg-gray-100">
                    Populaires
                    </a>
                    <a href="{{route('movies.actual')}}" class="block px-4 py-2 hover:bg-gray-100">
                    Du moment
                    </a>
                    <a href="{{route('movies.upcoming')}}" class="block px-4 py-2 hover:bg-gray-100">
                    A venir
                    </a>
                    <a href="{{route('movies.toprated')}}" class="block px-4 py-2 hover:bg-gray-100">
                    Les mieux notés
                    </a>
                </div>
            </li>
            <li class="relative group/series">
                <a href="">Séries</a>
                <div
                    class="absolute left-0 hidden
                            group-hover/series:block
                            group-focus-within/series:block
                            bg-white text-gray-800 shadow-lg rounded">
                    <a href="" class="block px-4 py-2 hover:bg-gray-100">
                        Populaires
                    </a>
                    <a href="" class="block px-4 py-2 hover:bg-gray-100">
                        En diffusion
                    </a>
                    <a href="" class="block px-4 py-2 hover:bg-gray-100">
                        Les mieux notées
                    </a>
                </div>
            </li>
            <li class="relative group/actors">
                <a href="">Acteurs</a>
                <div
                    class="absolute left-0 hidden
                            group-hover/actors:block
                            group-focus-within/actors:block
                            bg-white text-gray-800 shadow-lg rounded">
                    <a href="" class="block px-4 py-2 hover:bg-gray-100">
                        Populaires
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</header>