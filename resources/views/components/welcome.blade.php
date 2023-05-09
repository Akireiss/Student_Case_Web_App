<div class="p-6 lg:p-8 bg-white border-b border-gray-200">


    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Please Fill Up The Form
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, sint tempore consectetur quia
        laboriosam recusandae. Quasi eius distinctio sint reiciendis atque quo perspiciatis, nemo assumenda,
        in deserunt totam dignissimos laboriosam?
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        {{-- <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 stroke-gray-400">
                <path d="M12 2.5c2.4 0 4.35 1.95 4.35 4.35S14.4 11.2 12 11.2 7.65 9.25 7.65 6.85 9.6 2.5 12 2.5zM6.5 19.5h11c0-3.75-3-6.75-6.5-6.75s-6.5 3-6.5 6.75z"/>
              </svg>


            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="#">Student Name</a>
            </h2>
        </div> --}}

 <livewire:user.report/>

    </div>

    <div>
        {{-- <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 stroke-gray-400">
                <path d="M6 4v16a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4" />
                <path d="M6 4c0-.6.4-1 1-1h8c.6 0 1 .4 1 1v16" />
              </svg>

            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://laracasts.com">Violation</a>
            </h2>
        </div> --}}




        <div x-data="{ open: false, selected: '' }" class="relative">
            <label for="input" class="text-gray-700 font-bold mb-2">Enter the violation:</label>
            <div class="relative">
              <button x-on:click="open = !open" class="w-full py-2 pl-3 pr-10 text-left bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                <span x-text="selected ? selected : 'Select an option'" class="block truncate text-black"></span>
              </button>
              <div class="absolute inset-y-0 right-0 f  lex items-center px-2 pointer-events-none">
                <svg class="w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.92893 9.00005L10 12.0711L13.0711 9.00005L14.4853 10.4143L10 14.8996L5.51471 10.4143L6.92893 9.00005Z" fill="currentColor"></path>
                </svg>
              </div>
            </div>
            <div x-show="open" x-on:click.away="open = false" class="absolute z-50 w-full mt-2 bg-white rounded-md shadow-lg">
              <ul class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-au text-black to focus:outline-none sm:text-sm sm:leading-5">
                <li x-on:click="selected = 'Option 1'; open = false;" class="cursor-pointer text-black select-none relative py-2 pl-3 pr-9 hover:bg-gray-100 text-black">
                    <span x-text="selected === 'Option 1' ? '✓' : ''" class="absolute inset-y-0 left-0 flex items-center pl-3 text-blue-600"></span>
                    Bullying
                  </li>
                  <li x-on:click="selected = 'Option 2'; open = false;" class="cursor-pointer text-black select-none relative py-2 pl-3 pr-9 hover:bg-gray-100 text-black">

                    Harassment
                  </li>
                  <li x-on:click="selected = 'Option 3'; open = false;" class="cursor-pointer text-black select-none relative py-2 pl-3 pr-9 hover:bg-gray-100 text-black">
                    <span x-text="selected === 'Option 3' ? '✓' : ''" class="absolute inset-y-0 left-0 flex items-center pl-3 text-blue-600"></span>
                    Cutting Classes
                  </li>


              </ul>
            </div>
            <p class="text-xs text-gray-400 mt-1">Please choose the type of violation</p>
          </div>

        </div>








    <div>
        {{-- <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2c2.761 0 5 2.239 5 5.001 0 2.761-2.239 5-5 5-2.761 0-5-2.239-5-5.001C7 4.239 9.239 2 12 2zm0 7a2 2 0 110-4 2 2 0 010 4z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21h-6a2 2 0 01-2-2v-3a3 3 0 013-3h2a3 3 0 013 3v3a2 2 0 01-2 2zM5 21h6a2 2 0 002-2v-3a3 3 0 00-3-3H7a3 3 0 00-3 3v3a2 2 0 002 2z" />
              </svg>

            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://tailwindcss.com/">Name</a>
            </h2>
        </div> --}}


        <div x-data="{ name: '' }">
            <label for="input" class="text-gray-700 font-bold mb-2">Enter your name</label>
            <div class="relative">
              <input type="text" id="input" name="input" x-model="name"
                class="w-full border-2 border-gray-200 text-black rounded-lg py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500 transition-colors duration-300">
              <button type="button" @click="name = ''" class="absolute right-0 bottom-2 h-full px-3 text-black hover:text-gray-600">
                <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path fill-rule="evenodd"
                    d="M6.293 6.707a1 1 0 0 1 1.414 0L10 9.586l2.293-2.293a1 1 0 1 1 1.414 1.414L11.414 11l2.293 2.293a1 1 0 0 1-1.414 1.414L10 12.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 11 6.293 8.707a1 1 0 0 1 0-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
              </button>
            </div>
            <p class="text-xs text-gray-400 mt-1">Please enter your full name.</p>
          </div>



    </div>

    <div>
        {{-- <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                <path d="M17.25 3.75h-10.5a2.25 2.25 0 00-2.25 2.25v12.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25v-12.5a2.25 2.25 0 00-2.25-2.25z"/>
                <path d="M12 20.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3z"/>
              </svg>

            <h2 class="ml-3 text-xl font-semibold text-gray-900">
               Contact
            </h2>
        </div> --}}

        <div x-data="{ name: '' }">
            <label for="input" class="text-gray-700 font-bold mb-2">Enter your contact info:</label>
            <div class="relative">
              <input type="text" id="input" name="input" x-model="name"
                class="w-full border-2 border-gray-200 text-black rounded-lg py-2 px-4 mb-3 leading-tight focus:outline-none focus:border-blue-500 transition-colors duration-300">
              <button type="button" @click="name = ''" class="absolute right-0 bottom-2 h-full px-3 text-black hover:text-gray-600">
                <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path fill-rule="evenodd"
                    d="M6.293 6.707a1 1 0 0 1 1.414 0L10 9.586l2.293-2.293a1 1 0 1 1 1.414 1.414L11.414 11l2.293 2.293a1 1 0 0 1-1.414 1.414L10 12.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 11 6.293 8.707a1 1 0 0 1 0-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
              </button>
            </div>
            <p class="text-xs text-gray-400 mt-1">Please enter your contact info.</p>
          </div>


<div class="px-6 pb-6">
    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-200 ease-in-out float-right mb-5">
    Submit
  </button>

</div>
    </div>
</div>























