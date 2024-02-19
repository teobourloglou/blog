@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}"/>
    
    <textarea type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="{{ $name }}"
        id="{{ $name }}"
        required
        {{ $attributes }}
    >{{ $slot ?? old($name) }}</textarea>
    
    <x-form.error name="{{ $name }}" />

</x-form.field>