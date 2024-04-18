<x-app-layout>
    <x-slot name="header">
        <div class="flex" dir="rtl">
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <a href="{{ route('home.staffing') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" >
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pull-right" >
                        {{ __('الرئيسية') }}
                    </h2>
                </a>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <a href="{{ route('status.create') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" >
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pull-right" >
                        {{ __('++') }}
                    </h2>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" dir="rtl">
                    @if($statuses->isEmpty())
                        <div class="">
                            <h3>
                                {{ __('لا يوجد بيانات')}} .
                            </h3>
                        </div>
            
                    @else
                        <table class="table table-hover text-right" dir="rtl">
                            <thead class=" table-dark ">
                                <tr>
                                    <th scope="col">تسلسل</th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __(' الدولة ')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('تحرير')}} </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($statuses  as $index => $status)
                                    <tr class="bg-secondary">
                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $index+1 }}</th>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $status->status }}</td>
                                        <td class="">
                                            <a href="{{ route('country.edit',['id'=>$status->id]) }}">
                                                <x-primary-button class="block mt-1  ms-4 ">
                                                    {{ __('تحرير') }}
                                                </x-primary-button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>    
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
