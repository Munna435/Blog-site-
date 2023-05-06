<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     <!-- post list table -->
                    <table class="table-auto w-full">
                       <thead class="text-left">
                            <tr> 
                                <th class="max-w-[100px]"> # ID </th>
                                <th class="max-w-[250px]"> title </th>
                                <th class="max-w-[100px]"> Image </th>
                                <th class="max-w-[250px]"> Description </th>
                                <th class="max-w-[50px]"> Likes </th>
                                <th class="max-w-[50px]"> Comments </th>
                                <th> Action </th>
                            </tr>
                        </thead> 

                        <tbody>
                            <tr>
                                <td> 2342 </td>
                                <td> Title here.... </td>
                                <td> Image  </td>
                                <td> Description </td>
                                <td> Likes </td>
                                <td> Comments </td>
                                <td class="flex items-center gap-3"> 
                                    <a href="" class="px-3 py-1.5 rounded-md bg-gray-100 text-gray-500/90 hover:bg-red-500 hover:text-red-50">  <i class="bi bi-trash-fill"> </i> </a>
                                    <a href="" class="px-3 py-1.5 rounded-md bg-gray-100 text-gray-500/90 hover:bg-green-500 hover:text-green-50">  <i class="bi bi-pen-fill"> </i> </a>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
