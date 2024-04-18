<x-app-layout>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    
                    <form method="POST" action="{{ route('marital.store',['id'=>$bill->id]) }}">
                        @csrf
                        <table class="table table-hover " dir="rtl">
                            <thead class=" table-secondary " >
                                <tr>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                        <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                            {{ __('اظافة زوجة')}} 
                                        </h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' الاسم الثلاثي ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="birth_date" class="block mt-1 w-full"   name="birth_date" type="date" value="{{ date('Y-m-d') }}" required autocomplete="username" />
                                    </td>
                                </tr>
                                <tr class="">
                                </tr>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' تاريخ الاظافة ')}}</td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="add_date" class="block mt-1 w-full"   name="add_date" type="date"  value="{{ date('Y-m-d') }}" required autocomplete="username" />
                                    </td>
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="note" placeholder="الملاحظات" class="block mt-1 w-full" type="text" name="note" :value="old('note')"  autocomplete="" />
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        
                        <!-- Block -->
                        {{-- <div class="mt-4">
                            <x-input-label for="block_id" :value="__('سبب عدم السشمول')" dir="rtl" />
                            <x-text-input id="block_id" class="block mt-1 w-full" type="text" name="block_id" :value="old('now')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('block_id')" class="mt-2" />
                        </div> --}}
            
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