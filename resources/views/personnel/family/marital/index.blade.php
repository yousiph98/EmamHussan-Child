<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" dir="rtl">
            {{ __('قسم الشؤون الادارية') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" dir="rtl">
                    @if($maritals->isEmpty())
                        <div class="">
                            <h3>
                                {{ __('لا يوجد بيانات')}} .
                            </h3>
                        </div>
            
                    @else
                        <table class="table table-hover ">
                            <thead class=" table-dark ">
                                <tr>
                                    <th scope="col">NID</th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">|{{ __(' اسم الزوجة الثلاثي')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">|{{ __('تاريخ الميلاد')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">|{{ __('الجنسية')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">|{{ __('المحافظة')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">|{{ __('عنوان السكن')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">|{{ __('تاريخ الاضافة')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">|{{ __(' سبب عدم الشمول')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">|{{ __(' الملاحظات')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">|{{ __('تحرير')}} </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($maritals  as $index => $marital)
                                    <tr class="bg-secondary">
                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $index+1 }}</th>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $marital->name }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $marital->birth_date }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $marital->country_id }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $marital->city_id }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $marital->address }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $marital->add_date }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $marital->block_id }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $marital->not }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('marital.edit',['id'=>$marital->id]) }}">
                                                <button type="button" class="bg-black">{{ __('تحديث بيانات')}}</button>
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
