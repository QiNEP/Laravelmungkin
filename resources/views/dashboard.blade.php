<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <p class="text-center mb-16 text-3xl font-semibold text-white">Album Manager</p>
                    <ul class="grid grid-flow-row gap-6">
                        <li class="flex justify-between"><p class="text-white border-b-2">Add a new album aside from the already given or inputed before, with specific format</p> <a href="{{ route('adddata') }}" class="bg-white hover:bg-green-400 active:bg-green-500 text-black p-2 rounded-md hover:bg-b duration-200">ADD</a></li>
                        <li class="flex justify-between"><p class="text-white border-b-2">Update an already existing Album, remove unwanted part or change it to something else entirely</p> <a href="{{ route('updatedata') }}" class="bg-white text-black p-2 hover:bg-green-400 active:bg-green-500 rounded-md hover:bg-b duration-200">UPDATE</a></li>
                        <li class="flex justify-between"><p class="text-white border-b-2">Delete an already existing Album, and its not reversable, but you can add in the same album in the 'add' feature</p> <a href="" class="bg-white text-black p-2 hover:bg-green-400 active:bg-green-500 rounded-md hover:bg-b duration-200">DELETE</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
