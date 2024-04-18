<x-app-layout>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" dir="rtl">
                    <form method="POST" action="{{ route('kid.store',['id'=>$marital->id]) }}">
                        @csrf
                        <table class="table table-hover " dir="rtl">
                            <thead class=" table-secondary " >
                                <tr>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                        <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                            {{ __('اظافة طفل')}} 
                                        </h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' الاسم ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' تاريخ الميلاد ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="birth_date" class="block mt-1 w-full"   name="birth_date" type="date"  value="{{ date('Y-m-d') }}" required autocomplete="birth_date" />
                                    </td>
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' الجنس ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="is_male" id="is_male"class="select-input block mt-1 w-full" type="integer">
                                            <option value="1" dir="rtl">{{ __(' 1) ذكر ')}}</option>
                                            <option value="0" dir="rtl">{{ __(' 2) انثى ')}}</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('is_male')" class="mt-2" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' تاريخ الاظافة ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="add_date" class="block mt-1 w-full"   name="add_date" type="date"  value="{{ date('Y-m-d') }}" required autocomplete="add_date" />
                                    </td>
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' ملاحظات ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="note" class="block mt-1 w-full" placeholder="--------" type="text" name="note" :value="old('note')" autocomplete="note" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class=" flex items-center mt-4">
                            <x-primary-button class="w-75 bg-danger fw-bolder fs-4 ms-4 text-center">
                                <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                    <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                        {{ __('اضافة طفل جديد') }}
                                    </h3>
                                </th>
                            </x-primary-button>
                        </div>
                    </form>
                    <div class=" items-center mt-4">
                        <a href="{{ route('bill.index',['id'=>$marital->id])}}">
                            <x-primary-button class="w-75 ms-4 fs-4 bg-success text-center">
                                <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                    <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                        {{ __('تم..العودة للاستمارة') }}
                                    </h3>
                                </th>
                            </x-primary-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
