<x-app-layout>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    
                    <form method="POST" action="{{ route('employee.update',['id'=>$employee->id]) }}">
                        @csrf
                        <table class="table table-hover " dir="rtl">
                            <thead class=" table-secondary " >
                                <tr>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                        <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                            {{ __('تحديث بيانات منتسب')}} 
                                        </h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <table class="table table-hover " dir="rtl">
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                    <x-text-input id="name" placeholder="الاسم الرباعي" class="block mt-1 w-full" type="text" name="name" value="{{$employee->name}}" required autofocus autocomplete="" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="is_male" id="is_male"class="select-input block mt-1 w-full" type="integer">
                                            @switch($employee)
                                                @case($employee->is_male == true)
                                                    <option value="{{$employee->is_male}}" dir="rtl">
                                                        {{ __(' 1) ذكر ')}}
                                                    </option>
                                                @break
                                                @case($employee->is_male == false)
                                                    <option value="{{$employee->is_male}}" dir="rtl">
                                                        {{ __(' 1) انثى ')}}
                                                    </option>
                                                @break
                                            @endswitch
                                            @switch($employee)
                                                @case($employee->is_male == false)
                                                    <option value="1" dir="rtl">
                                                        {{ __(' 2) ذكر ')}}
                                                    </option>
                                                @break
                                                @case($employee->is_male == true)
                                                    <option value="0" dir="rtl">
                                                        {{ __(' 2) انثى ')}}
                                                    </option>
                                                @break
                                            @endswitch
                                        </select>
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="birth_date"  class="block mt-1 w-full" type="date" name="birth_date" value="{{$employee->birth_date}}"  autocomplete="" />
                                    </td>
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                </tr>

                                <tr class="">
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="department_id"  id="department_id"class="select-input w-full" type="integer">
                                            <option class="bg-info" value="{{$employee->department_id}}" dir="rtl">{{ $employee->EmployeeDepartment->name ?? null}}</option>
                                            @foreach($departments  as $index => $department)
                                                <option value="{{ $department->id }}" dir="rtl">{{ $index+1 }}{{ __(') ')}} {{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="nid" placeholder="الرقم الوظيفي" class="block mt-1 w-full" type="text" name="nid" value="{{$employee->nid}}"  autocomplete="nid" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="num_card" placeholder="رقم الباج" class="block mt-1 w-full" type="text" name="num_card" value="{{$employee->num_card}}"  autocomplete="num_card" />
                                    </td>
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="note" placeholder="الملاحظات" class="block mt-1 w-full" type="text" name="note" value="{{$employee->note}}"  autocomplete="" />
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
