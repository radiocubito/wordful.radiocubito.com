@props([
    'features' => [
        [
            'Real-time collaboration',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula condimentum velit, quis mattis ligula posuere tempus.',
            'Styling',
            '#'
        ],
        [
            'Collaborative',
            'Integer pulvinar egestas nibh, ac consectetur ex molestie sit amet. Nullam mollis leo mi, egestas euismod nunc blandit ullamcorper.',
            'Collaborative editing',
            '#'
        ],
        [
            'Framework-agnostic',
            'Donec nec ullamcorper est, ut dignissim justo. Integer suscipit lacinia posuere. Duis facilisis venenatis efficitur.',
            'Installation',
            '#'
        ],
        [
            'Community',
            'Aenean sit amet pharetra felis, id rhoncus velit. Nam ornare diam ac nunc molestie, eget fringilla dui iaculis.',
            'Github',
            '#'
        ],
        [
            'TypeScript',
            'Cras elementum maximus quam, sit amet congue tortor eleifend tristique. Quisque consectetur mattis nunc ut sollicitudin. Etiam a aliquam quam, et aliquam lorem.',
            'TypeScript',
            '#'
        ],
    ],
])

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach ($features as list($name, $description, $ctaLabel, $ctaLink))
        <div class="bg-gray-100 p-6 rounded-lg">
            <h3 class="text-2xl font-bold leading-tight">{{ $name }}</h3>
            <p class="mt-5 leading-relaxed">{{ $description }}</p>
            <div class="mt-5 -mb-2">
                <x-button href="{{ $ctaLink }}" color="transparent" class="group">
                    {{ $ctaLabel }} <x-icon.right-arrow class="ml-2 h-5 text-gray-400 group-hover:text-gray-900" />
                </x-button>
            </div>
        </div>
    @endforeach
</div>
