@props(['title' => "samsung a52", 'image' => '', 'description' => ''])


<div class="flex flex-col gap-3 rounded-lg overflow-hidden">
    <div class="rounded-lg h-80 w-full overflow-hidden">
        <img src="{{$image}}" alt='' class="object-fill w-full h-full" />
    </div>
    <div class="py-2">
        <div class="flex justify-between">
            <div class="mb-3">
                <a href="{{ route('index') }}" class="hover:text-indigo-500"><h3 class=""> Wireless Charging </h3></a>
                <span class="text-sm font-medium text-gray-500"> Author name </span>
            </div>
        </div>
        <p class="text-sm line-clamp-3"> {{$description}} </p>
        <div class="flex items-center justify-between mt-3">
            <a href="#" class="py-2 px-5 rounded-md text-sm border border-gray-200 bg-indigo-50 text-indigo-500 hover:bg-indigo-500 hover:text-indigo-50 transition-colors duration-300">Read More</a>
            <span class="text-xs text-gray-500 font-[300]"><span class="text-gray-400">Posted: </span>14<sup>th</sup> Feb, 2023</span>
        </div>
    </div>
</div>
