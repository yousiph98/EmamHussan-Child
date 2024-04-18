<x-app-layout>
    @include('sweetalert::alert')
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="text-gray-900 dark:text-gray-100" dir="rtl">
                {{-- @if($bills->isEmpty())
                    <div class="">
                        <h3>
                            {{ __('لا يوجد بيانات')}} .
                        </h3>
                    </div>
        
                @else --}}
                    <table class="table table-hover pull-right" >
                        <thead class=" table-secondary " >
                            <tr>
                                <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                    <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                        {{ __('عرض استمارة المنتسب')}} 
                                    </h3>
                                </th>
                                <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                    <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                        {{ __(' تاريخ فتح الاستمارة')}} {{ $bills->active_date }} 
                                    </h3>
                                </th>
                                <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                    <form method="POST" action="{{ route('employee.update',['id'=>$bills->BillEmployee->id]) }}">
                                        @csrf
                                        <div class="form-group">
                                            <x-text-input id="note" placeholder=" اظافة ملاحظات" class="block mt-1 w-full text-right" type="text" name="note"  />
                                        </div>
                                    </form>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <table class="table table-hover pull-right" >
                        <thead class=" table-secondary " >
                        </thead>
                        <tbody>
                            <tr scope="col" class="">
                                <td scope="col">
                                    <div class="card card-j col-lg-12" >
                
                                        <table class="table table-hover ">
                                            <thead class=" table-secondary " >
                                                <tr class="text-center">
                                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">|{{ __(' معلومات المنتسب ')}} </th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <table class="table table-hover pull-right" >
                                            <thead class=" table-secondary " >
                                            </thead>                                                         
                                            <tbody>
                                                    <tr class="text-right">
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' اسم المنتسب ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->name }} {{ $bills->BillEmployee->family_name }}</td>
                                                        {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->family_name }}</td> --}}
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' الجنس ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >
                                                            @switch($bills->BillEmployee)
                                                                @case($bills->BillEmployee->is_male == true)
                                                                    {{ __(' ذكر ')}}
                                                                @break
                                                                @case($bills->BillEmployee->is_male == false)
                                                                    {{ __(' انثى ')}}
                                                                @break
                                                            @endswitch
                                                        </td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' تاريخ الميلاد ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->birth_date }}</td>
                                                    </tr>
                                                    <tr class="">
                                                    </tr>
                                                    <tr class="text-right">
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary " >{{ __(' الجنسية ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->EmployeeCountry->name ?? "بلا"}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary " >{{ __(' المدينة ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->EmployeeCity->name ?? "بلا" }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary " >{{ __(' العنوان ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->address }}</td>
                                                    </tr>
                                                    <tr class="">
                                                    </tr>
                                                    <tr class="text-right">
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary " >{{ __(' نوع التعين ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->EmployeeStatus->status ?? "بلا" }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary " >{{ __(' القسم ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->EmployeeDepartment->name ?? "بلا" }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary " >{{ __(' العنوان الوظيفي ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->EmployeePosition->position  ?? "بلا" }}</td>
                                                    </tr>
                                                    <tr class="">
                                                    </tr>
                                                    <tr class="text-right">
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' الرقم الوظيفي ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->nip }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' رقم البطاقة ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->num_card }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' رقم الهاتف ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ __(' 1 : ')}}{{ $bills->BillEmployee->phone1 }}{{ __(' 2 : ')}}{{ $bills->BillEmployee->phone2 }}</td>
                                                        <td class="text-center">
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                    </tr>
                                                    <tr class="text-right">
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary " >{{ __(' الملاحظات ')}}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $bills->BillEmployee->note }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' تحرير ')}}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('employee.edit',['id'=>$bills->BillEmployee->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('تحرير') }}
                                                                </x-primary-button>
                                                            </a>
                                                        </td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary " >{{ __(' اضافة زوجة ')}}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('marital.create',['id'=>$bills->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('اضافة') }}
                                                                </x-primary-button>
                                                            </a>
                                                        </td>
                                                    </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                                <td scope="col">
                                    <div class="card card-j col-lg-12" >
                                        <table class="table table-hover ">
                                            <thead class=" table-secondary " >
                                                <tr class="text-center">
                                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">|{{ __(' معلومات الزوجية ')}} </th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>

                                        <table class="table table-hover  " >
                                            <thead class=" table-secondary " >
                                            </thead>
                                                {{-- {{ dd($billsMarital) }} --}}
                                    
                                            <tbody>
                                                <tr class="pull-center">
                                                    @foreach($billsMarital  as $index => $marital)
                                                        <th scope="row" class="bg-info max-w-3xl mx-auto sm:px-6 lg:px-4" >
                                                            @switch($bills->BillEmployee)
                                                                @case($bills->BillEmployee->is_male == true)
                                                                    {{ __(' زوجة ')}}{{ $index+1 }}
                                                                @break
                                                                @case($bills->BillEmployee->is_male == false)
                                                                    {{ __(' زوج ')}}
                                                                @break
                                                            @endswitch
                                                        </th>
                                                        <td scope="row" class="bg-warning  max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->name }}</td>
                                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الميلاد')}}</th>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->birth_date }}</td>
                                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الملاحظات')}}</th>
                                                        {{-- <td scope="row" class="w-25"  >{{ $marital->add_date }}</td> --}}
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->note }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('marital.edit',['id'=>$marital->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('تحرير') }}
                                                                </x-primary-button>
                                                            </a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ route('kid.create',['id'=>$marital->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('اضافة طفل') }}
                                                                </x-primary-button>
                                                        </a>
                                                        </td>
                                                        <tr class="">
                                                        </tr>
                                                    @endforeach
                                                    @foreach($blockedMarital  as $index => $marital)
                                                        <th scope="row" class="bg-danger max-w-3xl mx-auto sm:px-6 lg:px-4" >
                                                            @switch($bills->BillEmployee)
                                                                @case($bills->BillEmployee->is_male == true)
                                                                    {{ __(' زوجة ')}}{{ $index+1 }}
                                                                @break
                                                                @case($bills->BillEmployee->is_male == false)
                                                                    {{ __(' زوج ')}}
                                                                @break
                                                            @endswitch
                                                        </th>
                                                        <td scope="row" class="w-25 " >{{ $marital->name }}</td>
                                                        <th scope="row" class="bg-warning fw-bolder fs-4 max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الميلاد')}}</th>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->birth_date }}</td>
                                                        {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->maritalCountry->name }}</td> --}}
                                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الحذف')}}</th>
                                                        <td scope="row" class="w-25" >{{ $marital->deleted_at }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->note }}</td>
                                                        <td class="text-center">
                                                            {{-- <a href="{{ route('kid.create',['id'=>$marital->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('اضافة طفل') }}
                                                                </x-primary-button>
                                                            </a> --}}
                                                        </td>
                                                        <tr class="">
                                                        </tr>
                                                    @endforeach
                                                {{-- <tr class="text-center">
                                                    <th scope="col" class="w-50 mx-auto sm:px-6 lg:px-4 table-secondary">{{ __(' معلومات الاطفال ')}} </th>
                                                </tr> --}}
                                                <tr class="pull-center">
                                                    @foreach($billsKid  as $index => $kid)
                                                        <th scope="row" class="bg-info max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __(' طفل ')}} {{ $index+1 }}</th>
                                                        <td scope="row" class="bg-warning fw-bolder fs-4 max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid->name }}</td>
                                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الميلاد')}}</th>
                                                        <td scope="row" class="w-25 " >{{ $kid->birth_date }}</td>
                                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الاضافة')}}</th>
                                                        <td scope="row" class="w-25"  >{{ $kid->add_date }}</td>
                                                        {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid=1 }}</td> --}}
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid->note }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('kid.edit',['id'=>$kid->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('تحرير') }}
                                                                </x-primary-button>
                                                            </a>
                                                        </td>
                                                        <tr class="">
                                                        </tr>
                                                    @endforeach
                                                    @foreach($blockedKids  as $index => $kid)
                                                    <th scope="row" class="bg-danger max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __(' طفل ')}}{{ $index+1 }}</th>
                                                    {{-- <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('محجوب')}}</th> --}}
                                                    <td scope="row" class="bg-warning fw-bolder fs-4 max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid->name }}</td>
                                                    <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الميلاد')}}</th>
                                                    <td scope="row" class="w-25 " >{{ $kid->birth_date }}</td>
                                                    <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الحذف')}}</th>
                                                    <td scope="row" class="w-25" >{{ $kid->deleted_at }}</td>
                                                        {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid=1 }}</td> --}}
                                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid->note }}</td>
                                                    <td class="text-center">
                                                        {{-- <a href="{{ route('employee.edit',['id'=>$kid->id]) }}">
                                                            <x-primary-button class="block mt-1 ms-4 ">
                                                                {{ __('تحرير') }}
                                                            </x-primary-button>
                                                        </a> --}}
                                                    </td>
                                                    <tr class="">
                                                    </tr>
                                                @endforeach

                                                </tr>
                                                <tr class="">
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr scope="col" class="">
                                <td scope="col">
                                    <div class="card card-j col-lg-12" >
                                        <table class="table table-hover ">
                                            <thead class=" table-secondary " >
                                                <tr class="text-center">
                                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">|{{ __(' معلومات المشمولين ')}} </th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <table class="table table-hover ">
                                            <thead class=" table-secondary " >
                                            </thead>
                                            <tbody>
                                                {{-- <tr class="pull-center">
                                                    @foreach($billsMarital->take(2)  as $index => $marital)
                                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >
                                                            @switch($bills->BillEmployee)
                                                                @case($bills->BillEmployee->is_male == true)
                                                                    {{ __(' زوجة ')}}{{ $index+1 }}
                                                                @break
                                                                @case($bills->BillEmployee->is_male == false)
                                                                    {{ __(' زوج ')}}
                                                                @break
                                                            @endswitch
                                                        </th>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->name }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->add_date }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('marital.editBlock',['id'=>$marital->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('حجب') }}
                                                                </x-primary-button>
                                                            </a>
                                                        </td>
                                                        <tr class="">
                                                        </tr>
                                                    @endforeach
                                                </tr> --}}
                                                <tr class="pull-center">
                                                    @foreach($billsKid->take(3)  as $index => $kid)
                                                        <th scope="row" class="bg-info max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __(' طفل ')}}{{ $index+1 }}</th>
                                                        <td scope="row" class="bg-warning fw-bolder fs-4 max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid->name }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid->birth_date }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid->note }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('kid.edit',['id'=>$kid->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('تحرير') }}
                                                                </x-primary-button>
                                                            </a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ route('kid.editBlock',['id'=>$kid->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('حجب') }}
                                                                </x-primary-button>
                                                        </a>
                                                        </td>
                                                        <tr class="">
                                                        </tr>
                                                    @endforeach
                                                </tr>
                                                <tr class="">
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>

                                <td scope="col">
                                    <div class="card card-j col-lg-12" >
                                        <table class="table table-hover ">
                                            <thead class=" table-secondary " >
                                                <tr class="text-center">
                                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">|{{ __(' معلومات المحجوبين ')}} </th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <table class="table table-hover ">
                                            <thead class=" table-secondary " >
                                            </thead>
                                            <tbody>
                                                {{-- <tr class="pull-center">
                                                    @foreach($blockedMarital as $index => $marital)
                                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >
                                                            @switch($bills->BillEmployee)
                                                                @case($bills->BillEmployee->is_male == true)
                                                                    {{ __(' زوجة ')}}{{ $index+1 }}
                                                                @break
                                                                @case($bills->BillEmployee->is_male == false)
                                                                    {{ __(' زوج ')}}
                                                                @break
                                                            @endswitch
                                                        </th>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->name }}</td>
                                                        <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $marital->note }}</td>
                                                        <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الحذف')}}</th>
                                                        <td scope="row" class="w-25" >{{ $marital->deleted_at }}</td>
                                                        <td scope="row" class="w-25" >{{ $marital->MaritalBlock->causes }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('marital.destroy',['id'=>$marital->id]) }}">
                                                                <x-primary-button class="block mt-1  ms-4 ">
                                                                    {{ __('تحرير') }}
                                                                </x-primary-button>
                                                        </a>
                                                        </td>
                
                                                        <tr class="">
                                                        </tr>
                                                    @endforeach
                                                </tr> --}}
                                                <tr class="pull-center">
                                                    @foreach($blockedKids as $index => $kid)
                                                        <tr class="">
                                                            <th scope="row" class="bg-danger max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __(' طفل ')}}{{ $index+1 }}</th>
                                                            <td scope="row" class="bg-warning fw-bolder fs-4 max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid->name }}</td>
                                                            <th scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4" >{{ __('الحذف')}}</th>
                                                            <td scope="row" class="w-25" >{{ $kid->deleted_at }}</td>
                                                            <td scope="row" class="w-25" >{{ $kid->KidBlock->causes ?? 'بلا'}}</td>
                                                            <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 " >{{ $kid->note }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('kid.editBlock',['id'=>$kid->id]) }}">
                                                                    <x-primary-button class="block mt-1  ms-4 ">
                                                                        {{ __('تحرير') }}
                                                                    </x-primary-button>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="{{ route('kid.restore',['id'=>$kid->id]) }}">
                                                                    <x-primary-button class="block mt-1  ms-4 ">
                                                                        {{ __(' الغاء الحجب ') }}
                                                                    </x-primary-button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                        </tr>
                                                    @endforeach
                                                </tr>
                                                <tr class="">
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>

                            </tr>
                        
                        </tbody>

                    </table>
                {{-- @endif --}}
        
            </div>
        </div>
</x-app-layout>
