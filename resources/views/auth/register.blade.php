<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="" :value="__('الرقم الوظيفي')" dir="rtl" />
            <x-text-input id="employee_id" class="block mt-1 w-full "  type="text" name="employee_id" :value="old('employee_id')" required autofocus autocomplete="employee_id" />
            <x-input-error :messages="$errors->get('employee_id')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('البريد الالكتروني')" dir="rtl" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('رمز الحساب')" dir="rtl" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('تاكيد الحساب')" dir="rtl"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- active -->
        <div>
            <x-input-label for="" :value="__('حالة الحساب')" dir="rtl"/>
            <select name="active" id="active"class="block mt-1 w-full" type="integer">
                <option value="0" dir="rtl">غير نشط</option>
                <option value="1" dir="rtl">تنشيط</option>
            </select>
            <x-input-error :messages="$errors->get('active')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('لديك حساب؟') }}
            </a>
            <x-primary-button class="ms-4">
                {{ __('انشاء') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
