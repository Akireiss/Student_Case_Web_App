@extends('layouts.admin.index')

@section('content')

<section class="p-6 mx-auto bg-blueGray-50">
    <div class="w-full mx-auto mt-6">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-white mb-0 px-6 py-6 ">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold px-4">
                       Reports Information
                    </h6>
                    <x-button >
                        Edit
                    </x-button>
                </div>
            </div>
            <div class="flex-auto px-6 lg:px-10 py-10 pt-0 ">
                <form>
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold uppercase">
                        Personal Information
                    </h6>
                    <div class="flex flex-wrap">

                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               Name
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Grade
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>

                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                   Referred by
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>
                    </div>

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold uppercase">
                            Address
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Barangay
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>   </div>
                            </div>

                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      City
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>   </div>
                            </div>

                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                       Province
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>   </div>
                            </div>











                        </div>




                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">

                                <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Password
                                    requirements:</h2>

                            </div>
                        </div>

                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Gender
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>









{{--
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                 Attempts
                                </label>


                                <ol
                                    class="flex items-center w-full p-2 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-lg dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
                                    <li class="flex items-center text-blue-600 dark:text-blue-500">
                                        <span
                                            class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                                            1
                                        </span>
                                        <span class="hidden sm:inline-flex sm:ml-2">Info</span>
                                        <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                        </svg>
                                    </li>
                                    <li class="flex items-center">
                                        <span
                                            class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                            2
                                        </span>
                                         <span class="hidden sm:inline-flex sm:ml-2">Info</span>
                                        <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                        </svg>
                                    </li>
                                    <li class="flex items-center">
                                        <span
                                            class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                            3
                                        </span>

                                    </li>
                                </ol>




                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Date
                                </label>

                                <div class="relative w-full mb-3">

                                    <x-input type="date" class="w-full">
                                    </x-input>    </div>
                            </div>
                        </div>
                    </div> --}}


                    <hr class="mt-6 border-b-1 border-blueGray-300">

                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold ">
                       Disiclinary Information
                    </h6>
                    <div class="flex flex-wrap">

                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                   Reporter's Name
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>   </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Contact
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>      </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Other Info
                                </label>
                                <x-input type="date" class="w-full">
                                </x-input>    </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</section>
@endsection
