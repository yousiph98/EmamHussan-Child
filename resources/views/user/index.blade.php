<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 text-right" >
                <form action="{{ route('user.index')}}" method="GET">
                    <div class="form-group">
                        <x-text-input id="data" placeholder=" بحث عن الاسم .. اللقب .. الرقم الوظيفي" class="block mt-1 w-full text-right" type="text" name="data"  />
                    </div>
                    <x-primary-button class="">
                        {{ __('بحـــث') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" dir="rtl">

        <table class="table table-hover pull-right" >
            <thead class=" table-secondary " >
                <tr>
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <th scope="col" class="bg-dark max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                            <h2 scope="col" class="h3 scale-100 p-6 bg-white ">
                                {{ __('معلومات المستخدمين')}}
                            </h2>
                        </th>
                        <th scope="col" class="w-25 bg-dark max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                            <a href="{{ route('user.create') }}" class=" bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" >
                                <h2 scope="col" class="h3 scale-100 p-6 bg-white ">
                                    {{ __('اضافة مستخدم . . .') }}
                                </h2>
                            </a>
                        </th>
                    </div>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        @if($users->isEmpty())
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-right">
                    <h3>
                        {{ __('لا يوجد بيانات')}} 
                    </h3>
                </div>
            </div>
        </div>
        
        @else
            {{-- <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100" dir="rtl"> --}}
                        <table class="table table-hover ">
                            <thead class=" table-dark ">
                                <tr>
                                    <th scope="col">NID</th>
                                    <th scope="col" class="w-25">{{ __(' الاسم الرباعي واللقب')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('البريد الالكتروني')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">{{ __('اضافة صلاحيات')}} </th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach($users  as $index => $user)
                                    <tr class="bg-secondary">
                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $index+1 }}</th>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $user->UserEmployee->name ?? "بلا" }} {{ $user->UserEmployee->family_name ?? "بلا"  }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $user->email }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('user.create_permission',['id'=>$user->id]) }}">
                                                <x-primary-button class="block mt-1  ms-4 ">
                                                    {{ __('الصلاحيات') }}
                                                </x-primary-button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>    
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
