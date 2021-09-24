@extends('layouts.app')
@section('content')
    <x-auth-card title="Register">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- School -->
            <div class="mt-4">
                <x-label for="school" :value="__('School')" />

                <x-input id="school" class="block mt-1 w-full" type="text" name="school" :value="old('school')" required />
            </div>

            <!-- Guardian Name -->
            <div class="mt-4">
                <x-label for="guardian_name" :value="__('Guardian Name')" />

                <x-input id="guardian_name" class="block mt-1 w-full" type="text" name="guardian_name" :value="old('guardian_name')" required />
            </div>

            <!-- Guardian Email -->
            <div class="mt-4">
                <x-label for="guardian_email" :value="__('Guardian Email')" />

                <x-input id="guardian_email" class="block mt-1 w-full" type="email" name="guardian_email" :value="old('guardian_email')" required />
            </div>

              <!-- Password -->
              <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-10">
                <a class="text-sm mr-4 button__links"  href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
@endsection