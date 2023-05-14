@extends('layouts.app')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">


                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Recent Reports
                    </h1>

                    <p class="mt-6 text-gray-500 leading-relaxed">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, sint tempore consectetur quia
                        laboriosam recusandae. Quasi eius distinctio sint reiciendis atque quo perspiciatis, nemo assumenda,
                        in deserunt totam dignissimos laboriosam?
                    </p>
                </div>

<div class="flex flex-wrap my-2 -mx-3 p-2">
    <!-- card 1 -->

    <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0  md:flex-none lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

        <div class="flex-auto p-6 px-0 pb-2">
          <div class="overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">



                <tr>
                    <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent
                     border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Name</th>
                    <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle
                    bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                    Behavior</th>
                    <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle
                    bg-transparent border-b letter border-b-solid text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Date</th>

                    <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid
                    text-xs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Reffered By:</th>

                    <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs
                whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
            Status</th>
            <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xs
            whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
        Manage</th>
  </tr>




              </thead>
              <tbody>
                <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                      <div class="flex px-3 py-1 p-2">
                        <span class="font-semibold leading-tight text-xs"> Reiss Aki</span>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <span class="font-semibold leading-tight text-xs">Grosss Misconduct</span>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <span class="font-semibold leading-tight text-xs"> Dec 12 2023</span>
                    </td>
                    <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                        <a href="javascript:;" class="font-semibold leading-tight text-xs text-slate-400"> Reiss </a>
                      </td>

                    <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                      <span class="font-semibold leading-tight text-xs">
                        <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-500 text-white">Active</span>
                      </span>
                    </td>

                    <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                        <a href="javascript:;" class="font-semibold leading-tight text-xs text-slate-400"> View</a>
                      </td>


                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>





                <div class="py-3 px-4 flex justify-end">
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


                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
