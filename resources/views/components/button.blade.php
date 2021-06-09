@props(['href' => null, 'color' => 'primary'])

@php
$hyperscript = $href ? 'a' : 'button';

switch ($color) {
    case 'transparent':
        $colorClasses = 'border-transparent text-gray-900 bg-transparent';
        $paddingClasses = 'py-3';
        break;
    case 'secondary':
        $colorClasses = 'border-gray-900 text-gray-900 bg-white hover:bg-yellow-200';
        $paddingClasses = 'py-3 px-6';
        break;
    case 'primary':
    default:
        $colorClasses = 'border-transparent text-white bg-gray-900 hover:text-yellow-200';
        $paddingClasses = 'py-3 px-6';
        break;
}
@endphp

<{{ $hyperscript }} {{ $attributes->merge(['type' => $href ? null : 'submit', 'href' => $href, 'class' => "inline-flex items-center border-2 text-base font-bold rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition $paddingClasses $colorClasses"]) }}>
    {{ $slot }}
</{{ $hyperscript }}>
