@props([
    'name',
    'type' => 'text'
])

<x-form.field>
    
    <x-form.label name="{{ $name }}"/>

    <input type="{{ $type }}"
        class="border border-gray-200 rounded p-2 w-full"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}" />

</x-form.field>