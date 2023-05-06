<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- add post form --> 
                    <form method="POST" action="{{ route('password.confirm') }}" class="grid grid-cols-12 gap-3">
                        @csrf
                        <div class="col-span-6 flex flex-col space-y-6"> 
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full"
                                   type="text"
                                   name="title"
                                />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="image" :value="__('Image')" class="mb-5" />
                                <div class="relative border p-4 rounded-lg w-full h-72 flex items-center justify-center">
                                    <input type="file" class="w-full h-full opacity-0 absolute top-0 left-0">
                                    <div class="flex flex-col gap-2 items-center"> 
                                        <i class="bi bi-card-image text-4xl text-gray-300"></i>
                                        <span class="text-sm block"> Upload Image </span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-start mt-4">
                                <x-primary-button>
                                    {{ __("Save") }}
                                </x-primary-button>
                            </div>
                       </div> 
                       <div class="col-span-6">
                            <div>
                                 <div>
                                    <x-input-label for="description" :value="__('Description')" />
                                    <x-input-textarea />
                                    <x-input-error :messages="$errors->get('Description')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
