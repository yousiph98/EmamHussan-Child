<x-app-layout>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    <form method="POST" action="{{ route('kid.destroy',['id'=>$kid->id]) }}">
                        @csrf
                        <table class="table table-hover " dir="rtl">
                            <thead class=" table-secondary " >
                                <tr>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                        <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                            {{ __('سبب الحجب')}} 
                                        </h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-right">
                                    {{-- <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >{{ __(' الدولة ')}}</td> --}}
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="block_id"  id="block_id"class="select-input w-full" type="integer">
                                            @foreach($blocks  as $index => $block)
                                                <option value="{{ $block->id }}" dir="rtl">{{ $index+1 }}{{ __(') ')}} {{ $block->causes }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <x-text-input id="note" class="block mt-1 w-full" placeholder="مــــلاحظـــــــــات" type="text" name="note" :value="old('note')" autocomplete="note" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>              
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('اظافة') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
