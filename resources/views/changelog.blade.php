<x-layout>
    <x-header/>

    <main class="space-y-20 py-20 sm:space-y-28 sm:py-28">
        <x-page-section>
            <h1 class="text-4xl sm:text-5xl font-bold leading-tight">
                Changelog
            </h1>
            <div class="mt-6 divide-y">
                @foreach ($posts as $post)
                    <article class="relative py-6">
                        <header>
                            <p class="text-sm text-gray-900 xl:-ml-44 xl:mt-1 xl:absolute uppercase font-bold tracking-wider">
                                {{ $post->published_at->format('F j, Y') }}
                            </p>
                            <h2 class="font-bold text-2xl mt-1 leading-tight">
                                {{ $post->title }}
                            </h2>
                        </header>
                        <div class="mt-6 leading-relaxed prose max-w-full">
                            {!! $post->html !!}
                        </div>
                    </article>
                @endforeach
            </div>
        </x-page-section>
    </main>
</x-layout>
