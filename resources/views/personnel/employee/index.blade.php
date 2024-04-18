<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 text-right" >
                <form action="{{ route('employee.index')}}" method="GET">
                    <div class="form-group">
                        <x-text-input id="data" placeholder=" بحث عن الاسم .. اللقب .. القسم .. الرقم الوظيفي" class="block mt-1 w-full text-right" type="text" name="data"  />
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
                                {{ __('معلومات المنتسبين')}}
                            </h2>
                        </th>
                        <th scope="col" class="w-25 bg-dark max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                            <a href="{{ route('employee.create') }}" class=" bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" >
                                <h2 scope="col" class="h3 scale-100 p-6 bg-white ">
                                    {{ __('اضافة منتسب . . .') }}
                                </h2>
                            </a>
                        </th>
                    </div>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        @if($employees->isEmpty())
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
                                    <th scope="col">ت</th>
                                    <th scope="col" class="w-25">{{ __(' الاسم الرباعي واللقب')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('الرقم الوظيفي')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('رقم البطاقة')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('الميلاد')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('الجنسية')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('المحافظة')}} </th>
                                    <th scope="col" class="mw-25">{{ __('السكن')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('الهاتف')}} </th>
                                    <th scope="col" class="mw-25">{{ __('التعين')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('القسم')}} </th>
                                    <th scope="col" class="w-25 ">{{ __('الصفة الوظيفية')}} </th>
                                    <th scope="col" class="w-25 max-w-3xl mx-auto sm:px-6 lg:px-4">{{ __('تاريخ المباشرة')}} </th>
                                    <th scope="col" class="w-25">{{ __('تاريخ الانفكاك')}} </th>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">{{ __('تحرير')}} </th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach($employees  as $index => $employee)
                                    <tr class="bg-secondary">
                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $index+1 }}</th>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->EmpName }} {{ $employee->family_name }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->nid }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->num_card }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->birth_date }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->CountryName ?? "بلا" }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->CityName ?? "بلا" }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->address}}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('{')}} {{ $employee->phone1 }} {{ __('} {')}} {{ $employee->phone2 }}{{ __('}')}}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->StatusName ?? "بلا"  }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->DepartmentName ?? "بلا"  }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->PositionName  ?? "بلا" }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->commencement_date }}</td>
                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ $employee->breakup_date }}</td>
                                        <td class="text-center">
                                            {{-- {{ dd($employeesBill[$index+1]['Bills']) }} --}}
                                            @switch($employee)
                                                @case($employee->Bills== 1)
                                                    <a href="{{ route('employee.show',['id'=>$employee->id]) }}">
                                                        <x-primary-button class="bg-info block mt-1  ms-4 ">
                                                            {{ __('عرض') }}
                                                        </x-primary-button>
                                                    </a>
                                                @break
                                                @case($employee->Bills== 0)
                                                    <a href="{{ route('employee.show',['id'=>$employee->id]) }}">
                                                        <x-primary-button class="bg-dark block mt-1  ms-4 ">
                                                            {{ __('انشاء استمارة') }}
                                                        </x-primary-button>
                                                    </a>
                                                @break
                                            @endswitch
                                            {{-- <a href="{{ route('employee.show',['id'=>$employee->id]) }}">
                                                <x-primary-button class="block mt-1  ms-4 ">
                                                    {{ __('تحرير') }}
                                                </x-primary-button>
                                            </a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>    
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
