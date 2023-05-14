
<section class="p-6 mx-auto bg-blueGray-50">
    <div class="p-2 lg:p-2 ">


        <h1 class="mt-8 text-2xl font-medium text-gray-900">
            Please Fill Up The Form
        </h1>

        <p class="mt-6 text-gray-500 leading-relaxed">
            Please provide the following information for the student being referred:
        </p>
    </div>
    <div class="w-full mx-auto mt-6">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-white mb-0 px-6 py-6 ">

            </div>
            <div class="flex-auto px-6 lg:px-10 py-10 pt-0 ">
                <form>
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold uppercase">
                        Personal Information
                    </h6>
                    <div class="flex flex-wrap">

                        <div class="w-full lg:w-4/12 px-4">






                            <label for="input" class="text-gray-700 font-bold mb-2">Student Name:</label>
                            <livewire:user.report />
                            <p class="text-xs text-gray-400 ">Please choose students name to report</p>





                        </div>



                        <div class="w-full lg:w-4/12 px-4">

                            <div x-data="{ open: false, selected: '' }" class="relative">
    <label for="input" class="text-gray-700 font-bold mb-2">Grade</label>
    <div class="relative">
      <button x-on:click="open = !open; $event.preventDefault()"
        href="#"
        class="w-full py-2 pl-3 pr-10 text-left bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
        <span x-text="selected ? selected : 'Select an option'" class="block truncate text-black"></span>
      </button>
      <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
        <svg class="w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.92893 9.00005L10 12.0711L13.0711 9.00005L14.4853 10.4143L10 14.8996L5.51471 10.4143L6.92893 9.00005Z" fill="currentColor"></path>
        </svg>
      </div>
    </div>
    <div x-show="open" x-on:click.away="open = false" class="absolute z-50 w-full mt-2 bg-white rounded-md shadow-lg">
      <ul class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-au text-black to focus:outline-none sm:text-sm sm:leading-5">
        <li x-on:click="selected = 'Bullying'; open = false;" class="cursor-pointer text-black select-none relative py-2 pl-3 pr-9 hover:bg-gray-100 text-black">
          <span x-text="selected !== '' ? selected : 'Select an option'" class="block truncate text-black"></span>
          Grade 7
        </li>
        <li x-on:click="selected = 'Harassment'; open = false;" class="cursor-pointer text-black select-none relative py-2 pl-3 pr-9 hover:bg-gray-100 text-black">
          Grade 8
        </li>
        <li x-on:click="selected = 'Cutting Classes'; open = false;" class="cursor-pointer text-black select-none relative py-2 pl-3 pr-9 hover:bg-gray-100 text-black">
          <span x-text="selected === 'Option 3' ? '✓' : ''" class="absolute inset-y-0 left-0 flex items-center pl-3 text-blue-600"></span>
          Grade 9
        </li>
      </ul>
    </div>
    <p class="text-xs text-gray-400 mt-1">Student Grade</p>
  </div>


                          </div>



                        <div class="w-full lg:w-4/12 px-4">

                            <label for="input" class="text-gray-700 font-bold mb-1">Reffered by:</label>
                            <livewire:user.report />
                            <p class="text-xs text-gray-400">Please choose your name</p>

                        </div>

                    </div>










                    <h6 class="text-blueGray-400 text-sm mt-5 mb-2 px-4 font-bold uppercase">
                       Anecdotal Record
                    </h6>
                    <div class="flex flex-wrap">

                        <div class="w-full lg:w-1/2 px-4">
                            <div class="relative w-full mb-3">
                                <label for="input" class="
                                text-gray-700 font-bold mb-2">Grave Offense</label>
                                <select type="text" class="w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                    <option value="">Select Option</option>
                                    <option value="">Gross Misconduct</option>
                                <option value="">Cheating And Stealing</option>
                                <option value="">Assaulting</option>
                                <option value="">None</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 px-4">
                            <div class="relative w-full mb-3">
                                <label for="input" class="
                                text-gray-700 font-bold mb-2">Minor Offense</label>
                                <select type="text" class="w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                    <option value="">Select Option</option>
                                    <option value="">Cutting Classes</option>
                                <option value="">Failure to wear prescribed uniform</option>
                                <option value="">Using profane language</option>
                                <option value="">None</option>
                                </select>
                            </div>
                        </div>



                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label for="input" class="text-gray-700 font-bold mb-2">Oberservation</label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label for="input" class="text-gray-700 font-bold mb-2">Desired Behavior</label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>


                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label for="input" class="text-gray-700 font-bold mb-2">Outcome</label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>



                    </div>

















                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold uppercase">
                            Interventions Tried
                        </h6>
                        <div class="flex flex-wrap">

                             <div class="w-full lg:w-4/12 px-2">
                                 <div class="relative w-full mb-3">

                                     <div class="flex">
                                         <div class="flex items-center h-5">
                                             <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                 type="checkbox" value=""
                                                 class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                         </div>
                                         <div class="ml-2 text-sm">
                                             <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                                Teacher-student conference
                                             </label>

                                         </div>
                                     </div>
                                 </div>
                             </div>


                             <div class="w-full lg:w-4/12 px-2">
                                <div class="relative w-full mb-3">

                                    <div class="flex">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                                Behavioral support
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-4/12 px-2">
                                <div class="relative w-full mb-3">

                                    <div class="flex">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                            Notify Parent
                                            </label>

                                        </div>
                                    </div>

                                </div>

                                </div>





                             <div class="w-full lg:w-4/12 px-2">
                                <div class="relative w-full mb-3">

                                    <div class="flex">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                               Written Explanation
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-4/12 px-2">
                                <div class="relative w-full mb-3">

                                    <div class="flex">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                                Document Action Taken
                                            </label>

                                        </div>
                                    </div>

                                </div>

                                </div>


                        </div>









<div class="flex justify-end mt-6">
  <x-button>Submit</x-button>
</div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
