@props(['options'])

<div x-data="{ open: false }" class="relative">
    <button @click.prevent="open = !open"
        class="py-2 pl-3 pr-10 text-left w-full bg-white rounded-md shadow-md text-gray-700 font-medium hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 focus:ring-opacity-50">
        <span class="block truncate">{{ $slot }}</span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 011.414 0L10 11.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </span>
    </button>

    <div x-show="open" @click.away="open = false" class="absolute z-50 mt-3 w-full rounded-md bg-white shadow-lg">
        <ul class="py-1">
            @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}">{{ $optionLabel }}</option>
        @endforeach


        </ul>
    </div>
</div>
