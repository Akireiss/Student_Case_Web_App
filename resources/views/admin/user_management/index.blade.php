@extends('layouts.admin.index')

@section('content')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif




            @if(auth()->check() && auth()->user()->role == 1)

<div class="flex col md:flex-row w-full">
    <div class="w-1/2  py-6">

        <h4 class="text-base text-gray-600 ">
            {{ __('Add User') }}
        </h4>

       <p class="text-sm text-gray-400">
 {{ __('Add new account for users.') }}
       </p>



    </div>


    <div class="py-6 w-full">
        <div class="max-w ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('user-profile-information.update') }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', auth()->user()->name)" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', auth()->user()->email)" required />
                        </div>

                        <div class="mt-4" x-data="{ showAdviserType: false }">
                            <x-label for="user_type" value="{{ __('User Type') }}" />
                            <select id="user_type" name="user_type" class="block w-full mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-2" x-on:change="showAdviserType = (event.target.value === 'adviser')">
                                <option value="user">User</option>
                                <option value="adviser">Adviser</option>
                                <option value="admin">Admin</option>
                            </select>

                            <div class="mt-4" x-show="showAdviserType">
                                <x-label for="adviser_type" value="{{ __('Advisers') }}" />
                                <select id="adviser_type" name="adviser_type" class="block w-full mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-2">
                                    <option value="tax">Reiss</option>
                                    <option value="investment">Shizu</option>
                                    <option value="legal">Kira</option>
                                </select>
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
@endif














            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>





        </div>
    </div>

@endsection
