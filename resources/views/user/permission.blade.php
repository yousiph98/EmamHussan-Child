<x-app-layout>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" >
                    <form method="POST" action="{{ route('user.permission',['id'=>$user->id]) }}">
                        @csrf
                        <table class="table table-hover " dir="rtl">
                            <thead class=" table-secondary " >
                                <tr>
                                    <th scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 text-center">
                                        <h3 scope="col" class="max-w-3xl mx-auto sm:px-6 lg:px-4 ">
                                            {{ __('اضافة صلاحيات')}} 
                                        </h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-right">
                                    <td scope="row" class="max-w-3xl mx-auto sm:px-6 lg:px-4 table-secondary" >
                                        <select name="role" id="role" class="block mt-1 w-full" type="integer">
                                            @foreach($roles  as $index => $role)
                                                <option value="{{ $role->name }}" dir="rtl">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
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
