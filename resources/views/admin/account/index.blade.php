
@extends('layouts.admin.index')

@section('content')

<div class="p-12  ">
    <div class="max-w ">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg rounded-lg bg-blueGray-100 border-0 shadow-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 ">


                <form method="POST" action="{{ route('user-profile-information.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-wrap mt-4">

                        <div class="w-full lg:w-1/2 px-4">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', auth()->user()->name)" required autofocus autocomplete="name" />
                    </div>



                  <div class="w-full lg:w-1/2 px-4 ">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', auth()->user()->email)" required />
                    </div>

                    </div>



                    <div class="flex flex-wrap mt-4">

                        <div class="w-full lg:w-1/2 px-4">
                        <x-label for="email" value="{{ __('Password') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="password" name="passsword" :value="old('email', auth()->user()->email)" required />
                    </div>


                    <div class="w-full lg:w-1/2 px-4">
                        <x-label for="email" value="{{ __('Repeat Password') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="password" name="password" :value="old('email', auth()->user()->email)" required />
                    </div>

                    </div>



                    <div class="flex flex-wrap mt-4">
                        <div class="w-full lg:w-1/2 px-4" x-data="{ showAdviserType: false }">

                        <x-label for="user_type" value="{{ __('User Type') }}" />
                        <select id="user_type" name="user_type" class="block w-full mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-2" x-on:change="showAdviserType = (event.target.value === 'adviser')">
                            <option value="user">User</option>
                            <option value="adviser">Adviser</option>
                            <option value="admin">Admin</option>
                        </select>

                        <div x-show="showAdviserType">

                            <x-label for="adviser_type" value="{{ __('Advisers') }}" />
                            <select id="adviser_type" name="adviser_type" class="block w-full mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-2">
                                <option value="tax">Select User Type</option>
                                <option value="tax">Reiss</option>
                                <option value="investment">Shizu</option>
                                <option value="legal">Kira</option>
                            </select>
                        </div>

                         </div>



                    <div class="class w-full lg:w-1/2 px-4" x-data="{ showAdviserType: false }">
                        <x-label for="user_type" value="{{ __('Status') }}" />
                        <select id="user_type" name="user_type" class="block w-full mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-2" x-on:change="showAdviserType = (event.target.value === 'adviser')">
                            <option value="user">Select Status</option>
                            <option value="adviser">Active</option>
                            <option value="admin">Inactive</option>
                        </select>


                    </div>
                        </div>


                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            {{ __('Save') }}
                        </x-button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
