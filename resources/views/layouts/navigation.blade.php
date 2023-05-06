<nav class="py-4 w-full bg-white">
    <div class="container flex items-center justify-between">
        <a href="{{route('index')}}">
            <x-application-logo />
        </a>
        <div class="flex items-center gap-x-5">
           @auth()
                <x-nav-link href="{{route('dashboard')}}" > Home </x-nav-link>
                <x-nav-link href="{{route('dashboard-posts')}}" > Posts </x-nav-link>
                
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @endauth
            @guest()
                <x-nav-link href="{{route('login')}}" > Login </x-nav-link>
                <x-nav-link
                    href="{{route('register')}}"
                    class="bg-indigo-500 px-4 py-2 rounded-md text-white border-b-0 hover:bg-indigo-700/90 hover:text-white cursor-default"
                >
                    Register
                </x-nav-link>
            @endguest
        </div>
    </div>
</nav>
