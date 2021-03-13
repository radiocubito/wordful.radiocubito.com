<x-layout>
    <div class="max-w-6xl mx-auto px-4 lg:px-6 lg:grid lg:grid-cols-12 lg:gap-10 min-h-screen">
        <nav class="border-r lg:col-span-3">
            <div class="mt-8">
                <h6 class="px-3 text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider">
                    Getting Started
                </h6>

                <div class="mt-4">
                    @foreach ($gettingStartedDocs as $gettingStartedDoc)
                        <a href="{{ route('docs.show', $gettingStartedDoc->slug) }}" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 focus:outline-none transition ease-in-out duration-150 text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100" aria-current="page">
                            <span class="truncate">
                                {{ $gettingStartedDoc->title }}
                            </span>
                        </a>
                    @endforeach

                    <!-- <a href="https://blade-ui-kit.test/docs/0.x/installation" class="mt-1 group flex items-center px-3 py-2 text-sm leading-5 border-r-2 border-purple-500 focus:outline-none transition ease-in-out duration-150 text-purple-900 bg-purple-50 focus:bg-gray-200" aria-current="page">
                        <span class="truncate">
                            Installation
                        </span>
                    </a> -->
                </div>
            </div>
        </nav>
        <div class="lg:col-span-7 px-3 lg:px-0 mt-8 lg:mt-10 lg:pb-24">
            <x-markdown anchors class="prose">{!! $doc->markdown !!}</x-markdown>
        </div>
        <div class="mt-20 lg:col-span-2">
            <h6 class="text-xs leading-4 font-semibold text-gray-500 uppercase tracking-wider">
                On this page
            </h6>

            <x-toc class="mt-1 toc">
                {!! $doc->markdown !!}
            </x-toc>
        </div>
    </div>
</x-layout>
