<x-app-layout>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    
                    <form method="POST" action="{{ route('bill.store') }}">
                        @csrf
                        <table class="table table-hover " dir="rtl">
                            <thead class=" table-secondary " >
                                <tr>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                        <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                            {{ __('اظافة منتسب')}} 
                                        </h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="name" placeholder="الاسم الرباعي" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </td>
                                    {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="family_name" placeholder="اللقب" class="block mt-1 w-full" type="text" name="family_name" :value="old('family_name')"  autofocus autocomplete="family_name" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="mother" placeholder="اسم الام" class="block mt-1 w-full" type="text" name="mother" :value="old('mother')"  autofocus autocomplete="mother" />
                                    </td> --}}
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="num_card" placeholder="رقم الباج" class="block mt-1 w-full" type="text" name="num_card" :value="old('num_card')"  autocomplete="num_card" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" ><x-text-input id="birth_date"  type="date" class="block mt-1 w-full"   name="birth_date" value="{{ date('Y-m-d') }}" required autocomplete="" />
                                    </td>
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="phone1" placeholder="هاتف 1" class="block mt-1 w-full" type="text" name="phone1" :value="old('phone1')"  required autofocus autocomplete="phone1"  />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="phone2" placeholder="هاتف 2" class="block mt-1 w-full" type="text" name="phone2" :value="old('phone2')"  autocomplete="phone2" />
                                    </td> --}}
                                </tr>

                                <tr class="">
                                </tr>
                                {{-- <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' الجنسية ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="country_id" id="country_id" class="select-input block mt-1 w-full" type="integer">
                                            @foreach($countries  as $index => $country)
                                                <option value="{{ $country->id }}" dir="rtl">{{ $index+1 }}{{ __(') ')}} {{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="city_id"  id="city_id"class="select-input w-full" type="integer">
                                            @foreach($cities  as $index => $city)
                                                <option value="{{ $city->id }}" dir="rtl">{{ $index+1 }}{{ __(') ')}} {{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="address" placeholder="العنوان" class="block mt-1 w-full" type="text" name="address" :value="old('address')"  autocomplete="" />
                                    </td>
                                </tr> --}}
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' التعين ')}}</td> --}}
                                    {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="status_id"  id="status_id"class="select-input w-full" type="integer">
                                            @foreach($statuses  as $index => $status)
                                                <option value="{{ $status->id }}" dir="rtl">{{ $index+1 }}{{ __(') ')}} {{ $status->status }}</option>
                                            @endforeach
                                        </select>
                                    </td> --}}
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="department_id"  id="department_id"class="select-input w-full" type="integer">
                                            @foreach($departments  as $index => $department)
                                                <option value="{{ $department->id }}" dir="rtl">{{ $index+1 }}{{ __(') ')}} {{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="unit" placeholder="الشعبة" class="block mt-1 w-full" type="text" name="unit" :value="old('unit')"  autocomplete="unit" />
                                    </td> --}}
                                    {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="position_id"  id="position_id"class="select-input w-full" type="integer">
                                            @foreach($positions  as $index => $position)
                                                <option value="{{ $position->id }}" dir="rtl">{{ $index+1 }}{{ __(') ')}} {{ $position->position }}</option>
                                            @endforeach
                                        </select>
                                    </td> --}}
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="nid" placeholder="الرقم الوظيفي" class="block mt-1 w-full" type="text" name="nid" :value="old('nid')"  autocomplete="nid" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="is_male" id="is_male"class="select-input block mt-1 w-full" type="integer">
                                            <option value="1" dir="rtl">{{ __(' 1) ذكر ')}}</option>
                                            <option value="0" dir="rtl">{{ __(' 2) انثى ')}}</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="note" placeholder="الملاحظات" class="block mt-1 w-full" type="text" name="note" :value="old('note')"  autocomplete="" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" ></td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" ></td>
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
