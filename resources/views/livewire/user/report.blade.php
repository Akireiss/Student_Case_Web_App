<div>
        <div x-data="{ open: false, selected: '' }" class="relative">
        <div class="relative">
            <input x-on:click="open = true" x-model="selected" wire:model="search" type="text" name="input" id="input"
            class="w-full border-2 border-gray-200 text-black rounded-lg py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500 transition-colors duration-300"
             placeholder="Type to search...">

            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none my-auto mb-3">
                <svg class="w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.92893 9.00005L10 12.0711L13.0711 9.00005L14.4853 10.4143L10 14.8996L5.51471 10.4143L6.92893 9.00005Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <div x-show="open" x-on:click.away="open = false" class="absolute z-50 w-full mt-2 bg-white rounded-md shadow-lg max-h-60 overflow-y-auto">
            @if(!empty($violations))
            <ul class="rounded-md py-1 text-base leading-6 shadow-xs overflow-au text-black to focus:outline-none sm:text-sm sm:leading-5">
                @foreach($violations as $violation)

                <li x-on:click="selected = '{{ $violation->name }}'; open = false;" class="cursor-pointer text-black select-none relative py-2 pl-3 pr-9 {{ $selectedViolation == $violation->name ? 'bg-blue-100' : 'hover:bg-gray-100' }}">
                    <span x-text="selected === '{{ $violation->name }}' ? '✓' : ''" class="absolute inset-y-0 left-0 flex items-center pl-3 text-blue-600"></span>
                    {{ $violation->name }}
                </li>
                @endforeach
            </ul>
            @push('scripts')
                <script>
                const dropdown = document.querySelector('.max-h-60');
                const selected = dropdown.querySelector(`li[aria-selected="true"]`);
                if (selected) {
                    dropdown.insertBefore(selected, dropdown.firstChild);
                }
            </script>
            @endpush

            @else
            <div class="p-3">No results found.</div>
            @endif
        </div>

    </div>



</div>
