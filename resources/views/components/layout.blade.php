<x-html class="font-sans antialiased pb-16 text-gray-900" :title="isset($title) ? $title . ' - ' . config('app.name') : ''">
    <x-slot name="head">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        {{ $head ?? '' }}

        <script src="{{ mix('js/app.js') }}" defer></script>
    </x-slot>

    {{ $slot }}
</x-html>
