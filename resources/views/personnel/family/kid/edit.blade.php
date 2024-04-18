<x-app-layout>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    
                    <form method="POST" action="{{ route('kid.update',['id'=>$kid->id]) }}">
                        @csrf
                        <table class="table table-hover " dir="rtl">
                            <thead class=" table-secondary " >
                                <tr>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                        <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                            {{ __('تحديث بيانات الطفل')}} 
                                        </h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' الاسم ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$kid->name}}" required autofocus autocomplete="username" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' تاريخ الميلاد ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="birth_date" class="block mt-1 w-full"  name="birth_date" type="date" value="{{$kid->birth_date}}" required autocomplete="birth_date" />
                                    </td>
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' الجنس ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="is_male" id="is_male"class="block mt-1 w-full" type="integer">
                                            @switch($kid)
                                                @case($kid->is_male == true)
                                                    <option value="{{$kid->is_male}}" dir="rtl">
                                                        {{ __(' ذكر ')}}
                                                    </option>
                                                @break
                                                @case($kid->is_male == false)
                                                    <option value="{{$kid->is_male}}" dir="rtl">
                                                        {{ __(' انثى ')}}
                                                    </option>
                                                @break
                                            @endswitch
                                            @switch($kid)
                                                @case($kid->is_male == false)
                                                    <option value="1" dir="rtl">
                                                        {{ __(' ذكر ')}}
                                                    </option>
                                                @break
                                                @case($kid->is_male == true)
                                                    <option value="0" dir="rtl">
                                                        {{ __(' انثى ')}}
                                                    </option>
                                                @break
                                            @endswitch
                                        </select>
                                        <x-input-error :messages="$errors->get('is_male')" class="mt-2" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' تاريخ الاظافة ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="add_date" class="block mt-1 w-full" name="add_date" type="date" value="{{$kid->add_date}}" required autocomplete="username" />
                                    </td>
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' ملاحظات ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="note" class="block mt-1 w-full" type="text" name="note" value="{{$kid->note}}"  autocomplete="username" />
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('انشاء') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
