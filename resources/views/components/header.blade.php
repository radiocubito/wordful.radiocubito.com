@props([
    'links' => [
        ['Changelog', route('changelog.index'), 'icon.changelog', request()->routeIs('changelog.*')],
        ['Documentation', route('docs.index'), 'icon.doc', request()->routeIs('docs.*')],
        ['Github', 'https://github.com/radiocubito/laravel-wordful', 'icon.github', false],
    ]
])

<header class="relative bg-white" x-data="{ open: false }">
    <div class="flex justify-between items-center px-6 py-6 sm:px-8 md:justify-start md:space-x-10" style="height: 4.5rem;">
        <div>
            <a href="/" class="flex">
                <span class="sr-only">Wordful</span>
                <x-logo class="h-7 text-gray-900"/>
            </a>
        </div>
        <div class="-mr-2 -my-2 md:hidden">
            <button @click="open = ! open" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="hidden md:flex-1 md:flex md:items-center md:justify-end">
            <div class="flex items-center md:ml-12 space-x-2">
                @foreach ($links as list($title, $link, $icon, $active))
                    <a
                        href="{{ $link }}"
                        class="{{ $active ? 'bg-gray-100' : 'hover:bg-gray-100' }} inline-flex items-center justify-center px-2 py-1 border border-transparent rounded-lg text-base font-medium text-gray-900 transition"
                    >
                        <x-dynamic-component :component="$icon" class="mr-2 h-5" />
                        {{ $title }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @foreach ($links as list($title, $link, $icon, $active))
                <a
                    href="{{ $link }}"
                    class="flex items-center border-transparent text-gray-900 block pl-6 pr-4 py-2 font-medium"
                >
                    <x-dynamic-component :component="$icon" class="mr-2 h-5" />
                    {{ $title }}
                </a>
            @endforeach
        </div>
    </div>
</header>
