
@extends('layouts.admin.index')

@section('content')


<div class="my-2 flex sm:flex-row flex-col py-2 px-6">

    <div class="px-6 md:px-10 py-4 md:py-2">
        <div class="flex items-center justify-between">
            <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-3xl font-bold leading-normal
             text-gray-800 dark:text-white">Students Profile</p>
            <div class="py-3 px-4 flex items-center text-sm font-medium leading-none cursor-pointer rounded">
<button class="bg-green-400 hover:bg-green-500 shadow-sm px-4 py-2">
    Add
</button>
            </div>
        </div>
    </div>


    <div class="flex flex-row mb-1 sm:mb-0 px-6 shadow-sm">
        <div class="relative">
            <select
                class="h-full rounded-l border block appearance-none w-full bg-white border-gray-400 rounded-sm text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option>5</option>
                <option>10</option>
                <option>20</option>
            </select>
            <div
                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                    <path d="M6 9l6 6 6-6"/>
                  </svg>

            </div>
        </div>
        <div class="relative">
            <select
                class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                <option>All</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>
            <div
                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                    <path d="M6 9l6 6 6-6"/>
                  </svg>
            </div>

    </div>
    <div class="block relative">
        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                <path
                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                </path>
            </svg>
        </span>
        <input placeholder="Search"
            class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-sm bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
    </div>
</div>



    <div class="overflow-x-auto px-6">
        <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Last Name</th>
                                <th class="py-3 px-6 text-left">First Name</th>

                                <th class="py-3 px-6 text-center">Age</th>
                                <th class="py-3 px-6 text-center">Address</th>
                                <th class="py-3 px-6 text-center">Contact Number</th>
                                <th class="py-3 px-6 text-center">Manage</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">

                                        </div>
                                        <span class="font-medium">Bullying</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center">
                                  Bullying
                                </td>
                                <td class="py-3 px-6 text-center">
                                    Active
                                </td>
                                <td class="py-3 px-6 text-center">
                                    Butubut
                                </td>

                                <td class="py-3 px-6 text-center">
                                    09321321313
                                  </td>



                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">

                                            <a href="{{ url('case/view') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg></a>
                                        </div>
                                        <a href="">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </div>


                <div class="py-1 px-4 flex justify-end">
                    <nav class="flex items-center space-x-2">
                      <a class="text-gray-400 hover:text-blue-600 p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="w-10 h-10 bg-green-500 text-white p-4 inline-flex items-center text-sm font-medium rounded-full" href="#" aria-current="page">1</a>
                      <a class="w-10 h-10 text-gray-400 hover:text-blue-600 p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">2</a>
                      <a class="w-10 h-10 text-gray-400 hover:text-blue-600 p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">3</a>
                      <a class="text-gray-400 hover:text-blue-600 p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                        <span class="sr-only">Next</span>
                        <span aria-hidden="true">»</span>
                      </a>
                    </nav>
                  </div>
            </div>
        </div>
      </div>

@endsection
