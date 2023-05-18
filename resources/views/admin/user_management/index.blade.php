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


</div>
@endif














            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>





        </div>
    </div>

@endsection
